
@extends('layouts/master')

@section('contenido-principal')


 <!-- Imagen del Formulario -->

  <section class="formulario">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <img src="images/imagen3.jpeg" alt="imagen formulario" class="imagen-formulario">
        </div>
      </div>

 <!-- CONTÁCTANOS -->

      <div class="row">
        <div class="formulario-contactanos col-lg-6">
          <h1 class="contactanos">¡CONTÁCTANOS!</h1>
          <p class="slogan-CONTÁCTANOS">Cualquier cotización, duda o consulta que tengas
             la puedes realizar a través del siguiente formulario de contacto,Toda consulta
             será respondida a la brevedad o dentro de las siguientes 
             24 horas hábiles.</p>
        </div>

<!-- Formulario -->

        <div class="fo col-lg-6">
            <div class="row">
              <div class="formulario col-lg-4 col-sm-12">
                <div class="centrar">
                  <input type="text" name="name" id="name" placeholder="Tu Nombre" required>
                </div>
              </div>
              <div class="formulario col-lg-4">
                <div class="centrar">
                  <input type="email" name="mail" id="mail" placeholder="Tu Email" required>
                </div>
              </div>
              <div class="formulario col-lg-4">
                <div class="centrar">
                  <input class="asunto" type="text" name="asunto"  placeholder="Asunto" id="asunto" required>
                </div>
              </div>
              <div class="formulario col-lg-12">
                <div class="centrar-tex">
                  <textarea name="message" id="message" cols="82.9" rows="10" placeholder="Escribe aquí tu mensaje ..." ></textarea>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="centrar">
                  <button type="submit" class="btn btn-outline-success" >Enviar</button>
                </div>
              </div>
            </div>
        </div>
      </div>
  </section>

     <!-- footer -->

     @endsection