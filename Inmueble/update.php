<?php

include("../BD/conexion.php");
$con=conectar();

$id_publicacion=$_POST['id_publicacion'];
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$nombre_propietario=$_POST['nombre_propietario'];
$tipo_inmueble=$_POST['tipo_inmueble'];
$ciudad=$_POST['ciudad'];
$zona=$_POST['zona'];
$direccion=$_POST['direccion'];
$precio=$_POST['precio'];



$name='pro_'.md5(date('d-m-Y H:m:s')).'.jpg';
$destino= '../image/'.$name;        
$move=move_uploaded_file($_FILES["foto"]["tmp_name"], $destino);
echo $_FILES["foto"]["tmp_name"];



$sql="UPDATE crudinmobiliaria.publicacion SET nombre='$nombre',descripcion='$descripcion',nombre_propietario='$nombre_propietario',tipo_inmueble='$tipo_inmueble',ciudad='$ciudad',zona='$zona',direccion='$direccion',precio='$precio' WHERE id_publicacion='$id_publicacion'";
$query=pg_query($con,$sql);

    if($query){
        Header("location: index_inmueble.php");
    }
?>