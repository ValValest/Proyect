<?php
require "../models/iamgen.model.php";
$arrayimg = array('imagen' => $_POST['imagen'] ,
'id_seccion' => $_POST['id_seccionI']);
echo json_encode(imagen::guardarDato($arrayimg));
?>