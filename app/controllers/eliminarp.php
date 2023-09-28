<?php
require "../models/seccion.model.php";
echo json_encode(parrafo::eliminarDato($_POST['idp']));
?>