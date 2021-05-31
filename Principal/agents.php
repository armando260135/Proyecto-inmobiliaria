<?php include'header.php';?>

<?php 
    include("../BD/conexion.php");
    $con=conectar();

    $sql="SELECT * FROM crudinmobiliaria.empleado";
    $query=pg_query($con,$sql);

    $row=pg_fetch_array($query);


    /* $query="SELECT id,email,clave FROM usuario WHERE email= '$email' AND clave='$password'";  equivale a sql
    $resultado=pg_query($conn,$query);  equivale a query */


?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="#">Home</a> /Empleados</span>
    <h2>Empleados</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer agents">

<div class="row">
  <div class="col-lg-8  col-lg-offset-2 col-sm-12">
      <!-- agents -->
      <?php
      while($row=pg_fetch_array($query)){
      ?>
        <div class="row">
          <div class="col-lg-2 col-sm-2 "><a href="#"><img src="http://localhost/dashboard2021/Empleado/image_empleado/<?= $row['foto_empleado'];?>" class="img-responsive"  alt="agent name"></a></div>
          <div class="col-lg-7 col-sm-7 "><h4><?php echo $row['nombre1_empleado']." ".$row['nombre2_empleado']." ".$row['apellido1_empleado']." ".$row['apellido2_empleado'] ?></h4>
          <p><?php echo $row['rol_empleado'] ?></p>
          <label>Horario de Atencion</label>
          <p style="margin-bottom:10px;"><?php echo $row['horario_inicio_empleado']." Hasta ".$row['horario_finalizacion_empleado'] ?></p>
          <label>Ciudad donde labora</label>
          <p><?php echo $row['ciudad_empleado']?></p>
          
          </div>
          <div class="col-lg-3 col-sm-3 "><span class="glyphicon glyphicon-envelope"></span> <a href="mailto:abc@realestate.com"><?php echo $row['correo_empleado'] ?></a><br>
          <span class="glyphicon glyphicon-earphone"></span><?php echo $row['telefono_empleado'] ?></div>
        </div>
      <?php 
      }
      ?> 
      <!-- agents -->
      
       <!-- agents -->
      
      <!-- agents -->
      
     
  </div>
</div>


</div>
</div>

<?php include'footer.php';?>