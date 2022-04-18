<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Tentacion Paladar Byss</title>
  <!-- Fuente Tipo de letra -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Beau+Rivage&family=Playfair+Display&display=swap" rel="stylesheet">
  <!-- Icon -->
  <script src="https://kit.fontawesome.com/d273f21c0b.js" crossorigin="anonymous"></script>
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- css -->
  <link rel="stylesheet" href="{{asset('css/styles.css')}}">  <!--los doblecorchete es para imprimir lo que tendran dentro o sea sera un elemento dinamico cuando sitio haga el render completo lo que va hacer es autocompletar hacia atras la ruta completa del recurso, lo que va dentro de las llaves es dinamico. siempre va el asset ya que son recursos-->


</head>

<body>
  <!-- Barra superior -->
  <section class="barra-superior" id="title">
    <div class="title-cubo container-fluid">
      <!-- Nav Bar -->
      <nav class="barra-superior navbar navbar-expand-lg navbar-dark">
        <a class=" fa-solid fa-shrimp icon-titulo  navbar-brand " href="/"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="/Menu">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/index2">Quienes Somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/formulario">Contacto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href=""><i class="fa-solid fa-cart-shopping"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </section>
  
 <!--contenido principal-->
  <div class="p-2">
      @yield('contenido-principal')
  </div>


  <!-- Redes sociales -->
  <section>

  </section>
  <!-- footer -->

  <footer class="barra-superior" id="footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4">
          <p class="footer-cosas">Numero de teléfono:<br>+56998994014<br>+56964071335</p>
        </div>

        <div class="col-lg-4">
          <a class="fa-brands fa-instagram" href="https://www.instagram.com/tentacionbyss/?hl=es-la" aria-label="Area de instagram" target="_blank"></a>
          <a class="fa-brands fa-facebook" href="https://www.facebook.com/profile.php?id=100076611339063" target="_blank"></a>
          <a class="fa-brands fa-whatsapp" href="https://web.whatsapp.com" target="_blank"></a>
          <a class="fa-solid fa-envelope" href="https://www.google.com/intl/es-419/gmail/about/" target="_blank"></a>
          <p>© Copyright 2022</p>
        </div>
        <div class="col-lg-4">
          <p class="footer-cosas"> Dirección:<br>Chacabuco 960, A1 31</p>
        </div>
      </div>

      </div>
  </footer>


  


  <div class="p-2">
    @yield('Script')
  </div>


</body>

</html>
