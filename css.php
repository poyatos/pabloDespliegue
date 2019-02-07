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
              <img src="img/css1.jpg" alt="codigo">
              <div class="carousel-caption"></div>
            </div>

            <div class="item">
              <img src="img/css2.jpg" alt="lenguajes">
              <div class="carousel-caption"></div>
            </div>

            <div class="item">
              <img src="img/css3.jpg" alt="inteligencia">
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
                <h5><span class="glyphicon glyphicon-time"></span> Post realizado por Morty</h5>
                <h5><span class="label label-danger">CSSMOLA</span> <span class="label label-primary">CSSdays
                </span></h5><br>
                <p>
                CSS (siglas en inglés de Cascading Style Sheets), en español "Hojas de estilo en cascada", es un lenguaje de
                 diseño gráfico para definir y crear la presentación de un documento estructurado escrito en un lenguaje de 
                 marcado.2​ Es muy usado para establecer el diseño visual de los documentos web, e interfaces de usuario escritas
                  en HTML o XHTML; el lenguaje puede ser aplicado a cualquier documento XML, incluyendo XHTML, SVG, XUL, RSS, 
                  etcétera. También permite aplicar estilos no visuales, como las hojas de estilo auditivas.
                Junto con HTML y JavaScript, CSS es una tecnología usada por muchos sitios web para crear páginas visualmente atractivas,
                 interfaces de usuario para aplicaciones web y GUIs para muchas aplicaciones móviles (como Firefox OS).3​
                CSS está diseñado principalmente para marcar la separación del contenido del documento y la forma de presentación de este,
                 características tales como las capas o layouts, los colores y las fuentes.4​ Esta separación busca mejorar la accesibilidad
                  del documento, proveer más flexibilidad y control en la especificación de características presentacionales, permitir que
                   varios documentos HTML compartan un mismo estilo usando una sola hoja de estilos separada en un archivo .css, y reducir
                    la complejidad y la repetición de código en la estructura del documento.
                La separación del formato y el contenido hace posible presentar el mismo documento marcado en diferentes estilos para diferentes 
                métodos de renderizado, como en pantalla, en impresión, en voz (mediante un navegador de voz o un lector de pantalla, y
                 dispositivos táctiles basados en el sistema Braille. También se puede mostrar una página web de manera diferente dependiendo
                  del tamaño de la pantalla o tipo de dispositivo. Los lectores pueden especificar una hoja de estilos diferente, como una
                   hoja de estilos CSS guardado en su computadora, para sobreescribir la hoja de estilos del diseñador.
                La especificación CSS describe un esquema prioritario para determinar qué reglas de estilo se aplican si más de una regla
                coincide para un elemento en particular. Estas reglas son aplicadas con un sistema llamado de cascada, de modo que las prioridades
                 son calculadas y asignadas a las reglas, así que los resultados son predecibles.
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