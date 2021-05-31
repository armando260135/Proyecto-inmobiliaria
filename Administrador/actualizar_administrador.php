<?php 
    include("../BD/conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM crudinmobiliaria.administrador WHERE cod_admin='$id'";
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
    <div class="container register">
            <div class="row">
            
                <div class="col-md-3 register-left">
                    <img class="logo" src="image_administrador/logo1sin.png" alt=""/>
                    <h3>Actualizacion De Administrador</h3>
                    <p>Ahora le arreglaras los datos al admin,hazlo bien ahora..</p>
                </div>
                <div class="col-md-9 register-right">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Datos del Administrador</h3>
                            <form action="update_administrador.php" method="POST" enctype="multipart/form-data">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Codigo del administrador</label>
                                            <input type="text" name="cod_admin" class="form-control" placeholder="codigo del administrador *" value="<?php echo $row['cod_admin']  ?>" readonly/>
                                        </div>
                                        <div class="form-group">
                                            <label >Codigo De Empleado</label>
                                            <input type="text" name="cod_empleado"  class="form-control" value="<?php echo $row['cod_empleado']  ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Sexo</label>
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="sexo_administrador" value="male" value="<?php echo $row['sexo_administrador']  ?>" checked>
                                                    <span> Hombre </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="sexo_administrador" value="female" value="<?php echo $row['sexo_administrador']  ?>">
                                                    <span> Mujer </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="sexo_administrador" value="female" value="<?php echo $row['sexo_administrador']  ?>">
                                                    <span> Prefiero No Decir  </span> 
                                                </label>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label>Nombre de usuario</label>
                                                <input type="text" name="nickname_admin" class="form-control" placeholder="Nickname *"  value="<?php echo $row['nickname_admin']  ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Contraseña</label>
                                                <input type="password" name="contraseña_admin" class="form-control" placeholder="Password *"  value="<?php echo $row['contraseña_admin']  ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Repita La Contraseña</label>
                                                <input type="password" class="form-control"  placeholder="Confirm Password *" value="<?php echo $row['contraseña_admin']  ?>"/>
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-primary">
                                    </div>

                                </div>
                                
                            </form>
                        </div>
                        
                    </div>
                </div>
                   
            </div>
    
        </div>
        
    </body>
</html>