<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $CodigoBarras = $_POST["CodigoBarras"];
    $CodigoB = $_POST["CodigoB"];
    $Precio = $_POST["Precio"];
    $Descripcion = $_POST["Descripcion"];
    $Oferta = $_POST["Oferta"];
    $Stock = $_POST["Stock"];

    $sql = $conexion->query("UPDATE producto SET CodigoBarras='$CodigoB', Precio='$Precio', Descripcion='$Descripcion', Ofertas='$Oferta', Stock='$Stock' WHERE CodigoBarras='$CodigoBarras'");
    
    if ($sql) {
        header("Location: index.php");
    } else {
        echo "<div class='alert alert-danger'>Error al modificar</div>";
    }
} 
?>
