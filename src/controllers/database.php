<?php
require_once '../models/database.php';

$methodDatabase = $_GET['db'] ?? '';

?>

<!doctype html>
<html lang="en">

<head>
  <title>Base de datos</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <main>
    <?php
    switch ($methodDatabase) {
      case 'create_db':
        Database::createDatabase();
        echo '<br><a href="/index.html" class="btn btn-primary"/>Inicio</a>';
        break;
      case 'create_table':
        Database::createTable();
        echo '<br><a href="/index.html" class="btn btn-primary"/>Inicio</a>';
        break;
      default:
        echo 'opción inválida';
        echo '<br><a href="/index.html" class="btn btn-primary"/>Inicio</a>';
        break;
    }
    ?>
  </main>
</body>

</html>