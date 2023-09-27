<?php 

//declare(strict_types=1);

//  //detalles de la conexion
// $conn_string = "host=localhost port=5432 dbname=uno_bd user=root password=root options='--client_encoding=UTF8'";

//  //establecemos una conexion con el servidor postgresSQL
// $dbconn = pg_connect($conn_string);

// // Revisamos el estado de la conexion en caso de errores. 
// if(!$dbconn) {
// echo "Error: No se ha podido conectar a la base de datos\n";
// } else {
// echo "Conexión exitosa\n";
// }

// // Close connection
// pg_close($dbconn);

//

class Connection
 {  
     private $host = 'localhost' ; //string $host = 'localhost';
     public $dbname = 'uno_bd';
     public $port = "5432";
     public $user = 'root';
     public $password = 'root';
     public $driver = 'pgsql';
     public $connect;

     public static function getConnection()
     {
         try {
             $connection = new Connection();
             $connection->connect = new PDO("{$connection->driver}:host={$connection->host};port={$connection->port};dbname=
             {$connection->dbname}", $connection->user, $connection->password);
             $connection->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             return $connection->connect;  
             //echo "connection succes";          
         } catch (PDOException $e) {
             echo "Error: " . $e->getMessage();
         }
     }
 }
 Connection::getConnection();

?>