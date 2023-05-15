<?php

require __DIR__ . '/database.php';

class Product
{
  private $conn;

  public function __construct()
  {
    $this->conn = Database::getConnection();
  }

  public function insertProduct($data)
  {
    try {
      $stmt = $this->conn->prepare("INSERT INTO products (code, name, brand, price, quantity) VALUES (:code, :name, :brand, :price, :quantity)");
      $price = floatval($data['price']);
      $quantity = intval($data['quantity']);

      $stmt->bindParam(':code', $data['code']);
      $stmt->bindParam(':name', $data['name']);
      $stmt->bindParam(':brand', $data['brand']);
      $stmt->bindParam(':price', $price);
      $stmt->bindParam(':quantity', $quantity);
      return $stmt->execute();
    } catch (PDOException $e) {
      echo $e->getMessage();
      return false;
    }
  }

  public function getProducts()
  {
    try {
      $stmt = $this->conn->query("SELECT * FROM products");
      $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $products;
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
  }
}
