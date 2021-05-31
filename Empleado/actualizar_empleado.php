<?php 
    include("../BD/conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM crudinmobiliaria.empleado WHERE cod_empleado='$id'";
$query=pg_query($con,$sql);
$row=pg_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA INMOBILIARIA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="shortcut icon" href="#" />      
        <link rel="stylesheet" href="form_validation/bootstrap4/css/bootstrap.min.css">  
	    <link rel="stylesheet" href="form_validation/estilos.css">
        <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
        <style type="text/css">
        @media (min-width: 768px){
        .col-md-3{flex: 0 0 auto;width:100%;}
        .descrip{line-height:4.8}
        .col-md-8 {flex: 0 0 auto;width: 100%;padding-top: 20px;}
        .row{margin-left:10px;margin-right:10px;}
        .cestado{text-align: left; margin-left: -20px;}}
        .btn.btn-primary.toggle-on{background-color:green;}
        .btn.btn-default.active.toggle-off{background-color:gray;}
        
        
        </style>
    </head>
    <body>
        <div class="row"> 
            <div class="col-lg-12">
                <div class="card shadow-lg p-3 mb-5 bg-white ">
                    <div class="card-header">Formulario De Actualizacion De Empleados </div>
                        <div class="card-body">
                            <div class="card-header"> <i class="fa fa-exclamation-circle"></i>  Datos Personales A Actualizar (Campos Requeridos)</div>
                            <form id="form1" class="needs-validation" novalidate action="update_empleado.php" method="POST" enctype="multipart/form-data">
                                <div class="form-row"> 
                                <div class="col-md-4 mb-3 mt-3">
                                        <label >Documento De Identidad</label>
                                        <input name="tipo_documento_empleado" type="text" class="form-control"  placeholder="" value="<?php echo $row['tipo_documento_empleado']  ?>" readonly>
                                    </div>     
                                    <div class="col-md-4 mb-3 mt-3">
                                        <label >Documento De Identidad</label>
                                        <input name="documento_empleado" type="text" class="form-control"  placeholder="" value="<?php echo $row['documento_empleado']  ?>" >
                                    </div>      
                                    <div class="col-md-4 mb-3 mt-3">
                                        <label >Primer Nombre *</label>
                                        <input name="nombre1_empleado" type="text" class="form-control" placeholder="" value="<?php echo $row['nombre1_empleado']  ?>" >
                                    </div>    
                                    <div class="col-md-4 mb-3 mt-1">
                                        <label >Segundo Nombre</label>
                                        <input name="nombre2_empleado" type="text" class="form-control" placeholder="" value="<?php echo $row['nombre2_empleado']  ?>" >
                                    </div>  
                                    <div class="col-md-4 mb-3 mt-1">
                                        <label >Primer Apellido *</label>
                                        <input name="apellido1_empleado" type="text" class="form-control"  placeholder=""  value="<?php echo $row['apellido1_empleado']  ?>">
                                    </div>  
                                    <div class="col-md-4 mb-3 mt-1">
                                        <label >Segundo Apellido</label>
                                        <input name="apellido2_empleado" type="text" class="form-control" placeholder=""  value="<?php echo $row['apellido2_empleado']  ?>">
                                    </div>    
                                    <div class="col-md-4 mb-3 mt-1">
                                        <label >Pais Origen</label>
                                        <input name="pais_empleado" type="text" class="form-control" placeholder="" value="<?php echo $row['pais_empleado']  ?>">
                                    </div> 
                                    <div class="col-md-4 mb-3 mt-1">
                                        <label>Departamento Origen</label>
                                        <input name="departamento_empleado" type="text" class="form-control"  placeholder="" value="<?php echo $row['departamento_empleado']  ?>">
                                    </div> 
                                    <div class="col-md-4 mb-3 mt-1">
                                        <label >Ciudad Origen</label>
                                        <input name="ciudad_empleado" type="text" class="form-control"  placeholder="" value="<?php echo $row['ciudad_empleado']  ?>">
                                    </div>
                                    <div class="col-md-4 mb-3 mt-1">
                                        <label >Correo Electronico *</label>
                                        <input name="correo_empleado" type="text"    class="form-control"  placeholder="" value="<?php echo $row['correo_empleado']  ?>">
                                    </div>
                                    <div class="col-md-4 mb-3 mt-1">
                                        <label >Telefono *</label>
                                        <input name="telefono_empleado" type="tel" class="form-control" placeholder="" value="<?php echo $row['telefono_empleado']  ?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3 mt-1">
                                        <label>Foto Actual</label>
                                        <img height="250px" width="180px" src="http://localhost/dashboard2021/Empleado/image_empleado/<?= $row['foto_empleado'];?>"></th> 
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3 mt-1">
                                        <label>Foto Del Empleado</label>
                                        <input name="foto_empleado" type="file" class="form-control" placeholder="" value="<?php echo $row['foto_empleado']  ?>">
                                    </div>    
                                </div>
                                <div class="mb-4"></div>
                                <div class="card-header"> <i class="fa fa-exclamation-circle"></i>  Datos Laborales A Actualizar </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3 mt-3">
                                        <label >Codigo De Empleado *</label>
                                        <input name="cod_empleado" type="text" class="form-control"  placeholder="Codigo del empleado" value="<?php echo $row['cod_empleado']  ?>" readonly >
                                        <div class="valid-feedback">¡Ok válido!</div>
                                        <div class="invalid-feedback">Complete el campo.</div>   
                                    </div>
                                    <div class="col-md-4 mb-3 mt-3">
                                        <label >Rol En La Empresa *</label>
                                        <select type="text" class="form-control mb-4" name="rol_empleado" placeholder="Puesto De Trabajo" value="<?php echo $row['rol_empleado']  ?>">
                                            <option>Gerente Administrativo</option> 
                                            <option>Gerente Inmobiliario</option> 
                                            <option>Gerente De Finanzas</option>
                                            <option>Director</option>
                                            <option>Abogado</option>
                                            <option>Secreataria</option> 
                                            <option>Aseadora</option>                                
                                        </select>
                                    </div>   
                                    <div class="col-md-4 mb-3 mt-3">
                                        <label >Fecha De Inicio</label>
                                        <input name="fecha_inicio_empleado" type="date" value="2021-05-20" min="2015-01-01" max="2040-12-31" class="form-control" id="fecha_inicio_empleado" placeholder="" required value="<?php echo $row['fecha_inicio_empleado']  ?>">
                                    </div>
                                    <div class="col-md-4 mb-3 mt-1">     
                                        <label >Jornada Laboral</label>
                                        <select type="text" class="form-control mb-4" name="jornada_empleado" placeholder="" value="<?php echo $row['jornada_empleado']  ?>">
                                            <option>Diurna</option> 
                                            <option>Nocturna</option>
                                            <option>Mixta</option>                                 
                                        </select>  
                                    </div>
                                    <div class="col-md-4 mb-3 mt-1"> 
                                        <label >Inicia Jornada Laboral</label>
                                        <input name="horario_inicio_empleado" type="time" class="form-control col-md-4"  placeholder="" value="<?php echo $row['horario_inicio_empleado']  ?>" >
                                    </div>
                                    <div class="col-md-4 mb-3 mt-1"> 
                                        <label >Finalizacion Jornada Laboral</label>
                                        <input name="horario_finalizacion_empleado" type="time" class="form-control col-md-4"  placeholder=""  value="<?php echo $row['horario_finalizacion_empleado']  ?>">
                                    </div>    
                                        <!--
                                        <div class="col-md-4 mb-3">
                                            <label for="usuario">Nombre de usuario</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                </div>
                                                <input name="usuario" type="text" class="form-control" id="usuario" placeholder="" aria-describedby="inputGroupPrepend" required>
                                                <div class="valid-feedback">¡Ok válido!</div>
                                                <div class="invalid-feedback">Complete el campo.</div>   
                                            </div>
                                        </div>-->
                                    <div class="col-md-4 mb-3 mt-1">
                                        <label >Estado Del Empleado *</label>
                                        <select type="text" class="form-control estadobut" name="estado_empleado" placeholder="" value="<?php echo $row['estado_empleado']  ?>">
                                            <option value="Activo">Activo</option> 
                                            <option value="No Activo">No Activo</option>                                
                                            <div class="valid-feedback">¡Ok válido!</div>
                                            <div class="invalid-feedback">Complete el campo.</div>
                                        </select>
                                    </div> 
                                </div> 
                                <input type="submit" class="btn btn-primary">
                            </form><!-- ORDENADO HASTA ACA -->
                        </div>
                </div>
            </div>      
        </div> 
        <script src="form_validation/jquery/jquery-3.3.1.min.js"></script>	 	
        <script src="form_validation/popper/popper.min.js"></script>	 	 	
        <script src="form_validation/bootstrap4/js/bootstrap.min.js"></script>   	
        <script src="form_validation/codigo.js"></script>
        <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    </body>
</html>

