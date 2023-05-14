<!doctype html>}

<?php
    $con = new PDO('mysql:host=localhost;dbname=registro','root','');
    
    if(isset($_GET['nombre'])){
        echo 'hola entraste al if';

        $nombre =$GET['nombre'];
        $marca =$GET['marca'];
        $precio =$GET['precio'];
        $cantidad =$GET['cantidad'];

        $insertar = $con->prepare("INSERT INTO producto(id,nombre,marca,precio,cantidad) VALUES (null, '$nombre','$marca','$precio','$cantidad')";
        $insertar->execute();
        


    }
    ?>


<html lang="en">

<head>
  <title>Component 2023 SAS</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="./styles/main.css">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
    crossorigin="anonymous">
  <link rel="stylesheet" href="styles/bootstrap-grid.min.css">
  <style>
    .bg-menu {
      background-color: #457b9d;
    }
  </style>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-sm navbar-dark bg-menu">
      <div class="container">
        <a class="navbar-brand" href="./index.html">Component 2023 SAS</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Administrador
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li><a class="dropdown-item" href="/src/controllers/database.php?db=create_db">Crear base de datos</a></li>
                    <li><a class="dropdown-item" href="/src/controllers/database.php?db=create_table">Crear tabla</a></li>
                    <li><a class="dropdown-item" href="#">Generar reporte PDF</a></li>
                    <li><a class="dropdown-item" href="#">Generar backup</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <li class="nav-item">
              <a class="nav-link active" href="inventory.html">Inventario</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="utilities.html">Utilidades</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main class="container">
    <!-- AÑADIR INVENTARIO -->
    <div class="mt-3">
      <h4 class="card-title text-center">Inventario</h4>
      <!-- ALFONSIN NEWBALL -->
      <div class="text-center">
        <a href="controladores/ingresar.html">
          <button type="button" class="btn btn-primary text white">Ingresar Producto</button>
        </a>
        <a href="controladores/modificar.html">
          <button type="button" class="btn btn-primary text white">Modificar Producto</button>
        </a>
        <a href="controladores/eliminar.html">
          <button type="button" class="btn btn-primary text white">Eliminar Producto</button>
        </a>
        <a href="controladores/consultar.html">
          <button type="button" class="btn btn-primary text white">Consultar Producto</button>
        </a>
      </div>

      <!-- ALFONSIN NEWBALL -->

    </div>
  </main>
  <footer>
    <div class="container fixed-bottom text-center bg-light p-2">
      <span class="fw-bold">Grupo 301127_32</span>
    </div>
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous">
    </script>


  <!-- AÑADIR INVENTARIO -->

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous">
    </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
    crossorigin="anonymous">
    </script>
</body>

</html>