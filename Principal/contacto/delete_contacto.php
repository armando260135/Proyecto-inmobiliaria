<?php

include("../../BD/conexion.php");
$con=conectar();

$cod_contacto=$_GET['id'];

$sql="DELETE FROM crudinmobiliaria.contacto WHERE cod_contacto='$cod_contacto'";
$query=pg_query($con,$sql);

    if($query){
        Header("Location:  ../../mostrar_contacto/index_mostrar_contacto.php");
    }
?>