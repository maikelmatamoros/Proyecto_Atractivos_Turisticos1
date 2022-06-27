<?php
class AtractivoController {

    //Constructor
    public function __construct() {
        $this->view = new View();
    }//Constructor
    
    public function showAtractivoView(){
        $this->view->show("atractivoView.php", null);  
    }

    public function obtenerFrecuenciaAtractivos(){
        require 'model/AtractivosModel.php';
        $helper = new AtractivosModel();
        $datosAtractivos=$helper->obtenerFrecuenciasAtractivos();
        header('Content-Type: application/json');
        echo json_encode($datosAtractivos);//convierte el objeto en json
    }   

    public function obtenerProbabilidaesAtributoAtractivos(){
        require 'model/AtractivosModel.php';
        $helper = new AtractivosModel();
        $datosAtractivos=$helper->obtenerProbabilidaesAtributoAtractivos();
        header('Content-Type: application/json');
        echo json_encode($datosAtractivos);//convierte el objeto en json
    }  

    public function obtenerProbabilidaesClaseAtractivos(){
        require 'model/AtractivosModel.php';
        $helper = new AtractivosModel();
        $datosAtractivos=$helper->obtenerProbabilidaesClaseAtractivos();
        header('Content-Type: application/json');
        echo json_encode($datosAtractivos);//convierte el objeto en json
    }  

    public function generarProbabilidaesAtributoAtractivos(){
        require 'model/AtractivosModel.php';
        $helper = new AtractivosModel();
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';
        if ($contentType === "application/json") {
            $content = trim(file_get_contents("php://input"));
            $decoded = json_decode($content, true);
            $helper->generarProbabilidaesAtributoAtractivos($decoded); 
        }
    }

    public function obtenerAtractivosPorClaseRecomendada(){
        require 'model/AtractivosModel.php';
        $helper = new AtractivosModel();
        $datosAtractivos=$helper->obtenerAtractivosPorClaseRecomendada(trim(file_get_contents("php://input")));
        header('Content-Type: application/json');
        echo json_encode($datosAtractivos);//convierte el objeto en json    
    }  
      
}


