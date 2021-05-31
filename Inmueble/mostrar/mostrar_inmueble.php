<?php 
    include("../../BD/conexion.php");
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <script type="text/javascript" src="mov.js"></script>
    <title>Document</title>
    <style>
body{
    background: #f8f9fa; 
    line-height:20px;
}
.principal{
	margin-top:50px;
	font-family: 'Roboto';
}


/*tarjeta 1*/
.card-header-first{
	margin-top:-40px;
    height: 350px;
	background: linear-gradient(-90deg, #3931af, #00c6ff); 
	box-shadow:1px 5px 15px #a2a2a2;
}

/*tarjeta 2*/
.card-header-second{
	box-shadow:1px 7px 15px #a2a2a2;
    margin:-25px -25px 0px -25px;
    height: 120px;
	background: linear-gradient(-90deg, #8E2DE2, #4A00E0); 
}

/*tarjeta 3*/
.card-header-third{
    margin-top:-25px;
    height: 120px;
	box-shadow:1px 5px 15px #a2a2a2;
    background: linear-gradient(-90deg, #11998e, #38ef7d); 
}

.card-section-third span i{
	padding:17px;
	margin:0px 10px;
	color:#fff;
	height:50px;
	width:50px;
	box-shadow:1px 6px 24px #d2d2d2;
	background: linear-gradient(-90deg, #11998e, #38ef7d); 
}

.card-header-third span i:hover,.card-section-third span i:hover{
	box-shadow:1px 1px 15px #000;
}

/*efecto shadows para todas las tarjetas*/
.card-section{
	box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
}
/*Para el efecto sombra al pasar por encima el mouse*/
.card-section:hover{
	box-shadow:1px 1px 20px #d2d2d2;
}
.container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl {
    width: 100%;
    padding-right: .75rem;
    padding-left: .75rem;
    margin-right: 0;
    margin-left: 0;
}
.container{
    display:inline;
    width: 100%;
}
.pb-5, .py-5 {
    padding-bottom: 0rem!important;
}
.pt-3, .py-3 {
     padding-top: .5rem!important; 
}
.col-lg-3.col-md-12.mb-4 {
    padding-top: 200px;
}
.row.todo {
    width: 90%;
    margin:auto;
}
.mb-4, .my-4 {
    margin-bottom: 1.5rem!important;
    margin-top: 20px;
}
.table{
    margin-bottom: 0rem;

}
.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: .69rem;
}
.card-body.botones{
    padding: .89rem;
}
.card-body.acciones{
    padding: 1.89rem;
}
.card-section-third span i{
    background: linear-gradient(-90deg,  #3931af, #00c6ff);
}
.card-section-third.card-section.border.rounded.p-3 {
    height: 100%;
}
.card-body.text-left.tabla{
    
}
    </style>

</head>
<body>
<div class="container ">
		<div class="row">
			<div class="col-lg-12 text-center">
	            <div class="row todo">
                    <!--tarjeta 1-->
                    <?php
                while($row=pg_fetch_array($query)){
            ?>
	                <div class="col-lg-4 col-md-12 mb-4">
	                  	<div class="card-section-third card-section border rounded p-3">
	                  		<div class="card-header-first rounded pb-5">
		                      	<img class="card-header-title text-white pt-3" width=100%; height=100%; src="http://localhost/dashboard2021/image/<?= $row['foto'];?>"/>
                                  
	                  		</div>
	                    	<div class="card-body text-center">
	                      		<p class="card-text "><strong><?php echo $row['nombre'] ?></strong></p>
                                <hr>
                                <label><strong>Nombre Del Propietario</strong></label>
                                <p class="card-text"><?php echo $row['nombre_propietario'] ?></p>
                                <label><strong>Descripcion Del Inmueble</strong></label>
                                <p class="card-text"><?php echo $row['descripcion'] ?></p>
                                <label><strong>Precio del Arriendo</strong></label>
                                <p class="card-text">$ <?php echo $row['precio'] ?></p>
                            </div>
                            <div class="card-body text-left tabla">
                                <table class="table" >
                                    <thead class="table-success table-striped table-dark" >
                                        <tr>
                                                <th>Tipo De Inmueble</th>
                                                <th>ciudad</th>
                                                <th>Barrio</th>
                            
                                        </tr>
                                    <tbody>
                                        <th><?php echo $row['tipo_inmueble'] ?></th>
                                        <th><?php echo $row['ciudad'] ?></th>
                                        <th><?php echo $row['zona'] ?></th>
                                    </tbody>
                                </table>
                               
                            </div>
                            <div class="card-body text-center botones">
                                <span><a href="#"><i class="fab fa fa-bed rounded-circle" aria-hidden="true"></i></a></span>
                                <h>4</h>
		                      	<span><a href="#"><i class="fas fa fa-bath rounded-circle" aria-hidden="true"></i></a></span>
                                <h>2</h>
		                      	<span><a href="#"><i class="fas fa fa-car rounded-circle" aria-hidden="true"></i></a></span>
                                <h>1</h>
                            </div>
                            <div class="card-body text-center acciones">
                                <a href="../ver_completa.php?id=<?php echo $row['id_publicacion'] ?>" class="btn btn-info">Ver publicacion</a>
                                <a href="../actualizar.php?id=<?php echo $row['id_publicacion'] ?>" class="btn btn-danger">Editar</a>
                                <a href="../delete.php?id=<?php echo $row['id_publicacion'] ?>" class="btn btn-warning" >Eliminar</a>
                                
                            </div>
	                  	</div>
	                </div>
                    <?php 
                }
            ?> 
                    <!--tarjeta 2-->
	                
                    <!--tarjeta 3-->
	               
	            </div>
			</div>
          
		</div>
	</div>

</body>
</html>