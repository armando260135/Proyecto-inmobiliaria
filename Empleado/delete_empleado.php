<?php

include("../BD/conexion.php");
$con=conectar();

$cod_empleado=$_GET['id'];

if($cod_empleado=$_GET['id']){
    $sql="DELETE FROM crudinmobiliaria.empleado WHERE cod_empleado='$cod_empleado'";
    }
    else if($cod_empleado=$_GET[$cod_empleado]){
    $sql="DELETE FROM crudinmobiliaria.empleado 
    WHERE cod_empleado IN
    (SELECT empleado.cod_empleado
        FROM crudinmobiliaria.empleado
        INNER JOIN crudinmobiliaria.administrador  
        ON empleado.cod_empleado=administrador.cod_empleado
        WHERE empleado.cod_empleado='$cod_empleado'
    )";
    }

$query=pg_query($con,$sql);

    if($query){
        Header("Location: mostrar_empleado/index_mostrar_empleado.php");
    }
 



?>