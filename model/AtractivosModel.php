<?php
class AtractivosModel{
    public $db;   

    // constructor
    public function __construct() {
        require 'libs/SPDO.php';
        $this->db = SPDO::singleton();
    }

    //metodo que obteniene las Frecuencias de los Atractivos
    public function obtenerFrecuenciasAtractivos(){
        $this->db->exec("set names utf8");
        $consulta = $this->db->prepare('
            select atributo, valor, clase, frecuencia from frecuencias');
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    }

    //método que obtiene de la base de datos las probabilidades de los atributos
    public function obtenerProbabilidaesAtributoAtractivos(){
        $this->db->exec("set names utf8");
        $consulta = $this->db->prepare('
            select atributo, valor, clase, probabilidad from probabilidades');
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    }

    //método que obtiene la probabilidad de las clases de los atractivos
    public function obtenerProbabilidaesClaseAtractivos(){
        $this->db->exec("set names utf8");
        $consulta = $this->db->prepare('
            select clase, probabilidad from probabilidadclase');
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    }


    /**
     * Retorna los datos de los atractivos relacionados con la clase denominada
     * 
     * @param clase 1
     */
    public function obtenerAtractivosPorClaseRecomendada($clase){
        $this->db->exec("set names utf8");
        $consulta = $this->db->prepare('
            select 
                id,
                tipolugar,
                tipoturista,
                tipoActividadAtractivo,
                nombre,
                descripcion,
                precio,
                video,
                imagen1,
                imagen2,
                mapa,
                estrellas
            from tb_atractivo_actividad where clase ='.$clase.';');
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    }

    /**
     * Recibe un arreglo con las probabilidades y las guarda en la base de datos
     * 
     * @param data array of arrays
     */
    public function generarProbabilidaesAtributoAtractivos($data) {
        $this->db->exec("set names utf8");
        $probabilidad=array();
        $longitud = count($data);
        $consulta = $this->db->prepare("INSERT INTO probabilidades(atributo, valor, clase, probabilidad) VALUES (?,?,?,?)");
        for($i=0; $i<$longitud; $i++){ 
            $d = array($data[$i]["atributo"], $data[$i]["valor"], $data[$i]["clase"], 
                $data[$i]["probabilidad"]);
            $result = $consulta->execute($d);
        } 
        $consulta->CloseCursor();     
    }
}

?>