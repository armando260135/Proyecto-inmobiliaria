<?php

include("../BD/conexion.php");
$con=conectar();

$id_publicacion=$_GET['id'];

$sql="DELETE FROM crudinmobiliaria.publicacion  WHERE id_publicacion='$id_publicacion'";
$query=pg_query($con,$sql);

    if($query){
        Header("Location:  mostrar/index_mostrar_inmueble.php");
    }
?>