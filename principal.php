<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
</head>

<body>
    <!--Parte Inicial-->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark" role="navigation">
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-content" aria-expanded="false" aria-label="Desplegar Navegación">
               <span class="navbar-toggler-icon"></span>
           </button>
        <a class="navbar-brand" href="index.html">Biblioteca del Centro</a>
        <!--Enlaces-->
        <div class="collapse navbar-collapse" id="nav-content">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="Preview" href="#" role="button" aria-haspopup="true" aria-expanded="false">Nuevo</a>
                    <div class="dropdown-menu" aria-labelledby="Preview">
                        <a href="principal.php?pg=autor.php" class="dropdown-item">Autor</a>
                        <a href="#" class="dropdown-item">Registro (Libro)</a>
                        <a href="#" class="dropdown-item">Asignatura</a>
                        <a href="#" class="dropdown-item">Taller</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="Preview" href="#" role="button"
                     aria-haspopup="true" aria-expanded="false">Consulta</a>
                    <div class="dropdown-menu" aria-labelledby="Preview">
                        <a href="index.php?pg=consultaAutores.php" class="dropdown-item">Autores</a>
                        <a href="index.php?pg=consultaTalleres.php" class="dropdown-item">Talleres</a>

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
                    echo "<center>
                    <img src='img/biblio.jpg' height=20% width=40% alt='Imagen Biblioteca'>
                    </center>
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
