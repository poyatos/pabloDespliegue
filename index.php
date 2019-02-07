<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel=stylesheet href="estilo.css" type="text/css" media=screen>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>

<body>
                <?php
                include "include/header.inc"
                ?>



            <div class="col-md-9">
                <img src="img/banner.png" class="img-thumbnail" alt="Banner">
                <hr>
                <h2>Hablemos de la programación</h2>
                <h5><span class="glyphicon glyphicon-time"></span> Post realizado por nuestro responsal de guerra</h5>
                <h5><span class="label label-danger">instaProgramacion</span> <span class="label label-primary">programar
                        mola</span></h5><br>
                <p>La programación es un proceso que se utiliza para idear y ordenar las acciones que se realizarán en
                    el marco de un proyecto; al anuncio de las partes que componen un acto o espectáculo; a la
                    preparación de máquinas para que cumplan con una cierta tarea en un momento determinado; a la
                    elaboración de programas para la resolución de problemas mediante ordenadores; y a la preparación
                    de los datos necesarios para obtener una solución de un problema.
                    En la actualidad, la noción de programación se encuentra muy asociada a la creación de aplicaciones
                    informáticas y videojuegos; es el proceso por el cual una persona desarrolla un programa valiéndose
                    de una herramienta que le permita escribir el código (el cual puede estar en uno o varios
                    lenguajes, tales como C++, Java, Python entre otros) y de otra que sea capaz de “traducirlo” a lo
                    que se conoce como lenguaje de máquina, el cual puede ser entendido por un microprocesador. </p>
                <br><br>

                <h4><small>Últimos post</small></h4>
                <hr>
                <h2>Steve Jobs vive!</h2>
                <h5><span class="glyphicon glyphicon-time"></span>Post realizado por MiguelNara</h5>
                <h5><span class="label label-success">Apple</span></h5><br>
                <p>El señor Esteban trabajos ha sido encontrado el otro dia en un parque comiendo un bocadillo, no me
                    lo podia creer, el creador de la manzana molona comiendo un bocadillo, espero que sea solo una
                    alucinación, no me imagino a Esteban sin ser vegano</p>
                <hr>
                <h2>Descubre las novedades de tu lenguaje favorito</h2>
                <h5><span class="glyphicon glyphicon-time"></span>Post realizado por MiguelNara</h5>
                <h5><span class="label label-success">Apple</span></h5><br>
                <p>Muchos de los que nos encontramos en esta comunidad tenemos conocimientos sobre programación, nos
                    dedicamos a ello, lo estudiamos o simplemente lo tenemos como un hobby, pero a día de hoy en el que
                    surgen continuamente nuevos lenguajes me gustaría conocer cual es vuestro lenguaje de programación
                    favorito y en el que trabajáis para desarrollar vuestros proyectos. [poll type=multiple min=1
                    max=2]</p>
                <hr>

                <?php
                include "include/paginacion.inc"
                ?>

            </div>
        </div>
    </div>
    </div>

    </div>

    </div>



   <?php
   include "include/footer.inc"
   ?>

</body>

</html>