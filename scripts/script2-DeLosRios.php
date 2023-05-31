<?php

/**
 * Clase Coche
 * Implementa un objeto del tipo Coche
 * Permite acceder y modificar sus valores mediante getters y setters
 * 
 * @author Matías de los Ríos Aguilar
 * 
 * @version 0.5
 * 
 * @category Objetos
 * 
 */
class Coche {

    private $modelo;
    private $puertas;

    private static $numCoches = 0;

    /**
     * Crea un objeto del tipo coche
     * 
     * @param String $modelo Nombre del modelo coche
     * 
     * @param int $puertas Número de puertas del coche
     * 
     * @version 0.1
     * 
     * @return void
     */
    public function __construct($modelo, $puertas){
        $this -> modelo = $modelo;
        $this -> puertas = $puertas;

        self::$numCoches++;
    }

    /**
     * Devuelve el modelo del coche
     * 
     * @return String $modelo Modelo de este coche
     * 
     * @version 0.5
     */
    public function getModelo() {
        return $this -> modelo;
    }

    /**
     * Devuelve el número de puertas del coche
     * 
     * @return int $puertas Número de puertas de este coche
     * 
     * @version 0.5
     */
    public function getpuertas(){
        return $this -> puertas;
    }

    /**
     * Cambia el modelo del coche
     * 
     * @param String $modelo Nuevo modelo del coche
     * 
     * @return void No devuelve ningún valor
     * 
     * @version 0.5
     */
    public function setModelo($modelo){
        $this -> modelo=$modelo;
    }

    /**
     * Cambia el número de puertas del coche
     * 
     * @param int $puertas Nuevo número de puertas del coche
     * 
     * @return void No devuelve ningún valor
     * 
     * @version 0.5
     */
    public function setpuertas(){
        $this -> puertas=$puertas;
    }

    /**
     * Escribe en pantalla el número de coches creados
     * 
     * @return void No devuelve nada
     * 
     * @static Esta función es estática
     * 
     * @todo Se incluirá el número de modificaciones que se han hecho
     * 
     * @version 0.5
     */
    public static function cuentaCoches(){
        echo "Número de coches creados: ". self::$numCoches;
    }

}
