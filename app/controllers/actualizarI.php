<?php
requirE "../models/iamgen.model.php";
$arrayimg = array('imagen' => $_POST['imagen'] ,
'id_seccion' => $_POST['id_seccionI'] ,
'id' => $_POST['idI']);
echo json_encode(imagen::actualizarDato($arrayimg));
?>