<?php

/*Controlador encargado de contener todas las funciones que van a mostrar las views de alojamiento y todo lo relacionado a los cálculos,
algoritmos y demás
IMPORTANTE: Para la obtención de las recomendaciones de rent a cars y alojamiento, se hace uso de un procedimiento almacenado de mySQL. El algoritmo de Bayes se utiliza
para las recomendaciones de atractivos turísticos.*/
class HotelController
{

    //Constructor
    public function __construct()
    {
        $this->view = new View();
    }

    //Función encargada de mostrar la vista de Alojamiento
    public function showHotelView()
    {
        //Using del modelo
        require 'model/HotelModel.php';
        //Instancia del modelo
        $hotel = new HotelModel();

        $data['hotels'] = $hotel->getHotels();

        $this->view->show("hotelView.php", $data);
    } //showHotelView

    //Función encargada de obtener los hoteles dependiendo de los parámetros dados por el usuario
    public function getHotels()
    {

        //Using del modelo
        require 'model/HotelModel.php';
        //Instancia del modelo
        $hotel = new HotelModel();

        $data = $hotel->getRecommendations($_POST["hotelType"], $_POST["turisticZone"]);

        $message = "";

        if (count($data) == 0) {
            $message = "<b> No hay resultados para su búsqueda. Por favor cambie sus criterios de búsqueda. </b>";
        } else {

            foreach ($data as $hotels) {

                $stars = "";

                for ($i = 0; $i < $hotels[5]; $i++) {

                    $stars = $stars . ' <span class="fa fa-star" style="color: orange;"></span> ';
                }

                $message = $message .
                    '<div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100 text-center">
                    <br/>
                    <img class="img-fluid" style="display: block; margin-left: auto;margin-right: auto;width: 50%;" 
                         src="public/img/Hotel Logos/' . $hotels[4] . '" width="150" height="150">
                    <div class="card-body">
                        <h4 class="card-title">
                            <a style="color:black;">' . $hotels[0] . '</a>
                        </h4>
                        '.$stars.'
                        <p class="card-text">' . $hotels[1] . '</p>
                        <p class="card-text text-center">' . $hotels[2] . '</p>
                        <a class="card-text text-center" href="https://' . $hotels[3] . '">' . $hotels[3] . '</a>
                    </div>
                </div>
            </div>';
            }
        }

        echo $message;
    } //Fin getHotels()

}//HotelController
