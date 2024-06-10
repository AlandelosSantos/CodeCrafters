
<?php

$conexion=new mysqli("localhost","root","","login-test","3307");
$conexion->set_charset("utf8");

if(!empty($_POST["btn-ingresar"])){

    if(empty($_POST["usr"]) and empty($_POST["cont"])){
        echo '<div class=" alert alert-danger text-center text-danger p-2">Ingrese Usuario y Contrasena</DIV>';
    } else {
        $usuario=$_POST["usr"];
        $clave=mysqli_real_escape_string($conexion,$_POST["cont"]);
        $sql=$conexion->query("select * from users where nom='$usuario' and cont='$clave' ");
        if ($datos=$sql->fetch_object()) {
            header("location:inicio.php");
        } else {
            echo '<div class=" alert alert-danger text-center text-danger p-2">ACCESO DENEGADO</DIV>';
        }
        
    }

}

?>