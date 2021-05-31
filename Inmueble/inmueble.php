<?php 
    include("../BD/conexion.php");
    $con=conectar();

    $sql="SELECT * FROM crudinmobiliaria.publicacion";
    $query=pg_query($con,$sql);

    $row=pg_fetch_array($query);


    /* $query="SELECT id,email,clave FROM usuario WHERE email= '$email' AND clave='$password'";  equivale a sql
    $resultado=pg_query($conn,$query);  equivale a query */


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA INMOBILIARIA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="shortcut icon" href="#" />      
        <link rel="stylesheet" href="../form_validation/bootstrap4/css/bootstrap.min.css">  
	    <link rel="stylesheet" href="../form_validation/estilos.css">
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
        .form-control.estadobut{width: 35%;}
        .toggle.ios, .toggle-on.ios, .toggle-off.ios { border-radius: 20px; }
        .toggle.ios .toggle-handle { border-radius: 20px; }

        
        
        </style>
    </head>
    <body>

        <div class="row"> 
            
            <div class="col-lg-12">
                <div class="card shadow-lg p-3 mb-5 bg-white ">
                    <div class="card-header" style="text-align:center;">Formulario De Registro Del inmueble </div>
                        <div class="card-body">
                            <div class="card-header"> <i class="fa fa-exclamation-circle"></i> Datos</div>
                            <form id="form1" class="needs-validation" novalidate action="insertar.php" method="POST" enctype="multipart/form-data">
                                <div class="form-row"> 
                                    <div class="col-md-4 mb-3 mt-3">
                                        <label>codigo del inmueble</label>
                                        <input type="text" name="cod_inmueble" class="form-control" placeholder="codigo del Inmueble" value="" >
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3 mt-3">
                                        <label>Nombre de la publicacion</label>
                                        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                                    </div>
                                    <div class="col-md-4 mb-3 mt-3">
                                        <label>Descripcion De La Publicacion</label>
                                        <input type="text" class="form-control " name="descripcion" placeholder="descripcion">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3 mt-3">
                                        <label>Nombre del Propietario</label>
                                        <input type="text" class="form-control" name="nombre_propietario" placeholder="nombre propietario">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3 mt-3">
                                        <label>Tipo De Inmueble</label>
                                        <select type="text" class="form-control" name="tipo_inmueble" placeholder="Tipo de inmueble">
                                            <option selected value="0"> Elige un tipo de inmueble </option>
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
                                        <select type="text" class="form-control mb-3" name="ciudad" placeholder="Ciudad">
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
                                        <select type="text" class="form-control" name="zona" placeholder="zona">
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
                                        <input type="text" class="form-control " name="direccion" placeholder="direccion">
                                    </div>
                                    <div class="col-md-4 mb-3 mt-3">
                                        <label>Precio del Inmueble</label>
                                        <input type="text" class="form-control" name="precio" placeholder="Precio">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3 mt-3">
                                        <label>Agrege La Foto Principal Del Inmueble</label>
                                        <input type="file" class="form-control mb-3" name="foto" placeholder="foto">
                                    </div>
                                    <div class="col-md-4 mb-3 mt-3">
                                        <label>Agrege La Segunda Foto Del Inmueble</label>
                                        <input type="file" class="form-control mb-3" name="" placeholder="foto">
                                    </div>
                                    <div class="col-md-4 mb-3 mt-3">
                                        <label>Agrege La Tercera Foto Del Inmueble</label>
                                        <input type="file" class="form-control mb-3" name="" placeholder="foto">
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
        	 	
        <script src="../form_validation/popper/popper.min.js"></script>	 	 	
        <script src="../form_validation/bootstrap4/js/bootstrap.min.js"></script>   	
        <script src="../form_validation/codigo.js"></script>
        <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
</body>

    
</html>



