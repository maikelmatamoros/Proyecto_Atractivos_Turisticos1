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

        //Se obtiene todos los datos de los hoteles de la base de datos para mostrarlos en la vista cuando el usuario ingresa 
        $data['hotels'] = $hotel->getHotels();

        //Se muestra la vista de alojamiento con todos los hoteles de la base de datos 
        $this->view->show("hotelView.php", $data);
    } //showHotelView

    //Función encargada de obtener los hoteles dependiendo de los parámetros dados por el usuario
    public function getHotels()
    {

        //Using del modelo
        require 'model/HotelModel.php';
        //Instancia del modelo
        $hotel = new HotelModel();

        //Llamada del procedimiento almacenado para obtener las hoteles dependiendo de los parámetros ingresados por el usuario. Los hoteles
        //recomendados mediante mySQL, se guardan en un array llamado $data
        $data = $hotel->getRecommendations($_POST["hotelType"], $_POST["turisticZone"]);

        //Variable $message que va a contener el mensaje que se va a enviar por ajax a la vista, dicho mensaje va a ser el código html para mostrar los hoteles
        //recomendados o va a ser un mensaje sencillo mencionando que no se encuentran resultados.
        $message = "";

        //Si el procedimiento almacenado no retorna nada, entonces se muestra el siguiente mensaje
        if (count($data) == 0) {
            $message = "<b> No hay resultados para su búsqueda. Por favor cambie sus criterios de búsqueda. </b>";
        } else { //Si el procedimiento almacenado retorna hoteles, se hace lo siguiente

            //Se recorre la variable $data, que contiene los registros de la base de datos dependiendo de los parámetros ingresados por el usuario
            foreach ($data as $hotels) {

                //Variable auxiliar que va a contener código html, en donde gracias a ello se puede mostrar las estrellas de cada hotel en la vista
                $stars = "";

                //Se recorre cada tupla de estrellas de los hoteles para poder mostrarlo en la vista
                for ($i = 0; $i < $hotels[5]; $i++) {

                    $stars = $stars . ' <span class="fa fa-star" style="color: orange;"></span> ';
                }

                //Finalmente, se arma el mensaje de respuesta una vez finalizado dicho método. El mensaje es código html para poder mostrar en la vista las
                //recomendaciones de los hoteles
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
                        ' . $stars . '
                        <p class="card-text">' . $hotels[1] . '</p>
                        <p class="card-text text-center">' . $hotels[2] . '</p>
                        <a class="card-text text-center" href="https://' . $hotels[3] . '">' . $hotels[3] . '</a>
                    </div>
                </div>
            </div>';
            }
        }

        //Se devuelve el mensaje a la vista gracias a ajax
        echo $message;
    } //Fin getHotels()

}//HotelController
