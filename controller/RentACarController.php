<?php

/*Controlador encargado de contener todas las funciones que van a mostrar las views de rent a car y todo lo relacionado a los cálculos,
algoritmos y demás*/
class RentACarController {

    //Constructor
    public function __construct() {
        $this->view = new View();
    }

    //Función encargada de mostrar la vista de Rent a Car
    public function showRentACarView() {
        
        //Using del modelo
        require 'model/RentACarModel.php';
        //Instancia del modelo
        $rentACar = new RentACarModel();
        
        $data['rentACars'] = $rentACar->getRentACars(); 
        
        $this->view->show("rentACarView.php", $data);
    }//Fin showRentACarView()
    
}//RentACarController
