<?php
require "../models/parfo.model.php";
$arraysec = array('descripcion' => $_POST['descripcion'] ,
'id_seccion' => $_POST['id_seccionp']);

echo json_encode(parrafo::guardarDato($arraysec));
?>