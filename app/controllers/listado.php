<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);      

require "../models/seccion.model.php";
echo json_encode(seccion::mostrarDatos()); //Estamos mostrando los datos
?>