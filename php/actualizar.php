<!doctype html>
<html lang="es-la">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <link href = "css/bootstrap.min.css" rel = "stylesheet">
    <script src = "js/bootstrap.bundle.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.slim.js" integrity="sha256-DKU1CmJ8kBuEwumaLuh9Tl/6ZB6jzGOBV/5YpNE2BWc=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <title>Creación de base de datos!</title>
  </head>
  <body>

  <?php

  require('config.php');

  $i = $_POST['id'];
  $v = $_POST['val_cod'];
  $m = $_POST['val_marca'];
  $p = $_POST['val_precio'];
  $u = $_POST['uni_pro'];


  $sql = "UPDATE Productos SET val_cod='$v', val_marca='$m', val_precio='$p', uni_pro='$u'  WHERE id='$i'";

  if (mysqli_query($conn, $sql)) {


  ?>

  <!-- The Modal -->
    
      <div class="modal-dialog">
        <div class="modal-content">
        
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Excelente</h4>
            <button class="close" onclick="location.href='../index.html'">&times;</button>
          </div>
          
          <!-- Modal body -->
          <div class="modal-body">
            
      <?php
          echo "Información actualizada satisfactoriamente " . "<br>";
      ?>


          </div>
          
          <!-- Modal footer -->
          <div class="modal-footer">
            <button class="btn btn-danger" onclick="location.href='../index.html'">Cerrar</button>
          </div>
          
        </div>
      </div>



  <?php


  } else {


  ?>

  <!-- The Modal -->
    
      <div class="modal-dialog">
        <div class="modal-content">
        
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Error</h4>
            <button class="close" onclick="location.href='../index.html'">&times;</button>
          </div>
          
          <!-- Modal body -->
          <div class="modal-body">
            
      <?php
          echo "Error actualizando la información " . "<br>". mysqli_error($conn);
      ?>


          </div>
          
          <!-- Modal footer -->
          <div class="modal-footer">
            <button class="btn btn-danger" onclick="location.href='../index.html'">Cerrar</button>
          </div>
          
        </div>
      </div>



  <?php

  }

  mysqli_close($conn);
  ?> 

</body>
</html>