<?php 
// Configuracion necesaria para acceder a la base de datos
function conn(){
    $hostname = "localhost";
    $usuariodb = "root";
    $password = "";
    $dbname = "pt";

    // Generando la conexion con el servidor
    $conectar = mysqli_connect($hostname, $usuariodb, $password, $dbname);
    return $conectar;

}

?>