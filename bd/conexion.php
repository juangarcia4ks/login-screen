<?php
 class Conexion{
     public static function Conectar(){
         define('servidor','mariadb.csn.svc.cluster.local');
         define('nombre_bd','sampledb');
         define('usuario','userRCU');
         define('password','iDhkh1l3dpbn72VN');         
         $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
         
         try{
            $conexion = new PDO("mysql:host=".servidor.";dbname=".nombre_bd, usuario, password, $opciones);             
            return $conexion; 
         }catch (Exception $e){
             die("El error de Conexión es :".$e->getMessage());
         }         
     }
     
 }
?>
