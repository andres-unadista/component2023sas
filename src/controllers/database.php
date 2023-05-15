<?php
require_once '../models/database.php';

$methodDatabase = $_GET['db'] ?? '';
$response = '';

switch ($methodDatabase) {
  case 'create_db':
    Database::createDatabase();
    break;
  case 'create_table':
    Database::createTable();
    break;
  default:
    $response = 'opción inválida';
    break;
}

$response .= '<br><a href="/index.html" class="btn btn-primary"/>Inicio</a>';
require_once '../views/response.php';
