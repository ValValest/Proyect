<?php
require_once "../models/seccion.model.php";
$arraytitulo = array('titulo' => $_POST['titulo'] ,
'nombre' => $_POST['nombre'] ,
'id' => $_POST['id']);
echo json_encode(seccion::actualizarDato($arraytitulo));
?>