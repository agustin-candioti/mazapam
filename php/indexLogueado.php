<?php
session_start();
include_once("../layout/header.php");

?>


<body>

      <div class="bd-example">
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../images/alfa.jpg" class="d-block w-100" alt="Alfajores">
      <div class="carousel-caption d-none d-md-block">
        <h5>Alfajores</h5>
        <p>¡Conocé nuestros alfajores!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../images/bundt.jpg" class="d-block w-100" alt="Bundts">
      <div class="carousel-caption d-none d-md-block">
        <h5>Bundts</h5>
        <p>¡Conocé nuestros bundts!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../images/budin.jpg" class="d-block w-100" alt="Budines">
      <div class="carousel-caption d-none d-md-block">
        <h5>Budines</h5>
        <p>¡Conocé nuestros budines!</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

    <div class="container-fluid">
      <div class="row">
        <div class="contenedor_de_fotos">
        <div class="col-sm-12">
          <img src="../images/alfa.jpg" alt="" class="fotos" class="fotos">
          <h5 id="index">NUESTROS ALFAJORES</h5>
          <p class="descripcion">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <div class="ver_mas">
            <p>VER MÁS</p>
          </div>
        </div>
      </div>

      <div class="contenedor_de_fotos">
        <div class="col-sm-12">
          <img src="../images/bundt.jpg" alt="" class="fotos">
          <h5 id="index">NUESTROS BUNDTS</h5>
          <p class="descripcion">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <div class="ver_mas">
            <p>VER MÁS</p>
          </div>
          </div>
        </div>

        <div class="contenedor_de_fotos">
        <div class="col-sm-12">
          <img src="../images/budin.jpg" alt="" class="fotos">
          <h5 id="index">NUESTROS BUDINES</h5>
          <p class="descripcion">Lorem ipsum dolor sit amet,   consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <div class="ver_mas">
            <p>VER MÁS</p>
          </div>
        </div>
     </div>

     <div class="contenedor_de_fotos">
      <div class="col-sm-12">
        <p>Próximos Eventos</p>
        <img src="https://scontent.faep5-1.fna.fbcdn.net/v/t1.0-9/71496383_2493870883995761_209375433727148032_n.jpg?_nc_cat=108&_nc_oc=AQl9prTz8SzUoEVkVALbrEkxQwTnNUzI_8KxH52CkhwaJuRQBtL89gTmkcqZ_rrLGjc&_nc_ht=scontent.faep5-1.fna&oh=7c811ac6cc1331265b79a30178154548&oe=5E491194" alt="flyer" class="fotos">
        
        
        <div class="ver_mas">
          <p>Más Información</p>
        </div>

   </div>
   </div>

<?php

  include("../layout/footer.php");

?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>