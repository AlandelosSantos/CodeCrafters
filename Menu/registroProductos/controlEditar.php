<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $CodigoBarras = $_POST["CodigoBarras"];
    $CodigoB = $_POST["CodigoB"];
    $Precio = $_POST["Precio"];
    $Descripcion = $_POST["Descripcion"];
    $Stock = $_POST["Stock"];
     if(  !preg_match("/^[0-9]{1,13}+$/",$CodigoB) || 
          !preg_match("/^[0-9]+$/",$Precio) ||
          !preg_match("/^[a-zA-Z\s]+$/",$Descripcion) || 
          !preg_match("/^[0-9]+$/",$Stock)){
          echo'<div class="alert alert-danger">Error: Datos Incorrectos</div>';
    }else{
    $sql = $conexion->query("UPDATE producto SET CodigoBarras='$CodigoB', Precio='$Precio', Descripcion='$Descripcion', Stock='$Stock' WHERE CodigoBarras='$CodigoBarras'");
    
    if ($sql) {
        header("Location: index.php");
    } else {
        echo "<div class='alert alert-danger'>Error al modificar</div>";
    }
   }
    
}
?>
