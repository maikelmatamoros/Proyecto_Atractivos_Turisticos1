<?php

class HotelModel
{

    //Variables de clase
    //Base de datos
    protected $db;

    //Constructor
    public function __construct()
    {
        //Driver que permite conectar a mySQL
        require 'libs/SPDO.php';
        //Se guarda la instancia de BD en la variable db
        $this->db = SPDO::singleton();
    } //Fin constructor

    //Aqui para abajo van todas las funciones de la Base de Datos , ejemplo leer, listar, eliminar , actualizar , etc...

    //Función para obtener todos los registros que están en la tabla de tb_ALOJAMIENTO
    public function getHotels()
    {
        $this->db->exec("set names utf8");
        $consulta = $this->db->prepare('call sp_OBTENER_HOTELS()');
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    } //Fin getHotels

    //Función para obtener alojamientos o hoteles dependiendo de los parámetros ingresados por usuario
    public function getRecommendations($hotelType, $turisticZone)
    {
        $this->db->exec("set names utf8");
        $consulta = $this->db->prepare("call sp_OBTENER_RECOMENDACIONES_HOTELS('$hotelType', '$turisticZone');");
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    } //Fin getRecommendations

}//Fin Clase HotelModel 
