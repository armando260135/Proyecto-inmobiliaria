
<?php 
session_start(); // iniciar la sesion
require('../BD/conexion.php');
$con=conectar();
if(!empty($_POST['nickname_admin']) && !empty($_POST['contraseña_admin'])){
    $nickname_admin=$_POST['nickname_admin'];
    $contraseña_admin=$_POST['contraseña_admin'];
    $nombre_usuario=$_SESSION['$nickname_admin'];
    
    $query="SELECT nickname_admin,contraseña_admin FROM crudinmobiliaria.administrador WHERE nickname_admin='$nickname_admin' AND contraseña_admin='$contraseña_admin'";
    $resultado=pg_query($con,$query);
    $user = pg_fetch_assoc($resultado);// para traer los datos en un array 
    $mensaje='';

    if ($user) {//para validar si nos trajimos datos de la base de datos 
        if ($nickname_admin == $user['nickname_admin'] && $contraseña_admin == $user['contraseña_admin']) {//comparamos los datos 
            $_SESSION['nickname_admin'] = $nickname_admin; // almacenar el email en la sesio 'email'  
            header("Location: ../Inmueble/index_inmueble.php");
        }
    }else{//en el caso de que no halla traido nada de la base de datos

        $mensaje='Ingrese de nuevo su usuario y contraseña';
        header("Location: index.php");
      
       
      }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>login</title>
    <style>
.d-flex.align-items-center.min-vh-100.py-3.py-md-0 {
  background-image: url('assets/images/fondo.jpg');
  background-repeat:no-repeat;
  background-size: cover;
}
.brand-wrapper.logo {
  height: 60px;
}
.brand-wrapper .logo {
    height: 70px;
}

    </style>
</head>
<body>
    
    
    
        
   
    

    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
    
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="assets/images/edificio.png" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="assets/images/logo1.png" alt="logo" class="logo">
              </div>
              <p class="login-card-description">Tienes El Poder Del Admin?</p>
              <form action="index.php" method="POST" autocomplete="off">
                <?php if(!empty($mensaje)):?>
                    <p class="error" style="color:red;"><strong> <?= $mensaje ?></strong></p>
                <?php endif; ?>
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="nickname_admin" id="nickname_admin" class="form-control" placeholder="Email address">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="contraseña_admin" id="contraseña_admin" class="form-control" placeholder="***********">
                  </div>
                  <input type="submit" value="Ingresar">
                </form>
                <a href="#!" class="forgot-password-link">Olvide Mi Contraseña?</a>
                
                <nav class="login-card-footer-nav">
                  <a href="#!">Terms of use.</a>
                  <a href="#!">Privacy policy</a>
                </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="card login-card">
        <img src="assets/images/login.jpg" alt="login" class="login-card-img">
        <div class="card-body">
          <h2 class="login-card-title">Login</h2>
          <p class="login-card-description">Sign in to your account to continue.</p>
          <form action="#!">
            <div class="form-group">
              <label for="email" class="sr-only">Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="password" class="sr-only">Password</label>
              <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-prompt-wrapper">
              <div class="custom-control custom-checkbox login-card-check-box">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember me</label>
              </div>              
              <a href="#!" class="text-reset">Forgot password?</a>
            </div>
            <input name="login" id="login" class="btn btn-block login-btn mb-4" type="button" value="Login">
          </form>
          <p class="login-card-footer-text">Don't have an account? <a href="#!" class="text-reset">Register here</a></p>
        </div>
      </div> -->
      
    </div>
  </main>
 
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>