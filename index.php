<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>BIBLIOTECA DEL CENTRO</title>

  <!-- Bootstrap paginas CSS -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

<?php 
$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'],'/')) : '/';
$url = $url[0];
if($url == "/"){
    ?>
        <!-- Custom fonts for this template -->
        <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
        <link href="assets/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template -->
        <link href="assets/css/landing-page.css" rel="stylesheet">
    <?php
}
?>
</head>
<body>
<?php
//Instancia de la Base de datos
include_once("core/baseDatos.php");

//Cambiar según sea necesario
// $host = "localhost";
// $dbname = "bd"; //Poner nombre de BD Aquí 
// $user = "root";
// $pass = "mysql"; //Dejar vacía si se usa XAMPP, mysql para AMPPS

// $objBD = new baseDatos($host,$dbname,$user,$pass);

if($url == "/"){
    include_once("paginas/inicio.php");
}else{
    if(file_exists("paginas/".$url.".php")){
        include_once("paginas/".$url.".php");
    }else{
        include_once("paginas/error.php");
    }
}
?>
  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <p class="text-muted small mb-4 mb-lg-0">&copy; Biblioteca del centro<br>APACULSA<br>Derechos Reservados.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="https://www.facebook.com/profile.php?id=100008813769724&lst=100007272940603%3A100008813769724%3A1555801617&sk=timeline" target="_blank">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.instagram.com/biblioteca_centro/" target="_blank">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
<!-- Bootstrap paginas JavaScript -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
