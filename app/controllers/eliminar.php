<?php
require "../models/seccion.model.php";
echo json_encode(seccion::eliminarDato($_POST['id']));
?>