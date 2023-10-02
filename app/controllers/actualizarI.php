<?php
require_once "../models/iamgen.php";
$arrayimg = array('imagen' => $_POST['imagen'] ,
'id_seccion' => $_POST['id_seccionI'] ,
'id' => $_POST['idI']);
echo json_encode(imagen::actualizarDato($arrayimg));
?>