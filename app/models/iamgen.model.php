<?php

require __DIR__ . "/../config/conexion.php";

class imagen extends Connection
{
    public static function mostrarDatos()
    {
        try {
           $sql = "SELECT * FROM imagen";                      
           $stmt = Connection::getConnection()->prepare($sql);  
           $stmt->execute();                                    
           $result = $stmt->fetchAll();
           return $result;                                      
        }  catch (PDOException $th) {
           echo $th->getMessage();
        }
    }
    public static function obtenerDatoId($id)                   
    {
        try {
            $sql = "SELECT * FROM imagen WHERE id = :id";          //Lo mismo, de seccion traemos el id que es el mismo que $id* y vendrá del controlador. Para poner referencia ponemos ;id
            $stmt = Connection::getConnection()->prepare($sql);     //Prepara sentencia
            $stmt->bindParam(':id', $id);                           //Con el bindParam, se pasan los parámetros, lo que esta en la consulta :id y lo que viene de otro archivo $id
            $stmt->execute();                                       //Ejecuta y retorna con fetch ya que solo devolverá un dato
            $result = $stmt->fetch();
            return $result;
        }   catch (PDOException $th) {
            echo $th->getMessage();
        }
    }
    public static function guardarDato($data)
    {   
        try {
          $sql = "INSERT INTO imagen (id_seccion, imagen) VALUES (:id_seccion, :imagen)";
          $stmt = Connection::getConnection()->prepare($sql);       
          $stmt->bindParam(':id_seccion', $data['id_seccion']);
          $stmt->bindParam(':imagen', $data['imagen']);          //data viene desde el controlador, por eso deben de tener el mismo nombre y los pasamos a los que estaán con :
          $stmt->execute();                                     //Ejecuta
          return true;                                         //Devuelve un True
        } catch (PDOException $th) {                            
          echo $th->getMessage();
        }        
    }
    public static function actualizarDato($data)
    {
        try {
          $sql = "UPDATE imagen SET id_seccion = :id_seccion, imagen = :imagen WHERE id = :id";     //Actualiza los datos de la tabla
          $stmt = Connection::getConnection()->prepare($sql);
          $stmt->bindParam(':id_seccion', $data['id_seccion']);
          $stmt->bindParam(':imagen', $data['imagen']);
          $stmt->bindParam(':id', $data['id']);
          $stmt->execute();
          return true;
        } catch (PDOException $th) {
          echo $th->getMessage();
        }
    }
    public static function eliminarDato($id)
    {
        try {
          $sql = "DELETE FROM imagen WHERE id = :id";
          $stmt = Connection::getConnection()->prepare($sql);
          $stmt->bindParam(':id', $id);
          $stmt->execute();
          return true;
        } catch (PDOException $th) {
          echo $th->getMessage();
        }
    }
}

?>