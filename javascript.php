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
<div id="myCarouselCustom" class="carousel slide" data-ride="carousel">
      
          <ol class="carousel-indicators">
            <li data-target="#myCarouselCustom" data-slide-to="0" class="active"></li>
            <li data-target="#myCarouselCustom" data-slide-to="1"></li>
            <li data-target="#myCarouselCustom" data-slide-to="2"></li>
          </ol>

     
          <div class="carousel-inner">
            <div class="item active">
              <img src="img/js1.jpg" alt="codigo">
              <div class="carousel-caption"></div>
            </div>

            <div class="item">
              <img src="img/js2.jpg" alt="lenguajes">
              <div class="carousel-caption"></div>
            </div>

            <div class="item">
              <img src="img/js3.jpg" alt="inteligencia">
              <div class="carousel-caption"></div>
            </div>
          </div>
        </div>
<script type="text/javascript">
    
    $('#myCarouselCustom').carousel();

    // Go to the previous item
    $("#prevBtn").click(function () {
      $("#myCarouselCustom").carousel("prev");
    });
    // Go to the previous item
    $("#nextBtn").click(function () {
      $("#myCarouselCustom").carousel("next");
    });
  </script>
<hr>
<h2>CSS</h2>
                <h5><span class="glyphicon glyphicon-time"></span> Post realizado por VINILOKO</h5>
                <h5><span class="label label-danger">JSMOLA</span> <span class="label label-primary">javascript
                </span></h5><br>
                <p>
                JavaScript (abreviado comúnmente JS) es un lenguaje de programación interpretado, dialecto del estándar
                 ECMAScript. Se define como orientado a objetos,3​ basado en prototipos, imperativo, débilmente tipado y
                  dinámico.
                Se utiliza principalmente en su forma del lado del cliente (client-side), implementado como parte de un 
                navegador web permitiendo mejoras en la interfaz de usuario y páginas web dinámicas4​ aunque existe una
                 forma de JavaScript del lado del servidor (Server-side JavaScript o SSJS). Su uso en aplicaciones externas
                  a la web, por ejemplo en documentos PDF, aplicaciones de escritorio (mayoritariamente widgets) es también
                   significativo.
                Desde el 2012, todos los navegadores modernos soportan completamente ECMAScript 5.1, una versión de javascript. 
                Los navegadores más antiguos soportan por lo menos ECMAScript 3. La sexta edición se liberó en julio del 2015.5​
                JavaScript se diseñó con una sintaxis similar a C, aunque adopta nombres y convenciones del lenguaje de programación 
                Java. Sin embargo, Java y JavaScript tienen semánticas y propósitos diferentes.
                Todos los navegadores modernos interpretan el código JavaScript integrado en las páginas web. Para interactuar 
                con una página web se provee al lenguaje JavaScript de una implementación del Document Object Model (DOM).
                Tradicionalmente se venía utilizando en páginas web HTML para realizar operaciones y únicamente en el marco de la 
                aplicación cliente, sin acceso a funciones del servidor. Actualmente es ampliamente utilizado para enviar y recibir
                 información del servidor junto con ayuda de otras tecnologías como AJAX. JavaScript se interpreta en el agente de 
                 usuario al mismo tiempo que las sentencias van descargándose junto con el código HTML.
                </p>
                <br>
                <br>

<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="vid/pro.mp4"></iframe>
</div>
<hr>

</div>



                <?php
                include "include/paginacion.inc"
                ?>

   <?php
   include "include/footer.inc"
   ?>

</body>

</html>