<?php
include("../BD/conexion.php");
$con=conectar();

$cod_admin=$_POST['cod_admin'];
$contraseña_admin=$_POST['contraseña_admin'];
$sexo_administrador=$_POST['sexo_administrador'];
$nickname_admin=$_POST['nickname_admin'];
$cod_empleado=$_POST['cod_empleado'];

$sql="INSERT INTO crudinmobiliaria.administrador VALUES('$cod_admin','$contraseña_admin','$sexo_administrador','$nickname_admin','$cod_empleado')";
$query=pg_query($con,$sql);

if($query){
    Header("location:  index_administrador.php");

}else{
   
}


?>