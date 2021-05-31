<?php

include("../BD/conexion.php");
$con=conectar();


$cod_admin=$_POST['cod_admin'];
$contraseña_admin=$_POST['contraseña_admin'];
$sexo_administrador=$_POST['sexo_administrador'];
$nickname_admin=$_POST['nickname_admin'];
$cod_empleado=$_POST['cod_empleado'];



$sql="UPDATE crudinmobiliaria.administrador SET contraseña_admin='$contraseña_admin',sexo_administrador='$sexo_administrador',nickname_admin='$nickname_admin'  WHERE cod_admin='$cod_admin'";
$query=pg_query($con,$sql);

    if($query){
        Header("location: mostrar/index_mostrar_administrador.php");
    }
?>