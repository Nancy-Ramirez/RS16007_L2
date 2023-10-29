<?php require_once "depend.php" ?>

<!DOCTYPE html>
<head>
    <title></title>
</head>
<body>
<!-- Begin Navbar -->
<div id="nav">
        <div class="navbar  navbar-fixed-top" data-spy="affix" data-offset-top="100" style="background-color: #5141b0;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="inicio.php"><img class="img-responsive logo img-thumbnail"
                            src="../img/logo.jpeg" alt="" width="100px" height="100px"></a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">

                        <!--Inicio-->
                        <li>
                            <a href="inicio.php" style="color: black">
                                <span class="glyphicon glyphicon-home"></span>
                                Inicio
                            </a>
                        </li>
                        <!--Libro-->
                        <li><a href="libros.php" style="color: black"><span class="glyphicon glyphicon-usd"></span>
                                Libro</a>
                        </li>
                        <!--Autores-->
                        <?php
                        if($_SESSION['usuario']=="administrador"):
                        ?>
                        <li><a href="autores.php" style="color: black"><span class="glyphicon glyphicon-apple"></span>
                                Autores</a>
                        </li>
                        <?php 
                           endif;
                        ?>
                        <?php
                        if($_SESSION['usuario']=="Administrador"):
                        ?>
                        <li><a href="usuario.php" style="color: black"><span class="glyphicon glyphicon-user"></span>
                                Alumnos</a>
                        </li>
                        <?php 
                           endif;
                        ?>
                        <li class="dropdown">
                            <a href="#" style="color: #41a0b0" class="dropdown-toggle" data-toggle="dropdown"
                                role="button" aria-haspopup="true" aria-expanded="false"><span
                                    class="glyphicon glyphicon-off"></span>
                                <?php echo $_SESSION['usuario']; ?> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li> <a style="color: #41a0b0" href="../procesos/salir.php"><span
                                            class="glyphicon glyphicon-off"></span> Salir</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
            <!--/.contatiner -->
        </div>
    </div>
    <!-- Main jumbotron for a primary marketing message or call to action -->





    <!-- /container -->   
</body>
</html>
<script type="text/javascript">
$(window).scroll(function() {
    if ($(document).scrollTop() > 150) {
        $('.logo').height(200);

    } else {
        $('.logo').height(100);
    }
});
</script>