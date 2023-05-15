<?php

require __DIR__ . '/../../vendor/autoload.php';
require_once '../models/products.php';

use Dompdf\Dompdf;


$methodDatabase = $_GET['db'] ?? '';
$response = '';

switch ($methodDatabase) {
  case 'ingresar':
    $product = new Product();
    $info = [
      'code' => $_POST['code'],
      'name' => $_POST['name'],
      'price' => $_POST['price'],
      'brand' => $_POST['brand'],
      'quantity' => $_POST['quantity'],
    ];
    $saveProduct = $product->insertProduct($info);
    if ($saveProduct) {
      $response = 'Producto añadido';
    } else {
      $response = 'Producto no añadido';
    }
    break;
  case 'pdf':

    $product = new Product();
    $products = $product->getProducts();

    $dompdf = new Dompdf();
    $html = '<!doctype html><html lang="es">';
    $html = '<h1>Listado de productos existentes</h1>';
    $html .= '<table>
    <tr>
      <th>Código</th>
      <th>Nombre</th>
      <th>Cantidad</th>
    </tr>';

    foreach ($products as $product) {
      $html .= '<tr>';
      $html .= '<td>' . $product['code'] . ' </td>';
      $html .= '<td>' . $product['name'] . ' </td>';
      $html .= '<td>' . $product['quantity'] . '</td>';
      // Agrega más columnas según las necesidades
      $html .= '</tr>';
    }

    $html .= '</table>';
    $html .= '</body></html>';

    $dompdf->loadHtml($html);
    $dompdf->render();
    $dompdf->stream();
    break;
  default:
    $response = 'opción inválida';
    break;
}

$response .= '<br><a href="/inventory.html" class="btn btn-primary"/>Inventario</a>';
require_once '../views/response.php';
