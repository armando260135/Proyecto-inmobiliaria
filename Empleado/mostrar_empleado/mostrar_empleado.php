<?php 
    include("../../BD/conexion.php");
    $con=conectar();

    $sql="SELECT * FROM crudinmobiliaria.empleado";
    $query=pg_query($con,$sql);

    $row=pg_fetch_array($query);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
    <style>
    .fotoe{
    border-radius:50%;}
    @media (min-width: 992px){
        .col-lg-4 {
        flex: 0 0 25%;
        max-width: 33.33333%;
        margin: initial;
        }
    }
    .hola {
    width: 150px;
    height: 150px;
    align-self: center;
    }
    .principal{
    margin-right:5%;
    margin-left:5%; 
    font-size:50px;   

    }
    .card{
        margin-top:40px;
    }
    .card-body{
        font-size: x-large;
        margin-top:40px;
    }
    .row.mempleado{
        text-align-last: center;
    }
    
   
    </style>
</head>
<body>

    <div class="principal">
    
        <div class="row mempleado">
            <?php
                while($row=pg_fetch_array($query)){
            ?>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                    <br>
                        <div class="hola" >
                            <img class="card-img-top fotoe" width="150px" height="150px" src="http://localhost/dashboard2021/Empleado/image_empleado/<?= $row['foto_empleado'];?>" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <label style="color:#4e73df;">Codigo Del Empleado:</label>
                            <h5 class="card-title" style="color:black;"><strong><th><?php  echo $row['cod_empleado']?></strong></th></h5>
                            
                            <label style="color:#4e73df;">Nombre Del Empleado:</label>
                            <h5 class="card-title" style="color:black;" ><strong><th><?php  echo $row['nombre1_empleado']?> <?php  echo $row['nombre2_empleado']?></strong></th></h5>
                            <label style="color:#4e73df;">Rol Del Empleado:</label>
                            <br>
                            <p class="card-text" style="color:black;"><th></strong><?php  echo $row['rol_empleado']?></strong></th></p>
                            <label style="color:#4e73df;">Horario Laboral:</label>
                            <p class="card-text" style="color:black;"><th></strong><?php  echo $row['horario_inicio_empleado']?></strong></th></p>
                            <label style="color:#4e73df;">Hasta</label>
                            <p class="card-text" style="color:black;"><th></strong><?php  echo $row['horario_finalizacion_empleado']?></strong></th></p>
                            <br>
                           
                            <a href="actualizar.php?id=<?php echo $row['cod_empleado'] ?>" class="btn btn-info" data-toggle="modal" data-target="#exampleModalLong">Ver Perfil</a>
                            <a href="../actualizar_empleado.php?id=<?php echo $row['cod_empleado'] ?>" class="btn btn-danger">Editar</a>
                            <a href="../delete_empleado.php?id=<?php echo $row['cod_empleado'] ?>" class="btn btn-warning" >Eliminar</a>
                        </div>
                    </div>
                </div>
            <?php 
                }
            ?> 
        </div>
        
    </div>
  
    
</body>
</html>