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

$sql="INSERT INTO crudinmobiliaria.publicacion VALUES(default,'$nombre','$descripcion','$nombre_propietario','$tipo_inmueble','$ciudad','$zona','$direccion','$precio','$name')";
$query=pg_query($con,$sql);

if($query){
    Header("location:  index_inmueble.php");

}else{
   
}

?>



