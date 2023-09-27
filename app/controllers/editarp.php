<?php
require "../models/parfo.model.php";
echo json_encode(parrafo::obtenerDatoId($_POST['idp']));
?>

