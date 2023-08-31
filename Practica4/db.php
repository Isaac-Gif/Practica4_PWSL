<?php
$enlace = mysqli_connect(
    "localhost", //servidor web
    "root", //usuario DB
    "", //contraseña db
    "usuarios" //db
);
if ($enlace){
    echo "Conexion exitosa";
}
?>