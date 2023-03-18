<?php
include_once('db.php');

//Recibo todos los datos del formulario
$IdProducto = $_POST['IdProducto'];
$Descripcion = $_POST['Descripcion'];
$Marca = $_POST['Marca'];
$Cantidad = $_POST['Cantidad'];
$Precio = $_POST['Precio'];


echo "Los datos son los siguientes: <br>";
echo "$IdProducto, $Descripcion, $Marca, $Cantidad";

var_dump('check');
$conectar = conn(); //ejecuta las conexiones a la bd
$sql = "INSERT INTO productos (IDProducto, Descripcion, Marca, Cantidad, Precio)
          VALUES ('$IdProducto', '$Descripcion', '$Marca', '$Cantidad', '$Precio')";
$result = mysqli_query($conectar, $sql) or trigger_error("Query Failed! SQL-Error:" . mysqli_error($conectar), E_USER_ERROR);
echo "$sql";


?>