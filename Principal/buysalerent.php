<?php include'header.php';?>

<?php 
    include("../BD/conexion.php");
    $con=conectar();

    $sql="SELECT * FROM crudinmobiliaria.publicacion";
    $query=pg_query($con,$sql);

    $row=pg_fetch_array($query);


    /* $query="SELECT id,email,clave FROM usuario WHERE email= '$email' AND clave='$password'";  equivale a sql
    $resultado=pg_query($conn,$query);  equivale a query */


?>


<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="index.php">Home</a> / Comprar,Vender y Arrendas</span>
    <h2>Comprar,Vender y Arrendas</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-lg-3 col-sm-4 ">

  <div class="search-form"><h4><span class="glyphicon glyphicon-search"></span> Buscar Por</h4>
    <input type="text" class="form-control" placeholder="Buscar Propiedad">
    <div class="row">
            <div class="col-lg-5">
              <select class="form-control">
                <option>Comprar</option>
                <option>Arrendar</option>
                <option>Vender</option>
              </select>
            </div>
            <div class="col-lg-7">
              <select class="form-control">
                <option>Precio</option>
                <option>$150,000 - $200,000</option>
                <option>$200,000 - $250,000</option>
                <option>$250,000 - $300,000</option>
                <option>$300,000 - above</option>
              </select>
            </div>
          </div>

          <div class="row">
          <div class="col-lg-12">
              <select class="form-control">
                <option>Tipo de Inmueble</option>
                <option>Apartment</option>
                <option>Building</option>
                <option>Office Space</option>
              </select>
              </div>
          </div>
          <button class="btn btn-primary">Buscar </button>

  </div>



<div class="hot-properties hidden-xs">
<h4>Agregadas Recientmente</h4>
<div class="row">
                <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg" class="img-responsive img-circle" alt="properties"></div>
                <div class="col-lg-8 col-sm-7">
                  <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                  <p class="price">$300,000</p> </div>
              </div>
<div class="row">
                <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg" class="img-responsive img-circle" alt="properties"></div>
                <div class="col-lg-8 col-sm-7">
                  <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                  <p class="price">$300,000</p> </div>
              </div>

<div class="row">
                <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg" class="img-responsive img-circle" alt="properties"></div>
                <div class="col-lg-8 col-sm-7">
                  <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                  <p class="price">$300,000</p> </div>
              </div>

<div class="row">
                <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg" class="img-responsive img-circle" alt="properties"></div>
                <div class="col-lg-8 col-sm-7">
                  <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                  <p class="price">$300,000</p> </div>
              </div>

</div>


</div>

<div class="col-lg-9 col-sm-8">
<div class="sortby clearfix">
<div class="pull-left result">Mostrando: 12 de 100 </div>
  <div class="pull-right">
  <select class="form-control">
  <option>Ordenar Por</option>
  <option>Precio: Bajo a Alto</option>
  <option>Precio: Alto a Bajo</option>
</select></div>

</div>
<div class="row">
    <?php 
    while($row=pg_fetch_array($query)){
    ?>
     <!-- properties -->
      <div class="col-lg-4 col-sm-6">
      <div class="properties">
        <div class="image-holder"><img src="http://localhost/dashboard2021/image/<?= $row['foto'];?>" class="img-responsive" alt="properties">
          <div class="status sold">Arrendar</div>
        </div>
        <h4><a href="property-detail.php"><?php echo $row['nombre'] ?></a></h4>
        <p class="price">Price: $<?php echo $row['precio'] ?></p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">Ver Detalles</a>
      </div>
      </div>
    
    <?php 
    }
    ?> 
      <!-- properties -->
  
      <!-- properties -->
      

</div>
</div>
</div>
</div>
<div class="paginacion" style="margin-bottom:0px; text-align-last:center;">
      <ul class="pagination">
          <li><a href="#">«</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">»</a></li>
        </ul>
      </div>
</div>

<?php include'footer.php';?>