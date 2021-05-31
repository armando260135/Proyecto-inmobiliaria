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
<div class="">
  <div id="slider" class="sl-slider-wrapper">
    <div class="sl-slider">
    
      <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
        <div class="sl-slide-inner">
          <div class="bg-img bg-img-1"></div>
          <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
          <blockquote>              
            <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Syndey, Australia</p>
            <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
            <cite>$ 20,000,000</cite>
          </blockquote>
        </div>
      </div>
          
      <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
          <div class="sl-slide-inner">
            <div class="bg-img bg-img-2"></div>
            <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
            <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Syndey, Australia</p>
              <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
              <cite>$ 20,000,000</cite>
            </blockquote>
          </div>
      </div>
          
      <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
        <div class="sl-slide-inner">
          <div class="bg-img bg-img-3"></div>
            <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
            <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Syndey, Australia</p>
              <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
              <cite>$ 20,000,000</cite>
            </blockquote>
          </div>
        </div>
          
        <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
          <div class="sl-slide-inner">
            <div class="bg-img bg-img-4"></div>
            <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
            <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Syndey, Australia</p>
              <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
              <cite>$ 20,000,000</cite>
            </blockquote>
          </div>
        </div>
          
        <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
          <div class="sl-slide-inner">
            <div class="bg-img bg-img-5"></div>
            <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
            <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Syndey, Australia</p>
              <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
              <cite>$ 20,000,000</cite>
            </blockquote>
          </div>
        </div>
      </div><!-- /sl-slider -->

      <nav id="nav-dots" class="nav-dots">
        <span class="nav-dot-current"></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </nav>

    </div><!-- /slider-wrapper -->
</div>
<div class="banner-search">
  <div class="container"> 
    <!-- banner -->
    <h3>Comprar, Vender y Arrendar</h3>
    <div class="searchbar">
      <div class="row">
        <div class="col-lg-6 col-sm-6">
          <input type="text" class="form-control" placeholder="Search of Properties">
          <div class="row">
            <div class="col-lg-3 col-sm-3 ">
              <select class="form-control">
                <option>Comprar</option>
                <option>Arrendar</option>
                <option>Vender</option>
              </select>
            </div>
            <div class="col-lg-3 col-sm-4">
              <select class="form-control">
                <option>Precio</option>
                <option>$150,000 - $200,000</option>
                <option>$200,000 - $250,000</option>
                <option>$250,000 - $300,000</option>
                <option>$300,000 - above</option>
              </select>
            </div>
            <div class="col-lg-3 col-sm-4">
            <select class="form-control">
                <option>Property</option>
                <option>Apartment</option>
                <option>Building</option>
                <option>Office Space</option>
              </select>
              </div>
              <div class="col-lg-3 col-sm-4">
              <button class="btn btn-success"  onclick="window.location.href='buysalerent.php'">Buscar</button>
              </div>
          </div>
        </div>

        <div class="col-lg-5 col-lg-offset-1 col-sm-6 ">
          <p>Únase ahora y manténgase actualizado con todas las ofertas de propiedades</p>
          <button class="btn btn-info"   data-toggle="modal" data-target="#loginpop">Login</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- banner -->
<div class="container">
  <div class="properties-listing spacer"> <a href="buysalerent.php" class="pull-right viewall">Ver Todas las Casas</a>
    <h2>Propiedades Destacadas</h2>
    <div id="owl-example" class="owl-carousel">

    <?php
    while($row=pg_fetch_array($query)){
    ?>
      <div class="properties">
        <div class="image-holder"><img src="http://localhost/dashboard2021/image/<?= $row['foto'];?>" class="img-responsive" alt="properties"/>
          <div class="status new">Nuevo</div>
        </div>
        <h4><a href="property-detail.php"><?php echo $row['nombre'] ?></a></h4>
        <p class="price">Precio: <?php echo $row['precio'] ?></p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Baños">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Habitaciones">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parqueaderos">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Cocina">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php?id=<?php echo $row['id_publicacion'] ?>">Ver Detalles</a>
        
      </div>

    <?php 
    }
    ?> 
    </div>
  </div>
  <div class="spacer">
    <div class="row">
      <div class="col-lg-6 col-sm-9 recent-view">
        <h3>Acerca De Nosotros</h3>
        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.<br><a href="about.php">Leer Mas.</a></p>
      </div>
    </div>
  </div>
</div>
<?php include'footer.php';?>