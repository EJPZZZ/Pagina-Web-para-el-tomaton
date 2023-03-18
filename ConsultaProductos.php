<html>
  <head>
    <link rel="stylesheet" href="/style.css">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="css/bootstrap.min.css"
      rel="stylesheet"
      crossorigin="anonymous"
    />
<center>
    <title>WEB</title>
    
    <h4>Datos de productos registrados</h4>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.html">Menu Principal</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="/Alumnos.html"
            >Alumnos <span class="sr-only"></span></a
          >
          <a class="nav-item nav-link" href="/inicio.html">Inicio</a>
          <a class="nav-item nav-link" href="/productos.html">Productos</a>
          <a class="nav-item nav-link disabled" href="/Clientes.html">Clientes</a>
        </div>
      </div>
    </nav>
  </head>
</center>
  <body>
    <div class="container">
      <div class="row">
        <div class="col"></div>
        <div class="col-10">
          <center>
          <h3>Tabla de los productos</h3>
        </center>
        <table class="table table-stripped 
        table-bordered table-hover"
         <tr>
            <td>
                Id del producto
            </td>
            <td>
                Descripcion
            </td>
            <td>
                Marca
            </td>
            <td>
                Cantidad
            </td>
            <td>
                Precio
            </td>
         </tr>
         <?php
                  $conexion= mysqli_connect("localhost","root","","proyecto1") or die ("Error al conectar la BD");
         $consulta="SELECT * FROM productos";
         $Resultado= mysqli_query ($conexion,$consulta);
         while($row= mysqli_fetch_row($Resultado))
         {
            echo "<tr><td>".$row[0]." </td><td>";
            echo $row[1]."</td><td>";
            echo $row[2]."</td><td>";
            echo $row[3]."</td><td>";
            echo $row[4]."</td></tr>";
            
            
            
            
         }
         ?>
         </table>
         <div class="mb-3">
            <center>
            
            <a class="btn btn-outline-primary btn-lg" href="/productos.html" role="button">
            Agregar
            </a> 
            
            <a class="btn btn-outline-warning btn-lg" href="/UpdateProductos.html" role="button"> 
            Modificar
            </a>
            
            <a class="btn btn-outline-Danger btn-lg" href="/DeleteProductos.html" role="button">
                Eliminar 

            </a>
            
          </center>
        </div>
        </div>
        <div class="col"></div>
      </div>
    </div>
    
    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
  </body>
</html>