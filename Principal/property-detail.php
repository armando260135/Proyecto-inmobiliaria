<?php include'header.php';?>
<?php 
    include("../BD/conexion.php");
    $con=conectar();

$id=$_GET['id'];


$sql="SELECT * FROM crudinmobiliaria.publicacion WHERE id_publicacion='$id'";
$query=pg_query($con,$sql);
$row=pg_fetch_array($query);


$sql="SELECT * FROM crudinmobiliaria.publicacion";

?>



<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="#">Home</a> / Arrendar</span>
    <h2>Arrendar</h2>
</div>
</div>
<!-- banner -->


<div class="container">
  <div class="properties-listing spacer">
    <div class="row">
    <div class="col-lg-3 col-sm-4 hidden-xs">
      <div class="hot-properties hidden-xs">
        <h4>Agregadas recientemente</h4>
        
          <div class="row">
            <div class="col-lg-4 col-sm-5"><img src="images/properties/4.jpg" class="img-responsive img-circle" alt="properties"/></div>
            <div class="col-lg-8 col-sm-7">
              <h5><a href="property-detail.php"><?php echo $row['nombre']  ?></a></h5>
              <p class="price"><?php echo $row['precio']  ?></p> </div>
            </div>
               
          </div>

          <div class="advertisement">
            <h4>Advertisements</h4>
            <img src="images/advertisements.jpg" class="img-responsive" alt="advertisement">

          </div>

      </div>

      <div class="col-lg-9 col-sm-8 ">
        <h2><?php echo $row['nombre']." en ".$row['ciudad']?></h2>
        <div class="row">
          <div class="col-lg-8">
            <div class="property-images">
              <!-- Slider Starts -->
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators hidden-xs">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                  <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                  <li data-target="#myCarousel" data-slide-to="3" class=""></li>
                </ol>
                <div class="carousel-inner">
                <!-- Item 1 -->
                  <div class="item active">
                    <img src="http://localhost/dashboard2021/image/<?= $row['foto'];?>" class="properties" alt="properties" />
                  </div>
                  <!-- #Item 1 -->

                  <!-- Item 2 -->
                  <div class="item">
                    <img src="http://localhost/dashboard2021/image/<?= $row['foto'];?>" class="properties" alt="properties" />
                  </div>
                  <!-- #Item 2 -->

                  <!-- Item 3 -->
                  <div class="item">
                    <img src="http://localhost/dashboard2021/image/<?= $row['foto'];?>" class="properties" alt="properties" />
                  </div>
                  <!-- #Item 3 -->

                  <!-- Item 4 
                  <div class="item ">
                    <img src="images/properties/3.jpg" class="properties" alt="properties" />
                  </div>-->
                  <!-- # Item 4 -->
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
              </div>
              <!-- #Slider Ends -->

            </div>

            <div class="spacer"><h4><span class="glyphicon glyphicon-th-list"></span> Detalles De La Propiedad # <?php echo $row['id_publicacion']  ?></h4>
              <p><?php echo $row['descripcion']  ?></p>
              <p></p>
              <h5><span class="glyphicon glyphicon-home"></span> Tipo De Inmueble</h5>
              <p > <?php echo $row['tipo_inmueble']  ?></p>
              <h5><span class="glyphicon glyphicon-record"></span> Ciudad De la residencia </h5>
              <p><?php echo $row['ciudad']  ?></p>
              <h5><span class="glyphicon glyphicon-map-marker"></span> Zona De la residencia </h5>
              <p><?php echo $row['zona']  ?></p>


            </div>
            <div>
              <h4>
                <span class="glyphicon glyphicon-map-marker"></span> Localizacion
              </h4>
              <div class="well"><iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Pulchowk,+Patan,+Central+Region,+Nepal&amp;aq=0&amp;oq=pulch&amp;sll=37.0625,-95.677068&amp;sspn=39.371738,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Pulchowk,+Patan+Dhoka,+Patan,+Bagmati,+Central+Region,+Nepal&amp;ll=27.678236,85.316853&amp;spn=0.001347,0.002642&amp;t=m&amp;z=14&amp;output=embed"></iframe></div>
              </div>

            </div>
            <div class="col-lg-4">


              <div class="col-lg-12  col-sm-6">
                <div class="property-info">
                  <p class="price">$ <?php echo $row['precio']  ?></p>
                  <p class="area"><span class="glyphicon glyphicon-map-marker"></span> <?php echo $row['direccion']  ?></p>
  
                  <div class="profile" style="font-size:14px;">
                    <span class="glyphicon glyphicon-user" style="font-size:14px;"></span> Detalles Del Propietario
                    <p style="font-size:14px;"><?php echo $row['nombre_propietario'] ?> <br> </p>
                  </div>
                </div>
                <h6><span class="glyphicon glyphicon-home"></span> Disponibilidad</h6>
                <div class="listing-detail">
                  <span data-toggle="tooltip" data-placement="bottom" data-original-title="Baños">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Habitaciones">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parqueadero">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Cocinas">1</span> </div>

              </div>
              <div class="col-lg-12 col-sm-6 ">
                <div class="enquiry">
                  <h6><span class="glyphicon glyphicon-envelope"></span> Formulario de contacto</h6>
                  <form role="form" action="contacto/insertar_contacto.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="nombre_realizo_contacto" class="form-control" placeholder="Nombre Completo"/>
                    <input type="text" name="correo_contacto" class="form-control" placeholder="you@yourdomain.com"/>
                    <input type="tel" name="telefono_contacto" class="form-control" placeholder="Numero de contacto"/>
                    <textarea rows="6" name="descripcion_contacto" class="form-control" placeholder="Pregunta?"></textarea>
                    <button type="submit" class="btn btn-primary" name="Submit">Contactame</button>
                  </form>
                </div>         
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>

<?php include'footer.php';?>