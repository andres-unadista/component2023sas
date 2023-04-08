<?php
$host_name = 'localhost';
$database = 'registro_producto';
$user_name = 'root';
$password = '';

$coenxion = mysqli_cnnect($host_name, $user_name, $password, $database);

if (mysqli_error($coenxion)){
    echo "error al conectarme";

}else{
    echo "Conexion correcta";
}

?>