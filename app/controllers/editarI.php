<?php
require "../models/iamgen.model.php";
echo json_encode(imagen::obtenerDatoId($_POST['idI']));
?>




