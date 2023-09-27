<?php
require_once "../models/seccion.model.php";
echo json_encode(seccion::obtenerDatoId($_POST['id']));
?>