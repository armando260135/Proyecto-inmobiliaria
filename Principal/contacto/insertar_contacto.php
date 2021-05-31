<?php
include("../../BD/conexion.php");
$con=conectar();

$cod_contacto=$_POST['cod_contacto']; 
$nombre_realizo_contacto=$_POST['nombre_realizo_contacto'];
$correo_contacto=$_POST['correo_contacto'];
$telefono_contacto=$_POST['telefono_contacto'];
$descripcion_contacto=$_POST['descripcion_contacto'];


$sql="INSERT INTO crudinmobiliaria.contacto VALUES(default,'$nombre_realizo_contacto','$correo_contacto','$telefono_contacto','$descripcion_contacto')";
$query=pg_query($con,$sql);

if($query){
    Header("location:  ../index.php");

}else{
   
}

?>