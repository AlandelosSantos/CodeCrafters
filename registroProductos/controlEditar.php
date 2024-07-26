<?php 

if(!empty($_POST["btnregistrar"])){
    if(!empty($_POST["CodigoB"]) and !empty($_POST["Precio"]) and !empty($_POST["Descripcion"]) and !empty($_POST["Oferta"]) and !empty($_POST["Stock"])){
            $CodigoBarras=$_POST["CodigoBarras"];
            $CodigoB=$_POST["CodigoB"];
            $Precio=$_POST["Precio"];
            $Descripcion=$_POST["Descripcion"];
            $Oferta=$_POST["Oferta"];
            $Stock=$_POST["Stock"];
            $sql=$conexion->query("UPDATE producto SET CodigoBarras='$CodigoB',Precio='$Precio',Descripcion='$Descripcion',Ofertas='$Oferta',Stock=$Stock where CodigoBarras = $CodigoBarras");
if ($sql==1) {
    echo" <script>window.location.herf = 'index.php'; </script> ";
    exit;
} else {
    echo"<div class='alert alert-danger'>Error al modificar</div>";
}


}else{
    echo"<div class='alert alert-warning'>Algun campo esat vacio</div>";
    }
}

?>