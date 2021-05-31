<?php 
    require('../BD/conexion.php');
    session_start();
    $email=$_SESSION['nickname_admin'];
    if (isset($_SESSION['nickname_admin'])) {
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<br> Welcome. <?= $nickname_admin; ?>
<br>
<a href="logout.php">Salir</a>
    
</body>
</html>
<?php
    }else{
        header('location:index.php');
    }

?>