
@extends('layouts/master')

@section('contenido-principal')
      <!-- Portada -->
  <section class="white-color" id="portada">
    <div class="container-fluid">
      <div class="row">
        <div class="titulo col-lg-5">
          <h1 class="titulo-empresa">Tentacion Paladar Byss</h1>
          <p class="slogan-empresa">La mejor comida de la region, comida sin igual.</p>
        </div>
        <div class="col-lg-7">
          <img src="{{ asset('Images/imagen1.jpg')}} "alt="imagen sushi empresa" class="title-image"> <!--generar una ruta absoluta al recurso independiente del dominio que tiedne asignado el sitio -->
        </div>
      </div>
    </div>
  </section>
  <!-- Redes sociales -->
  <section>

  </section>
  <!-- footer -->
@endsection



  
