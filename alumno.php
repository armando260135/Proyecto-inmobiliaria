<?php 
    include("BD/conexion.php");
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
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <style type="text/css">
        @media (min-width: 768px){
        .col-md-3{flex: 0 0 auto;width:100%;}
        .descrip{line-height:4.8}
        .col-md-8 {flex: 0 0 auto;width: 100%;padding-top: 20px;}}
        </style>
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese los datos del inmueble</h1>
                                <form action="insertar.php" method="POST" enctype="multipart/form-data">

                                    <input type="text" class="form-control mb-3" name="id_publicacion" placeholder="id">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3 descrip" name="descripcion" placeholder="descripcion">
                                    <input type="text" class="form-control mb-3" name="nombre_propietario" placeholder="nombre propietario"> 
                                    <select type="text" class="form-control mb-3" name="tipo_inmueble" placeholder="Tipo de inmueble">
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
                                   <!-- <input type="text" class="form-control mb-3" name="tipo_inmueble" placeholder="Tipo de inmueble">   -->     
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
                                    
                                    
                                <!--    <input type="text" class="form-control mb-3" name="ciudad" placeholder="ciudad"> -->
                                <select type="text" class="form-control mb-3" name="zona" placeholder="zona">
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
                                    
                                    
                                    
                                    
                                  <!--  <input type="text" class="form-control mb-3" name="zona" placeholder="zona">  -->
                                    <input type="text" class="form-control mb-3" name="direccion" placeholder="direccion">
                                    <input type="text" class="form-control mb-3" name="precio" placeholder="Precio"> 
                                    <input type="file" class="form-control mb-3" name="foto" placeholder="foto">

                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped table-dark" >
                                    <tr>
                                        <th>id</th>
                                        <th>nombre</th>
                                        <th>descripcion</th>
                                        <th>Nombre Propietario</th>
                                        <th>Tipo de inmueble</th>
                                        <th>ciudad</th>
                                        <th>zona</th>
                                        <th>direccion</th>
                                        <th>precio</th>
                                        <th>foto</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                               

                                <tbody>
                                        <?php
                                            while($row=pg_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_publicacion']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['descripcion']?></th>
                                                <th><?php  echo $row['nombre_propietario']?></th>
                                                <th><?php  echo $row['tipo_inmueble']?></th>
                                                <th><?php  echo $row['ciudad']?></th> 
                                                <th><?php  echo $row['zona']?></th> 
                                                <th><?php  echo $row['direccion']?></th>
                                                <th><?php  echo $row['precio']?></th>
                                                <th><img src="data:image/jpg;,<?php echo pg_unescape_bytea(base64_encode($row['foto']));?>"/></th>
                                                <th><a href="actualizar.php?id=<?php echo $row['id_publicacion'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id_publicacion'] ?>" class="btn btn-danger">Eliminar</a></th>                                         
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>



