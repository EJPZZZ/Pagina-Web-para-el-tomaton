<?php
include_once('db.php');

//Recibo todos los datos del formulario
$IDProducto = $_POST['IDProducto'];
$Descripcion = $_POST['Descripcion'];
$Marca = $_POST['Marca'];
$Cantidad = $_POST['Cantidad'];
$Precio = $_POST['Precio'];

echo "Los datos borrados son los siguientes: <br>";
echo "$IDProducto, $Descripcion, $Marca, $Cantidad";

var_dump('check');
$conectar = conn(); //ejecuta las conexiones a la bd Y aqui fue donde lenin le cambio 
$sql = "DELETE FROM productos 
        WHERE IDProducto=$IDProducto";
       
$result = mysqli_query($conectar, $sql) or trigger_error("Query Failed! SQL-Error:" . mysqli_error($conectar), E_USER_ERROR);
echo "$sql";


?>