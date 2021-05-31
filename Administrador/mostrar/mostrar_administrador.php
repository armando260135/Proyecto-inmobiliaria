<?php 
    include("../../BD/conexion.php");
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
    <link href="style.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Document</title>
    <style>
        body{
            
            background:#f3f3f3;
        }

        .card.user-card {
            border-top: none;
            -webkit-box-shadow: 0 0 1px 2px rgba(0,0,0,0.05), 0 -2px 1px -2px rgba(0,0,0,0.04), 0 0 0 -1px rgba(0,0,0,0.05);
            box-shadow: 0 0 1px 2px rgba(0,0,0,0.05), 0 -2px 1px -2px rgba(0,0,0,0.04), 0 0 0 -1px rgba(0,0,0,0.05);
            -webkit-transition: all 150ms linear;
            transition: all 150ms linear;
        }

        .card {
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
            box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
            border: none;
            margin-bottom: 30px;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .card .card-header {
            background-color: transparent;
            border-bottom: none;
            padding: 25px;
        }

        .card .card-header h5 {
        margin-bottom: 0;
            color: #222;
                font-size: 14px;
            font-weight: 600;
            display: inline-block;
            margin-right: 10px;
            line-height: 1.4;
        }

        .card .card-header+.card-block, .card .card-header+.card-block-big {
            padding-top: 0;
        }

        .user-card .card-block {
            text-align: center;
        }

        .card .card-block {
            padding: 25px;
        }

        .user-card .card-block .user-image {
            position: relative;
            margin: 0 auto;
            display: inline-block;
            padding: 5px;
            width: 110px;
            height: 110px;
        }

        .user-card .card-block .user-image img {
            z-index: 20;
            position: absolute;
            top: 5px;
            left: 5px;
                width: 100px;
            height: 100px;
        }

        .img-radius {
            border-radius: 50%;
        }

        .f-w-600 {
            font-weight: 600;
        }

        .m-b-10 {
            margin-bottom: 10px;
        }

        .m-t-25 {
            margin-top: 25px;
        }

        .m-t-15 {
            margin-top: 15px;
        }

        .card .card-block p {
            line-height: 1.4;
        }

        .text-muted {
            color: #919aa3!important;
        }

        .user-card .card-block .activity-leval li.active {
            background-color: #2ed8b6;
        }

        .user-card .card-block .activity-leval li {
            display: inline-block;
            width: 15%;
            height: 4px;
            margin: 0 3px;
            background-color: #ccc;
        }

        .user-card .card-block .counter-block {
            color: #fff;
        }

        .bg-c-blue {
            background: linear-gradient(45deg,#4099ff,#73b4ff);
        }

        .bg-c-green {
            background: linear-gradient(45deg,#2ed8b6,#59e0c5);
        }

        .bg-c-yellow {
            background: linear-gradient(45deg,#FFB64D,#ffcb80);
        }

        .bg-c-pink {
            background: linear-gradient(45deg,#FF5370,#ff869a);
        }

        .m-t-10 {
            margin-top: 10px;
        }

        .p-20 {
            padding: 20px;
        }

        .user-card .card-block .user-social-link i {
            font-size: 30px;
        }

        .text-facebook {
            color: #3B5997;
        }

        .text-twitter {
            color: #42C0FB;
        }

        .text-dribbble {
            color: #EC4A89;
        }

        .user-card .card-block .user-image:before {
            bottom: 0;
            border-bottom-left-radius: 50px;
            border-bottom-right-radius: 50px;
        }

        .user-card .card-block .user-image:after, .user-card .card-block .user-image:before {
            content: "";
            width: 100%;
            height: 48%;
            border: 2px solid #4099ff;
            position: absolute;
            left: 0;
            z-index: 10;
        }

        .user-card .card-block .user-image:after {
            top: 0;
            border-top-left-radius: 50px;
            border-top-right-radius: 50px;
        }

        .user-card .card-block .user-image:after, .user-card .card-block .user-image:before {
            content: "";
            width: 100%;
            height: 48%;
            border: 2px solid #4099ff;
            position: absolute;
            left: 0;
            z-index: 10;
        }
        .row{
            text-align:center;
            place-content: center
        }
            
    
    </style>

</head>

<body>

<div class="container">
    <div class="row">

        <?php
        $contador=1;
        $contador_vistas=2577;
        $contador_comentarios=87;
        $contador_porcentaje=70;
            while($row=pg_fetch_array($query)){
                
       ?>
            <div class="col-md-4">
                <div class="card user-card">
                     <div class="card-header">
                        <h5>Administrador <?php echo $contador?></h5>
                    </div>
                    <div class="card-block">
                        <div class="user-image">
                            <img src="https://fiverr-res.cloudinary.com/images/q_auto,f_auto/gigs/125568526/original/cd9c93141521436a112722e8c5c0c7ba0d60a4a2/be-your-telegram-group-admin.jpg" class="img-radius" alt="User-Profile-Image">
                        </div>
                        <h6 class="f-w-600 m-t-25 m-b-10"><strong>Codigo Del Administrador</strong></h6>
                        <p class="text-muted"><?php  echo $row['cod_admin']?></p>
                        <h6 class="f-w-600 m-t-25 m-b-10"><strong>Codigo Del Empleado</strong></h6>
                        <p class="text-muted"><?php  echo $row['cod_empleado']?></p>
                        <h6 class="f-w-600 m-t-25 m-b-10"><strong>Nombre de usuario</strong></h6>
                        <p class="text-muted">@<?php  echo $row['nickname_admin']?></p>
                        <hr>
                        <p class="text-muted m-t-15">Activity Level: <?php echo $contador_porcentaje?> %</p>
                        <ul class="list-unstyled activity-leval">
                            <li class="active"></li>
                            <li class="active"></li>
                            <li class="active"></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <div class="bg-c-blue counter-block m-t-10 p-20">
                            <div class="row">
                                <div class="col-4">
                                    <i class="fa fa-comment"></i>
                                    <p><?php echo $contador_vistas?></p>
                                </div>
                                <div class="col-4">
                                    <i class="fa fa-user"></i>
                                    <p>8562</p>
                                </div>
                                <div class="col-4">
                                    <i class="fa fa-suitcase"></i>
                                    <p><?php echo $contador_comentarios?></p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row justify-content-center user-social-link">
                            <div class="col-auto"><a href="#!"><i class="fa fa-facebook text-facebook"></i></a></div>
                            <div class="col-auto"><a href="#!"><i class="fa fa-twitter text-twitter"></i></a></div>
                            <div class="col-auto"><a href="#!"><i class="fa fa-dribbble text-dribbble"></i></a></div>
                        </div>
                        <hr>
                        <div class="row justify-content-center ">
                            <a href="actualizar.php?id=<?php echo $row['cod_admin'] ?>" class="btn btn-info" data-toggle="modal" data-target="#exampleModalLong">Ver Perfil</a>
                            <a href="../actualizar_administrador.php?id=<?php echo $row['cod_admin'] ?>" class="btn btn-danger">Editar</a>
                            <a href="../delete_administrador.php?id=<?php echo $row['cod_admin'] ?>" class="btn btn-warning" >Eliminar</a>
                        
                        </div>
                    </div>
                </div>
            </div>

        <?php 
        $contador=$contador+1;
        $contador_vistas=$contador_vistas+41;
        $contador_comentarios=$contador_comentarios+5;
        $contador_porcentaje=$contador_porcentaje+5;
            }
        ?>         


	</div>
</div>
</body>
</html>