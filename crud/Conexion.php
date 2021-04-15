<?php
  
  class Conexion {
    public function conectar()
    {
      $conexion = new PDO("mysql:host=localhost:33061;dbname=pdof","root","Nandodrago4");
      return $conexion;
    }


  }
  
  
?>