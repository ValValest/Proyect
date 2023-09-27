<?php
require "../models/parfo.model.php";
$arraysec = array('descripcion' => $_POST['descripcion'] ,
'id_seccion' => $_POST['id_seccionp'] ,
'id' => $_POST['idp']);
echo json_encode(parrafo::actualizarDato($arraysec));
?>