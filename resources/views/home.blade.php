@extends('layouts.plantilla')
@section('title', 'SenatiServicios')
@section('content')
<header>
  <div class="contenedor-logo">
    <h1>SENATIServicios</h1>
  </div>
  <div class="contenedor-menu">
    <div class="servicios">
      Servicios
    </div>
    <div class="productos">
      Productos
    </div>
  </div>
</header>
<div class="contenedor-cuerpo">

  <!-- Carrucel -->
  <div class="contenedor-carrucel">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/gok1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Primer slider label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/gok2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Segundo slider label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/gok3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Tercer slider label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <!-- Cuerpo -->
  <!-- Mision / Visión -->
  <div class="mision">
    <img src="" alt="">
    <p><h2>Misión</h2><h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3></p>
  </div>
  <div class="vision">
    <img src="" alt="">
    <p><h2>Visión</h2><h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3></p>
  </div>
</div>
<hr>

<!-- Muestrario de Productos -->
<h2>Productos</h2>
<img src="" alt="">
<img src="" alt="">
<img src="" alt="">
<hr>

<!-- Formulario -->
<div class="row g-3">
  <div class="col">
    <input type="text" class="form-control" placeholder="Nombres" aria-label="First name">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Apellidos" aria-label="Last name">
  </div>
</div>
<div class="col-md-6">
  <input type="email" class="form-control" id="inputEmail4" placeholder="E-mail">
</div>
<div class="col-md-6">
  <input type="password" class="form-control" id="inputPassword4" placeholder="Contraseña">
</div>
<div class="form-floating">
  <textarea class="form-control" id="floatingTextarea2" style="height: 100px"></textarea>
  <label for="floatingTextarea2">Comentario</label>
</div>
<div class="col-12">
  <button type="submit" class="btn btn-primary">Enviar</button>
</div>
<!-- Mapa Ubicación -->
<img src="" alt="">

<!-- Pie de página -->
<div class="contenedor-footer">
  <footer>
    <div class="redes">
      <h3>Contáctanos</h3>
      <a href="#">Facebook</a>
      <a href="#">Whatsapp</a>
      <a href="#">Gmail</a>
    </div>
    <div class="horario-atencion">
      <h3>Horario de atención</h3>
      <h4>Lunes</h4>
      <h4>Miércoles</h4>
      <h4>Viernes</h4>
      <h4>Sábado</h4>
    </div>
  </footer>
</div>
@endsection