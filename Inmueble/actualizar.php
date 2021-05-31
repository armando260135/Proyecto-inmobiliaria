<?php 
    include("../BD/conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM crudinmobiliaria.publicacion WHERE id_publicacion='$id'";
$query=pg_query($con,$sql);
$row=pg_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="shortcut icon" href="#" />      
        <link rel="stylesheet" href="../form_validation/bootstrap4/css/bootstrap.min.css">  
	    <link rel="stylesheet" href="../form_validation/estilos.css">
        <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

    </head>
    <body>
    <div class="row"> 
            
            <div class="col-lg-12">
                <div class="card shadow-lg p-3 mb-5 bg-white ">
                    <div class="card-header" style="text-align:center;">Formulario De Registro Del inmueble </div>
                        <div class="card-body">
                            <div class="card-header"> <i class="fa fa-exclamation-circle"></i> Datos</div>
                            <form id="form1" class="needs-validation" novalidate action="update.php" method="POST" enctype="multipart/form-data">
                                <div class="form-row"> 
                                    <div class="col-md-4 mb-3 mt-3">
                                        <label>codigo del inmueble</label>
                                        <input type="text" name="id_publicacion" class="form-control" placeholder="codigo del Inmueble" value="<?php echo $row['id_publicacion'] ?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3 mt-3">
                                        <label>Nombre de la publicacion</label>
                                        <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']  ?>">
                                    </div>
                                    <div class="col-md-4 mb-3 mt-3">
                                        <label>Descripcion De La Publicacion</label>
                                        <input type="text" class="form-control " name="descripcion" placeholder="descripcion" value="<?php echo $row['descripcion']  ?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3 mt-3">
                                        <label>Nombre del Propietario</label>
                                        <input type="text" class="form-control" name="nombre_propietario" placeholder="nombre propietario" value="<?php echo $row['nombre_propietario']  ?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3 mt-3">
                                        <label>Tipo De Inmueble</label>
                                        <select type="text" class="form-control" name="tipo_inmueble" placeholder="Tipo de inmueble" value="<?php echo $row['tipo_inmueble']  ?>">
                                            <option selected value="0" > Elige un tipo de inmueble </option>
                                            <option>Apartaestudio</option> 
                                            <option>Apartamento</option> 
                                            <option>Camprestre</option>                                  
                                            <option>Casa</option> 
                                            <option>Duplex</option> 
                                            <option>Finca</option> 
                                            <option>Local</option> 
                                            <option>Lote</option> 
                                            <option>Lote Comercial</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3 mt-3">
                                        <label>Ciudad Del Inmueble</label>
                                        <select type="text" class="form-control mb-3" name="ciudad" placeholder="Ciudad" value="<?php echo $row['ciudad']  ?>">
                                            <option selected value="0"> Elige una Ciudad </option>
                                            <option>Ocaña</option> 
                                            <option>Bogota</option> 
                                            <option>Medellin</option>                                  
                                            <option>Cali</option> 
                                            <option>Pasto</option> 
                                            <option>Cucuta</option> 
                                            <option>Ibague</option> 
                                            <option>Pamplona</option> 
                                            <option>Cartagena</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3 mt-3">
                                        <label>Zona Del inmueble</label>
                                        <select type="text" class="form-control" name="zona" placeholder="zona" value="<?php echo $row['zona']  ?>">
                                            <option selected value="0"> Elige una Zona </option>
                                            <option>Juan xxlll</option> 
                                            <option>cristo rey</option> 
                                            <option>centro</option>                                  
                                            <option>santa clara</option> 
                                            <option>marabel</option> 
                                            <option>circunvalar</option> 
                                            <option>simon bolivar</option> 
                                            <option>aguas claras</option> 
                                            <option>landia</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3 mt-3">
                                        <label>Direccion Del inmueble</label>
                                        <input type="text" class="form-control " name="direccion" placeholder="direccion" value="<?php echo $row['direccion']  ?>">
                                    </div>
                                    <div class="col-md-4 mb-3 mt-3">
                                        <label>Precio del Inmueble</label>
                                        <input type="text" class="form-control" name="precio" placeholder="Precio" value="<?php echo $row['precio']  ?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3 mt-3">
                                        <label>Foto Actual</label>
                                        <img height="80%" width="50%" src="http://localhost/dashboard2021/image/<?= $row['foto'];?>"></th>
                                        
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3 mt-3">
                                        <label>Agrege La Foto Principal Del Inmueble</label>
                                        <input type="file" class="form-control mb-3" name="foto" placeholder="foto" value="<?php echo $row['foto']  ?>">
                                    </div>
                                    <div class="col-md-4 mb-3 mt-3">
                                        <label>Agrege La Segunda Foto Del Inmueble</label>
                                         
                                        <input type="file" class="form-control mb-3" name="" placeholder="foto" >
                                    </div>
                                    <div class="col-md-4 mb-3 mt-3">
                                        <label>Agrege La Tercera Foto Del Inmueble</label>
                                        <input type="file" class="form-control mb-3" name="" placeholder="foto" >
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label><strong>Seleccione La ubicacion Del Inmueble</strong></label>
                                    <br>
                                        <div class="container" style="max-width: none;">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d7889.40621095499!2d-70.23299216136742!3d8.624475075086659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d8.626995899999999!2d-70.2301559!5e0!3m2!1ses-419!2sve!4v1456756695234" style="border:0" allowfullscreen="" frameborder="0" height="250" width="100%"></iframe>       
                                </div>
                                </div>
                                <br>
                                <br>
                                <input style="font-size:16px; " type="submit" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <script src="../form_validation/jquery/jquery-3.3.1.min.js"></script>	 	
        <script src="../form_validation/popper/popper.min.js"></script>	 	 	
        <script src="../form_validation/bootstrap4/js/bootstrap.min.js"></script>   	
        <script src="../form_validation/codigo.js"></script>
        <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    </body>
</html>