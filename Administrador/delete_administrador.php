<?php

include("../BD/conexion.php");
$con=conectar();

$cod_admin=$_GET['id'];

$sql="DELETE FROM crudinmobiliaria.administrador WHERE cod_admin='$cod_admin'";
$query=pg_query($con,$sql);

    if($query){
        Header("Location:  mostrar/index_mostrar_administrador.php");
    }
?>