<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
</head>

<body>
    <!--Parte Inicial-->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark" role="navigation">
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-content"
          aria-expanded="false" aria-label="Desplegar Navegación">
               <span class="navbar-toggler-icon"></span>
           </button>
        <a class="navbar-brand" href="index.php">Biblioteca del Centro</a>
        <!--Enlaces-->
        <div class="collapse navbar-collapse" id="nav-content">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="Preview" href="#" role="button"
                     aria-haspopup="true" aria-expanded="false">Ejercicios 1 a 5</a>
                    <div class="dropdown-menu" aria-labelledby="Preview">
                        <a href="index.php?pg=ejer1.php" class="dropdown-item">Ejercicio 1</a>
                        <a href="index.php?pg=ejer2.php" class="dropdown-item">Ejercicio 2</a>
                        <a href="index.php?pg=ejer3.php" class="dropdown-item">Ejercicio 3</a>
                        <a href="index.php?pg=ejer4.php" class="dropdown-item">Ejercicio 4</a>
                        <a href="index.php?pg=ejer5.php" class="dropdown-item">Ejercicio 5</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="Preview" href="#" role="button"
                     aria-haspopup="true" aria-expanded="false">Ejercicios 6 a 7</a>
                    <div class="dropdown-menu" aria-labelledby="Preview">
                        <a href="index.php?pg=ejer6.php" class="dropdown-item">Ejercicio 6</a>
                        <a href="index.php?pg=ejer7.php" class="dropdown-item">Ejercicio 7</a>
                        <a href="index.php?pg=ejer7v2.php" class="dropdown-item">Ejercicio 7 Versión 2</a>

                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="Preview" href="#" role="button"
                     aria-haspopup="true" aria-expanded="false">Ejercicios Especiales</a>
                    <div class="dropdown-menu" aria-labelledby="Preview">
                        <a href="index.php?pg=ejer11.php" class="dropdown-item">Ejercicio 1</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class="col-sm-12" style="margin-top:10px;">
        <div class="card">
            <?php 
                if(isset($_GET['pg']))
                {
                    include($_GET['pg']);
                }
                else
                {
                    echo "
                        <div class='card-header'>
                            Guía Practica #4
                        </div>
                        <div class='card-block'>
                            <h4 class='card-title'>José Marcelo Hernández Cerritos</h4>
                            <p class='card-text'>SIS 32B<br>Desarrollo de Aplicaciones para la Web</p>
                        </div>
                    ";
                }
            ?>
        </div>
    </div>
    <!-- Scripts JS-->
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
