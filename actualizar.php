<?php 
    include("BD/conexion.php");
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
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id_publicacion" value="<?php echo $row['id_publicacion']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="descripcion" placeholder="Descripcion" value="<?php echo $row['descripcion']  ?>">
                                <input type="text" class="form-control mb-3" name="nombre_propietario" placeholder="Nombre del propietario" value="<?php echo $row['nombre_propietario']  ?>">
                                <select type="text" class="form-control mb-3" name="tipo_inmueble" placeholder="Tipo de inmueble" value="<?php echo $row['tipo_inmueble']  ?>">
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
                                <select type="text" class="form-control mb-3" name="zona" placeholder="zona" value="<?php echo $row['zona']  ?>">
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
                                    <input type="text" class="form-control mb-3" name="direccion" placeholder="direccion" value="<?php echo $row['direccion']  ?>">
                                    <input type="text" class="form-control mb-3" name="precio" placeholder="Precio" value="<?php echo $row['precio']  ?>"> 
                                    <input type="text" class="form-control mb-3" name="foto" placeholder="foto" value="<?php echo $row['foto']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>