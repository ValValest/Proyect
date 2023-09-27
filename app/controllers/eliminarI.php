<?php
require "../models/iamgen.model.php";
echo json_encode(imagen::eliminarDato($_POST['idI']));
?>