<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegistroPRoductos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e3fc2f4517.js" crossorigin="anonymous"></script>
</head>
<body>
<h1 class="text-center p-3">Los4Hermanos</h1>
<div class="container-fluid row">
    <form class="col-4 p-3" method="POST">
        <h3 class="text-center text-secundary" >Registro de productos</h3>
        
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
    <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok" >Registrar</button>
    <br><br>
    <?php
        include "./conexion.php";
        include "./RegistroP.php";
        ?>
    </form>
    <div class="col-8 p-4">
    <table class="table">
  <thead class="bg-info" >
    <tr>
      <th scope="col">CodigoDeBarras</th>
      <th scope="col">Precio</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Oferta %</th>
      <th scope="col">Stock</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "./conexion.php";
    $sql = $conexion ->query("select * from producto") ;
    while ($datos=$sql->fetch_object()) { ?>
        <tr>
      <td><?= $datos->CodigoBarras ?></td>
      <td><?= $datos->Precio ?></td>
      <td><?= $datos->Descripcion ?></td>
      <td><?= $datos->Ofertas ?></td>
      <td><?= $datos->Stock ?></td>
      <td>
        <a href="./editar.php?CodigoBarras=<?= $datos->CodigoBarras ?>" class="btn btn-small btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
        <a href="./editar.php" class="btn btn-small btn-danger"><i class="fa-solid fa-trash-can"></i></a>
      </td>
    </tr>
    <?php }
    ?>
  
  </tbody>
</table>
    </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>