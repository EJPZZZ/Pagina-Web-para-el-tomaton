<?php
include_once('db.php');

//Recibo todos los datos del formulario
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$trabajo = $_POST['trabajo'];
$escuela = $_POST['escuela'];
$domicilio = $_POST['domicilio'];
$numero = $_POST['numero'];


echo "Los datos son los siguientes: <br>";
echo "$nombre, $edad, $trabajo, $escuela, $domicilio, $numero";

var_dump('check');
$conectar = conn(); //ejecuta las conexiones a la bd
$sql = "INSERT INTO work (nombre, edad, trabajo, escuela, domicilio, numero) 
        VALUES ('$nombre', '$edad', '$trabajo', '$escuela', '$domicilio', '$numero')";
$result = mysqli_query($conectar, $sql) or trigger_error("Query Failed! SQL-Error:" . mysqli_error($conectar), E_USER_ERROR);
echo "$sql";
