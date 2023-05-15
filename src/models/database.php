<?php
class Database
{
  private static $servername = "localhost";
  private static $username = "root";
  private static $password = "12345678"; //12345678
  private static $dbname = "bdunad32";

  public static function getConnection()
  {
    $conn = new PDO("mysql:host=" . self::$servername . ";dbname=" . self::$dbname, self::$username, self::$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
  }

  static function createDatabase()
  {
    try {
      // se crea una instancia PDO
      $conn = new PDO("mysql:host=" . self::$servername, self::$username, self::$password);
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
    try {
      $conn = self::getConnection();

      // sentencia sql 
      $sql = "CREATE TABLE tabla32 (
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
  }
}
