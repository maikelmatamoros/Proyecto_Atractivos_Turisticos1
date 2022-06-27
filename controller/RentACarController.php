<?php

/*Controlador encargado de contener todas las funciones que van a mostrar las views de rent a car y todo lo relacionado a los cálculos,
algoritmos y demás.
IMPORTANTE: Para la obtención de las recomendaciones de rent a cars y alojamiento, se hace uso de un procedimiento almacenado de mySQL. El algoritmo de Bayes se utiliza
para las recomendaciones de atractivos turísticos.*/
class RentACarController
{

    //Constructor
    public function __construct()
    {
        $this->view = new View();
    }

    //Función encargada de mostrar la vista de Rent a Car
    public function showRentACarView()
    {

        //Using del modelo
        require 'model/RentACarModel.php';
        //Instancia del modelo
        $rentACar = new RentACarModel();

        $data['rentACars'] = $rentACar->getRentACars();

        $this->view->show("rentACarView.php", $data);
    } //Fin showRentACarView()

    //Función encargada de obtener las compañias de Rent a Car dependiendo de los parámetros dados por el usuario
    public function getRentACars()
    {

        //Using del modelo
        require 'model/RentACarModel.php';
        //Instancia del modelo
        $rentACar = new RentACarModel();

        $data = $rentACar->getRecommendations($_POST["carType"], $_POST["provinces"]);

        $message = "";

        if (count($data) == 0) {
            $message = "<b> No hay resultados para su búsqueda. Por favor cambie sus criterios de búsqueda. </b>";
        } else {

            foreach ($data as $rentacar) {

                $stars = "";

                for ($i = 0; $i < $rentacar[5]; $i++) {
                    $stars = $stars . ' <span class="fa fa-star" style="color: orange;"></span> ';
                }

                $message = $message .
                    '<div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100 text-center">
                    <br/>
                    <img class="img-fluid" style="display: block; margin-left: auto;margin-right: auto;width: 50%;" 
                         src="public/img/Rent a Car Logos/' . $rentacar[4] . '" width="150" height="150">
                    <div class="card-body">
                        <h4 class="card-title">
                            <a style="color:black;">' . $rentacar[0] . '</a>
                        </h4>
                        '.$stars.'
                        <p class="card-text">' . $rentacar[1] . '</p>
                        <p class="card-text text-center">' . $rentacar[2] . '</p>
                        <a class="card-text text-center" href="https://' . $rentacar[3] . '">' . $rentacar[3] . '</a>
                    </div>
                </div>
            </div>';
            }
        }

        echo $message;
    } //Fin getRentACars()

}//RentACarController
