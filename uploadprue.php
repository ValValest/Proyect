<form action="procesar_formulario.php" method="post" enctype="multipart/form-data">
    <input type="file" name="imagen" id="imagen">
    <input type="submit" value="Subir Imagen">
</form>

<?php
// Verificar si se envió un archivo
if (isset($_FILES['imagen'])) {
    $nombre_archivo = $_FILES['imagen']['name'];
    $tipo_archivo = $_FILES['imagen']['type'];
    $tamaño_archivo = $_FILES['imagen']['size'];

    // Verificar si el archivo es una imagen válida (por ejemplo, verificar el tipo MIME)

    // Generar un nombre único para la imagen
    $nombre_unico = uniqid() . "_" . $nombre_archivo;

    // Mover la imagen a una ubicación en tu servidor
    $carpeta_destino = "uploads/";
    $ruta_destino = $carpeta_destino . $nombre_unico;
    
    move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta_destino);

    // Insertar la URL de la imagen en la base de datos
    $url_imagen = "https://www.tu-sitio.com/" . $ruta_destino;

    // Conectar a la base de datos y realizar la inserción
    $conexion = new mysqli("nombre_servidor", "nombre_usuario", "contraseña", "nombre_base_de_datos");

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    $sql = "INSERT INTO tabla_imagenes (url) VALUES (?)";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $url_imagen);

    if ($stmt->execute()) {
        echo "Imagen cargada y URL insertada en la base de datos correctamente.";
    } else {
        echo "Error al cargar la imagen o insertar la URL en la base de datos: " . $stmt->error;
    }

    $stmt->close();
    $conexion->close();
}
?>
