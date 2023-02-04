<?php require_once "vistas/parte_superior.php"?>



<!--INICIO del cont principal-->

<!doctype html>

<html>

    <head>

        <link rel="shortcut icon" href="#" />

        <!-- Required meta tags -->

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Login con  PHP - Bootstrap 4</title>



        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">



        <link rel="stylesheet" href="../plugins/sweetalert2/sweetalert2.min.css">            

    </head>    

    <body>

      

        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <div class="jumbotron">

                        

                        <h1 class="display-4 text-center">¡Bienvenido!</h1>

                      <h2 class="text-center">Usuario: <span class="badge badge-primary"><?php echo $_SESSION["s_usuario"];?></span></h2>    

                      <p class="lead text-center">CONFIDENCIALIDAD DE LA INFORMACION

                         La información contenida en los portales a los que Csn Cooperativa tiene acceso se considera privilegiada y confidencial,

                         dado que su liberación representaría beneficios substanciales a competidores de Csn Cooperativa que ofrezcan servicios similares o información de nuestros clientes,

                         por lo que no debe ser reproducido o transmitido sin la autorización expresa y por escrito de Csn Cooperativa..</p>

                      <hr class="my-4">          

                      <p class="lead text-center">PorFavor Seleciona de la lista en el menu izquierdo la aplicacion que este disponible

                         para ti presiona el siguiente boton para 

                      <a  class="btn btn-danger text-center btn-lg" href="../bd/logout.php" role="button"> Cerrar Sesión</a><hr class="my-4"> 

                    </div>

                </div>

            </div>

        </div>        

     <script src="../jquery/jquery-3.3.1.min.js"></script>    

     <script src="../bootstrap/js/bootstrap.min.js"></script>    

     <script src="../popper/popper.min.js"></script>    

        

     <script src="../plugins/sweetalert2/sweetalert2.all.min.js"></script>    

     <script src="../codigo.js"></script>    
    </body>
</html>  
