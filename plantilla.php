<?php

    $obj69 = new plantilla();

class plantilla{
        function __construct(){ ?>
          <!DOCTYPE html>
          <html lang="en">
          <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
            <link rel="stylesheet" href="css/mainPagina.css">

            <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
            <script type="text/javascript" src="bootstrap.js"></script>
            <title>Proyecto de Base de Datos Avanzadas</title>
          </head>
          <body>
            <div id="divPagina" class= "container">

              <nav class="navbar navbar-default">
                      <div class="container-fluid">
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                          <a class="navbar-brand" href="./">Tarea Facil</a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                          <ul class="nav navbar-nav">
                            <li class="active"><a href="index.php">Vehiculos</a></li>
                            <li><a href="marcas_modelos.php">Marcas / Modelos</a></li>
                            <li><a href="usuarios.php">Usuarios</a></li>


                          </ul>
                          <ul class="nav navbar-nav navbar-right">

                            <li><a href="salir.php">Salir</a></li>
                          </ul>
                        </div><!--/.nav-collapse -->
                      </div><!--/.container-fluid -->
                    </nav>
          <?php
        }

        function __destruct(){ ?>



            </div>
            <div class="container">
              <hr/>
              Derechos reservados @2018
            </div>
          </body>
          </html>
          <?php
        }

}


 ?>
