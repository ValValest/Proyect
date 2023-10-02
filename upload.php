<?php     

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);   
//var_dump( $_FILES['imagen']); //Se ocupó para ver funcionamiento de la parte de img y ver qué datos cargaba-->

//Si se quiere subir una imagen
//var_dump(isset($_FILES['imagen']));
//require "./app/models/iamgen.model.php";
require_once "./app/models/iamgen.model.php";
require_once "./app/config/conexion.php"; // Asegúrate de incluir la configuración de la conexión a la base de datos


// if (isset($_FILES['imagen'])) {
//    //echo "HOLA";
//    //Recogemos el archivo enviado por el formulario
//    //$nombre = "nombre";
//    $id_seccion = $_POST["id_seccionI"];
//    $archivo = $_FILES['imagen']['name'];

//    $data = [
//       'id_seccion' => $id_seccion,
//       'imagen' => $archivo,
//    ];

   //var_dump($archivo);
   //$path = './imagen/'.$archivo;  //DOCUMENT_ROOT /home/valeria/Escritorio/Proyecto es en donde estoy parada y voy a concatenar a donde quiero cargar el archivo
   
   
    //echo 'dsa' . $archivo;
   //Si el archivo contiene algo y es diferente de vacio
   /* if (isset($archivo) && $archivo != "") {
      //Obtenemos algunos datos necesarios sobre el archivo
      $tipo = $_FILES['imagen']['type'];
      $tamano = $_FILES['imagen']['size'];
      $temp = $_FILES['imagen']['tmp_name'];
      //var_dump($temp);
      //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
     if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
        echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
        - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>';
        //var_dump($_FILES['imagen']);
     } /*else {
        //Si la imagen es correcta en tamaño y tipo
        //Se intenta subir al servidor
        //$pathexistente = './imagen/capillasixtina_ver_1.jpg';
         //if (move_uploaded_file($temp, $pathexistente)) {
        if (move_uploaded_file($temp, './imagen/'.$archivo)){
            //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
            //chmod('/var/www/html/Proyecto/imagen/'.$archivo, 0777);
            //Mostramos el mensaje de que se ha subido co éxito
            //echo 'imagen actualizada';
            echo '<div><b>Se ha subido correctamente la imagen.</b></div>';
            //Mostramos la imagen subida
            echo '<p><img src="./imagen/' . $archivo . '"></p>';
            //if(imagen::actualizarDato($data)){
            if(imagen::guardarDato($data)){
               echo "Guardado";
            }else{
               echo "Error";
            }
        } else {
           //Si no se ha podido subir la imagen, mostramos un mensaje de error
           echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
        }
      }
      function guardarImagen($id_seccion, $imagen)
      {
         if (imagen::guardarDato($data)) {

         }
      }

   }
}*/


function guardarImagen($seccion_id, $imagen)
{
    $imagenname = $imagen['name'];
    $data = [
        'imagen' => $imagenname,
        'id_seccion' => $seccion_id,
    ];

    if (imagen::guardarDato($data)) {
        move_uploaded_file($imagen['tmp_name'], './imagen/' . $imagen['name']);
        return "Creado con éxito";
    } else {
        return "Error al crear";
    }
}
function actualizarImagen($seccion_id, $imagen, $id, $imagenAnterior)
{

    $imagenname = $imagen['name'];
    $rutaImagen = __DIR__. '/imagen/' . $imagenAnterior;

    if(!empty($imagenname)){
        $data = [
            'imagen' => $imagenname,
            'id_seccion' => $seccion_id,
            'id' => $id,
        ];
        unlink($rutaImagen);
    }else{
        $data = [
            'imagen' => $imagenAnterior,
            'id_seccion' => $seccion_id,
            'id' => $id,
        ];
    }

    if (imagen::actualizarDato($data)) {
        move_uploaded_file($imagen['tmp_name'], './imagen/' . $imagen['name']);
        return "Actualizado con éxito";
    } else {
        return "Error al actualizar";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['guardar'])) {
        $seccion_id = $_POST['id_seccionI'];
        $imagen = $_FILES['imagen'];
        $imagenAnterior = $_POST['imagenUrl'];

        if (isset($_POST['id']) && !empty($_POST['id'])) {
            $id = $_POST['id'];
            $mensaje = actualizarImagen($seccion_id, $imagen, $id, $imagenAnterior);
            echo $mensaje;
            // Redirigir a la misma página después de procesar la solicitud
            //header("Location: " . $_SERVER['HTTP_REFERER'] . "?mensaje=" . urlencode($mensaje));
            //exit; // Asegura que el script termine después de la redirección
        } else {
            $mensaje1 = guardarImagen($seccion_id, $imagen);
            echo $mensaje1;
            // Redirigir a la misma página después de procesar la solicitud
            //header("Location: " . $_SERVER['HTTP_REFERER'] . "?mensaje=" . urlencode($mensaje));
            //exit; // Asegura que el script termine después de la redirección

        }
    }
}

?> 