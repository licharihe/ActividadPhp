<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    
  <title>Tabla de Productos</title>
  <?php
    $medidas="50%";

  ?>
  <style>
    table {
      border-collapse: collapse;
      width: <?php echo $medidas; ?>;
    }
    
    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
  </style>
</head>
<body>
<h2>Tabla de Productos</h2>

  
  <?php
    // Definir el array de productos
    $productos = array(
      array("Computador Gamer", 10.99, 5, "Img/img1.jpg"),
      array("Mouse Gamer", 5.99, 8, "Img/img2.png"),
      array("Mouse Logitech", 3.49, 12, "Img/img3.jpg"),
      array("Audifonos Blue", 8.99, 3, "Img/img4.jpg"),
      array("Silla Gamer", 12.99, 10, "Img/img5.jpg")
    );
    // Imprimir tabla
    ?>
    <div class="row">
    <?php
    
    foreach ($productos as $producto) {
    ?>
    <div class="col-12 col-sm-6 col-lg-3 "> 
      <div class="card">
        <div class="card">
            <img src="<?php echo $producto [3]?>" class="card-img-top img-fluid" alt="Imagen de la tarjeta">
          <div class="card-body">
            <h5 class="card-title">
                <?php echo $producto[0]; ?>
            </h5>
            <p class="card-text"><h3>Precio <br><?php echo $producto [1]?></h3> </p>
            <p class="card-text"><h5>Disponibles <br><?php echo $producto [2]?></h5> </p>
            <a href="#" class="btn btn-primary">Botón</a>
          </div>
        </div>
      </div>
    </div>

    

    <?php
      }
    ?>
    </div>
    <?php

    
    // Mostrar la tabla de productos
    echo "<br> ";
    echo "<table class='table table-striped table-hover'> ";
    echo "<tr><th>Producto</th><th>Precio</th><th>Cantidad</th></tr>";
    
    foreach ($productos as $producto) {
      echo "<tr>";
      echo "<td>" . $producto[0] . "</td>";
      echo "<td>$" . $producto[1] . "</td>";
      echo "<td>" . $producto[2] . "</td>";
      echo "</tr>";
    }
    
    echo "</table>";
  ?>
  
</body>
</html>