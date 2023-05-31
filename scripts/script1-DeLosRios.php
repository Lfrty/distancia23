<?php
/**
 * Contiene dos funciones que realizan diferentes acciones
 * Una que saluda al nombre introducido y le da la fecha y hora y otra que hace una resta
 * 
 * @author Matías de los Ríos Aguilar
 * 
 * @version 0.5
 * 
 * @category Utilidades
 */

/**
 * Saluda al nombre introducido y le dice la fecha y hora
 * 
 * @param String $nombre Incluye el nombre dado por el usuario
 * 
 * @return void No devuelve nada, lo muestra por pantalla
 * 
 * @version 0.5
 * 
 * @see https://www.php.net/manual/en/function.date.php
 * 
 */
function saluda($nombre){
    echo "Hola ".$nombre." hoy es ". date("d-m-Y"). " y son las " . date("h:i:s");
}


/**
 * Realiza una resta
 * 
 * @param float $minuendo Número sobre el que se va a restar una cantidad
 * 
 * @param float $sustraendo Número que se va a resar al minuendo
 * 
 * @return float Devuelve un el resultado de restar el $minuendo y sustraendo
 * 
 * @version 0.5
 * 
 */
function resta($minuendo, $sustraendo){
    return (float) $minuendo - (float)$sustraendo;
}
