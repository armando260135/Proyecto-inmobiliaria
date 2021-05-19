<?php
function conectar(){
    $con=pg_connect("host=localhost port=5432 dbname=tarea1 user=postgres password=basededatosbyron");

    if(isset($con)){
    }else{
    echo 'problemas';
    }
    return $con;

}
conectar();
?>