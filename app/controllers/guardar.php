<?php
require_once "../models/seccion.model.php";
$arraytitulo = array('titulo' => $_POST['titulo'] ,
'nombre' => $_POST['nombre'] );

echo json_encode(seccion::guardarDato($arraytitulo));
?>