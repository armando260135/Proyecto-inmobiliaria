<?php 
    include("../BD/conexion.php");
    $con=conectar();

    $sql="SELECT * FROM crudinmobiliaria.administrador";
    $query=pg_query($con,$sql);

    $row=pg_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
    @media (min-width: 1200px){
    .container {
    height:93%;
    max-width: 95%;
    margin-top: 27px;
    margin-left: 20px;
    margin-right: -15px;
  
    }
    }
    
    .logo{width:672px; height:200px;}
    .register-left img{width:100%}
    .register-heading{margin-top:2%;}

    @media (min-width: 768px){
    .register-right{margin-top:30px;}}
    
    </style>
</head>
<body>
   <!-- <div class="container mt-5"> -->
        <div class="container register">
            <div class="row">
            
                <div class="col-md-3 register-left">
                    <img class="logo" src="image_administrador/logo1sin.png" alt=""/>
                    <h3>Registro De Administrador</h3>
                    <p>Ahora le daras el poder a alguien.</p>
                </div>
                <div class="col-md-9 register-right">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Datos del Administrador</h3>
                            <form action="insertar_administrador.php" method="POST" enctype="multipart/form-data">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Codigo del administrador</label>
                                            <input type="text" name="cod_admin" class="form-control" placeholder="codigo del administrador *" value="" >
                                        </div>
                                        <div class="form-group">
                                            <label >Codigo De Empleado</label>
                                            <select type="text" class="form-control mb-4" name="cod_empleado" placeholder="">
                                                <?php
                                                $sql="SELECT * FROM crudinmobiliaria.empleado ORDER BY cod_empleado ASC ";
                                                $query=pg_query($con,$sql);
                                                ?>
    
                                                <option>Seleccione un codigo de empleado</option>
                                                <?php
                                                while($row=pg_fetch_array($query)){
                                                ?>
                                                    <option><?php echo $row['cod_empleado'];?></option> 
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Sexo</label>
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="sexo_administrador" value="Hombre" checked>
                                                    <span> Hombre </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="sexo_administrador" value="Mujer">
                                                    <span> Mujer </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="sexo_administrador" value="Ni">
                                                    <span> Prefiero No Decir  </span> 
                                                </label>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label>Nombre de usuario</label>
                                                <input type="text" name="nickname_admin" class="form-control" placeholder="Nickname *" value="" >
                                            </div>
                                            <div class="form-group">
                                                <label>Contraseña</label>
                                                <input type="password" name="contraseña_admin" class="form-control" placeholder="Password *" value="" >
                                            </div>
                                            <div class="form-group">
                                                <label>Repita La Contraseña</label>
                                                <input type="password" class="form-control"  placeholder="Confirm Password *" value="" >
                                            </div>
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Register"/>
                                    </div>

                                </div>
                                
                            </form>
                        </div>
                        
                    </div>
                </div>
                   
            </div>
       
        </div>
   <!-- </div> -->
</body>
</html>