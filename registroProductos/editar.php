<?php
include "./conexion.php";
$CodigoBa = $_GET["CodigoBarras"];

$sql = $conexion->query("select * from producto where CodigoBarras =$CodigoBa ");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EditarProducto</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<form class="col-4 p-3 m-auto" method="POST">
        <h3 class="text-center text-secundary" >Editar Producto</h3>
        <?php 
        while($datos=$sql->fetch_object()){?>
          <div class="mb-3">
        <label for="exampleInputCodigo" class="form-label">Codigo de Barras</label>
        <input type="text" class="form-control" name="CodigoB">
    </div>
    <div class="mb-3">
        <label for="exampleInputCodigo" class="form-label">Precio</label>
        <input type="text" class="form-control" name="Precio">
    </div>
    <div class="mb-3">
        <label for="exampleInputCodigo" class="form-label">Descripcion</label>
        <input type="text" class="form-control" name="Descripcion">
    </div>
    <div class="mb-3">
        <label for="exampleInputCodigo" class="form-label">Ofertas</label>
        <input type="text" class="form-control" name="Ofertas">
    </div>
    <div class="mb-3">
        <label for="exampleInputCodigo" class="form-label">Stock</label>
        <input type="text" class="form-control" name="Stock">
    </div>  
        <?php }
        ?>
    
    <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok" >Registrar</button>
    <br><br>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>