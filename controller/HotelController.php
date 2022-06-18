<?php

/*Controlador encargado de contener todas las funciones que van a mostrar las views de alojamiento y todo lo relacionado a los cálculos,
algoritmos y demás*/
class HotelController {

    //Constructor
    public function __construct() {
        $this->view = new View();
    }

    //Función encargada de mostrar la vista de Alojamiento
    public function showHotelView() {
        //Using del modelo
        require 'model/HotelModel.php';
        //Instancia del modelo
        $hotel = new HotelModel();
        
        $data['hotels'] = $hotel->getHotels(); 
        
        $this->view->show("hotelView.php", $data);
    }//showHotelView
    
}//HotelController
