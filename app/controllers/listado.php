<?php
require "../models/seccion.model.php";
echo json_encode(seccion::mostrarDatos()); //Estamos mostrando los datos
?>