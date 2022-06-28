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

        //Se obtiene todos los datos de los rent a cars de la base de datos para mostrarlos en la vista cuando el usuario ingresa 
        $data['rentACars'] = $rentACar->getRentACars();

        //Se muestra la vista de rent a cars con todos los rent a cars de la base de datos 
        $this->view->show("rentACarView.php", $data);
    } //Fin showRentACarView()

    //Función encargada de obtener las compañias de Rent a Car dependiendo de los parámetros dados por el usuario
    public function getRentACars()
    {

        //Using del modelo
        require 'model/RentACarModel.php';
        //Instancia del modelo
        $rentACar = new RentACarModel();

        //Llamada del procedimiento almacenado para obtener las compañias de rent a cars dependiendo de los parámetros ingresados por el usuario. Los rent a cars
        //recomendados mediante mySQL, se guardan en un array llamado $data
        $data = $rentACar->getRecommendations($_POST["carType"], $_POST["provinces"]);

        //Variable $message que va a contener el mensaje que se va a enviar por ajax a la vista, dicho mensaje va a ser el código html para mostrar los rent a cars 
        //recomendados o va a ser un mensaje sencillo mencionando que no se encuentran resultados.
        $message = "";

        //Si el procedimiento almacenado no retorna nada, entonces se muestra el siguiente mensaje
        if (count($data) == 0) {
            $message = "<b> No hay resultados para su búsqueda. Por favor cambie sus criterios de búsqueda. </b>";
        } else { //Si el procedimiento almacenado retorna rent a cars, se hace lo siguiente

            //Se recorre la variable $data, que contiene los registros de la base de datos dependiendo de los parámetros ingresados por el usuario
            foreach ($data as $rentacar) {

                //Variable auxiliar que va a contener código html, en donde gracias a ello se puede mostrar las estrellas de cada rent a car en la vista
                $stars = "";

                //Se recorre cada tupla de estrellas de los rent a cars para poder mostrarlo en la vista
                for ($i = 0; $i < $rentacar[5]; $i++) {
                    $stars = $stars . ' <span class="fa fa-star" style="color: orange;"></span> ';
                }

                //Finalmente, se arma el mensaje de respuesta una vez finalizado dicho método. El mensaje es código html para poder mostrar en la vista las
                //recomendaciones de los rent a cars
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
                        ' . $stars . '
                        <p class="card-text">' . $rentacar[1] . '</p>
                        <p class="card-text text-center">' . $rentacar[2] . '</p>
                        <a class="card-text text-center" href="https://' . $rentacar[3] . '">' . $rentacar[3] . '</a>
                    </div>
                </div>
            </div>';
            }
        }

        //Se devuelve el mensaje a la vista gracias a ajax
        echo $message;
    } //Fin getRentACars()

}//RentACarController
