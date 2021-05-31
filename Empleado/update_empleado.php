<?php

include("../BD/conexion.php");
$con=conectar();

$cod_empleado=$_POST['cod_empleado'];
$nombre1_empleado=$_POST['nombre1_empleado'];
$nombre2_empleado=$_POST['nombre2_empleado'];
$apellido1_empleado=$_POST['apellido1_empleado'];
$apellido2_empleado=$_POST['apellido2_empleado'];
$documento_empleado=$_POST['documento_empleado'];
$rol_empleado=$_POST['rol_empleado'];
$ciudad_empleado=$_POST['ciudad_empleado'];
$telefono_empleado=$_POST['telefono_empleado'];
$correo_empleado=$_POST['correo_empleado'];
$fecha_inicio_empleado=$_POST['fecha_inicio_empleado'];
$tipo_documento_empleado=$_POST['tipo_documento_empleado'];
$pais_empleado=$_POST['pais_empleado'];
$departamento_empleado=$_POST['departamento_empleado'];
$jornada_empleado=$_POST['jornada_empleado'];

$name_empleado='pro_'.md5(date('d-m-Y H:m:s')).'.jpg';
$destino_empleado= 'image_empleado/'.$name_empleado;        
$move_empleado=move_uploaded_file($_FILES["foto_empleado"]["tmp_name"], $destino_empleado);
echo $_FILES["foto_empleado"]["tmp_name"];

$horario_inicio_empleado=$_POST['horario_inicio_empleado'];
$horario_finalizacion_empleado=$_POST['horario_finalizacion_empleado'];
$estado_empleado=$_POST['estado_empleado'];
$sql="UPDATE crudinmobiliaria.empleado SET nombre1_empleado='$nombre1_empleado',nombre2_empleado='$nombre2_empleado',apellido1_empleado='$apellido1_empleado',apellido2_empleado='$apellido2_empleado',documento_empleado='$documento_empleado',rol_empleado='$rol_empleado',ciudad_empleado='$ciudad_empleado',telefono_empleado='$telefono_empleado',correo_empleado='$correo_empleado',fecha_inicio_empleado='$fecha_inicio_empleado',tipo_documento_empleado='$tipo_documento_empleado',pais_empleado='$pais_empleado',departamento_empleado='$departamento_empleado',jornada_empleado='$jornada_empleado',estado_empleado='$estado_empleado',horario_inicio_empleado='$horario_inicio_empleado',horario_finalizacion_empleado='$horario_finalizacion_empleado' WHERE cod_empleado='$cod_empleado'";
$query=pg_query($con,$sql);

    if($query){
        Header("location: mostrar_empleado/index_mostrar_empleado.php");
    }
?>