<?php

require_once "../config/conexion.php";

class parrafo extends Connection
{
    public static function mostrarDatos()
    {
        try {
           $sql = "SELECT * FROM parrafo";                      //Variable sql
           $stmt = Connection::getConnection()->prepare($sql);  //Sentencia
           $stmt->execute();                                    //Aquí ejecuta
           $result = $stmt->fetchAll();
           return $result;                                      //Retorna todos los datos por medio de PDO
        }  catch (PDOException $th) {
           echo $th->getMessage();
        }
    }
    public static function obtenerDatoId($id)                   //Obtenemos dato por id este $id*
    {
        try {
            $sql = "SELECT * FROM parrafo WHERE id = :id";          //Lo mismo, de seccion traemos el id que es el mismo que $id* y vendrá del controlador. Para poner referencia ponemos ;id
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
          $sql = "INSERT INTO parrafo ( id_seccion, descripcion) VALUES (:id_seccion, :descripcion)";       //Insertamos en la tabla seccion
          $stmt = Connection::getConnection()->prepare($sql);
          $stmt->bindParam(':id_seccion', $data['id_seccion']);
          $stmt->bindParam(':descripcion', $data['descripcion']);          //data viene desde el controlador, por eso deben de tener el mismo nombre y los pasamos a los que estaán con :
          $stmt->execute();                                     //Ejecuta
          return true;                                         //Devuelve un True
        } catch (PDOException $th) {                            
          echo $th->getMessage();
        }        
    }
    public static function actualizarDato($data)
    {
        try {
          $sql = "UPDATE parrafo SET id = :id, id_seccion = :id_seccion, descripcion = :descripcion WHERE id = :id";     //Actualiza los datos de la tabla
          $stmt = Connection::getConnection()->prepare($sql);
          $stmt->bindParam(':id', $data['id']);
          $stmt->bindParam(':id_seccion', $data['id_seccion']);
          $stmt->bindParam(':descripcion', $data['descripcion']);
          $stmt->execute();
          return true;
        } catch (PDOException $th) {
          echo $th->getMessage();
        }
    }
    public static function eliminarDato($id)
    {
        try {
          $sql = "DELETE FROM parrafo WHERE id = :id";
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