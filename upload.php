<?php
//var_dump( $_FILES['imagen']); //Se ocupó para ver funcionamiento de la parte de img y ver qué datos cargaba-->

//Si se quiere subir una imagen
//var_dump(isset($_FILES['imagen']));
require "../app/models/iamgen.model.php";
if (isset($_FILES['imagen'])) {
   echo "HOLA";
   //Recogemos el archivo enviado por el formulario
   //$nombre = "nombre";
   //$id_seccion = $_POST["id_seccionI"];
   $archivo = $_FILES['imagen']['name'];
   //$_SERVER['DOCUMENT_ROOT'].'/HolaMundo/Formulario/imagenes/'.$image['name'];
   $path = 'imagen/'.$archivo;  //DOCUMENT_ROOT /home/valeria/Escritorio/Proyecto es en donde estoy parada y voy a concatenar a donde quiero cargar el archivo
   //move_uploaded_file($archivo['tmp_name'], $patch); 
   
    //echo 'dsa' . $archivo;
   //Si el archivo contiene algo y es diferente de vacio
   if (isset($archivo) && $archivo != "") {
      //Obtenemos algunos datos necesarios sobre el archivo
      $tipo = $_FILES['imagen']['type'];
      $tamano = $_FILES['imagen']['size'];
      $temp = $_FILES['imagen']['tmp_name'];
      //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
     if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
        echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
        - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>';
     }
     else {
        //Si la imagen es correcta en tamaño y tipo
        //Se intenta subir al servidor
        if (move_uploaded_file($temp, $path)){
            //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
            chmod('imagen/'.$archivo, 0777);
            //Mostramos el mensaje de que se ha subido co éxito
            echo '<div><b>Se ha subido correctamente la imagen.</b></div>';
            //Mostramos la imagen subida
            echo '<p><img src="imagen/'.$archivo.'"></p>';

        }
        else {
           //Si no se ha podido subir la imagen, mostramos un mensaje de error
           echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
        }
      }
   }
}
?> 