<?php
class Database
{
  static function createDatabase()
  {
    // credenciales
    $servername = "localhost";
    $username = "root";
    $password = ""; //12345678

    try {
      // se crea una instancia PDO
      $conn = new PDO("mysql:host=$servername", $username, $password);
      // configuración para mostrar errores PDO
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // sentencia para crear una base de datos
      $sql = "CREATE DATABASE bdunad32";
      // ejectua la sentencia
      $conn->exec($sql);
      echo "Base de datos creada correctamente";
    } catch (PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }

    // se limpia la conexión
    $conn = null;
  }

  static function createTable()
  {
    $servername = "localhost";
    $username = "root";
    $password = ""; //12345678
    $dbname = "bdunad32";

    try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // sentencia sql 
      $sql = "CREATE TABLE usuarios (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      nombre VARCHAR(30) NOT NULL,
      email VARCHAR(50) NOT NULL,
      password VARCHAR(50) NOT NULL,
      fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
      )";

      $conn->exec($sql);
      echo "Tabla usuarios creada correctamente";
    } catch (PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }
    $conn = null;
  }
}
