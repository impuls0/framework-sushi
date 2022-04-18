

@extends('layouts/master')

@section('contenido-principal')



    <nav id="main-nav" class="nav">
        <div id="toggle-menu" class="toggle-menu">
            <i class="fas fa-bars toggle-menu_icon"></i>
        </div>
        <ul id="main-menu" class="main-menu">
            <li class="main-menu_item">
                <a href="#" class="main-menu_link">
                    <i class="fa-solid fa-burger main-menu_icon"></i>
                    Burger
                </a>
            </li>
            <li class="main-menu_item">
                <a href="#" class="main-menu_link">
                    <i class="fa-solid fa-fish-fins main-menu_icon"></i>
                    Sushi
                </a>
            </li>
            <li class="main-menu_item">
                <a href="#" class="main-menu_link">
                    <i class="fa-solid fa-percent main-menu_icon"></i>
                    Promos
                </a>
            </li>
            <li class="main-menu_item">
                <a href="#" class="main-menu_link">
                    <i class="fa-solid fa-fire-burner main-menu_icon"></i>
                    Lo mas vendido
                </a>
            </li>
        </ul>
    </nav>
    <main class="main">
        <h1 class="title">Sushis finos finos</h1>

        <!--navbar-->
        <div class="container-fluid p-0">

            <!--menu contenido menu-->



            <div class="p-2">
                <div class="row">
                    <div class="col">
                        <h3>Todos las tablas</h3>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 col-xl-2">
                        <!--cuando este en xs habra 1 imagen porque ocuparan espacio 12  cuando esten en medio se venaran 2 card por vista ya que usaran 6 columnas por imagen y el total son 12, cuando este en la vista lg se venaran 3 ya que cada card ocupa 4 columnas y en la ultima vista la xl se veran 6 cards en pantalla yaque cada card usara 2 columnas y el total son 12-->
                        <div class="card m-2">
                            <img src="{{asset('images/sushi1.jpg')}}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">sushiprimero</h5>
                                <div class="btn-group d-flex">
                                    <button class="btn btn-outline-success">comprar</button>
                                    <button type="button" class="btn btn-primary" id="liveToastBtn">Anadir al
                                        carrito</button>
                                    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
                                        <div id="liveToast" class="toast" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header">
                                                <img src="..." class="rounded me-2" alt="...">
                                                <strong class="me-auto">Carrito</strong>
                                                <small>ahora</small>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                AGREGADO AL CARRITO
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 col-xl-2">
                        <!--cuando este en xs habra 1 imagen porque ocuparan espacio 12  cuando esten en medio se venaran 2 card por vista ya que usaran 6 columnas por imagen y el total son 12, cuando este en la vista lg se venaran 3 ya que cada card ocupa 4 columnas y en la ultima vista la xl se veran 6 cards en pantalla yaque cada card usara 2 columnas y el total son 12-->
                        <div class="card m-2">
                            <img src="{{asset('images/sushi2.jpg')}}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">sushiprimero</h5>
                                <div class="btn-group d-flex">
                                    <button class="btn btn-outline-success">comprar</button>
                                    <button type="button" class="btn btn-primary" id="liveToastBtn">Anadir al
                                        carrito</button>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 col-xl-2">
                        <!--cuando este en xs habra 1 imagen porque ocuparan espacio 12  cuando esten en medio se venaran 2 card por vista ya que usaran 6 columnas por imagen y el total son 12, cuando este en la vista lg se venaran 3 ya que cada card ocupa 4 columnas y en la ultima vista la xl se veran 6 cards en pantalla yaque cada card usara 2 columnas y el total son 12-->
                        <div class="card m-2">
                            <img src="{{asset('images/sushi3.jpg')}}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">sushiprimero</h5>
                                <div class="btn-group d-flex">
                                    <button class="btn btn-outline-success">comprar</button>
                                    <button type="button" class="btn btn-primary" id="liveToastBtn">Anadir al
                                        carrito</button>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 col-xl-2">
                        <!--cuando este en xs habra 1 imagen porque ocuparan espacio 12  cuando esten en medio se venaran 2 card por vista ya que usaran 6 columnas por imagen y el total son 12, cuando este en la vista lg se venaran 3 ya que cada card ocupa 4 columnas y en la ultima vista la xl se veran 6 cards en pantalla yaque cada card usara 2 columnas y el total son 12-->
                        <div class="card m-2">
                            <img src="{{asset('images/sushi4.jpg')}}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">sushiprimero</h5>
                                <div class="btn-group d-flex">
                                    <button class="btn btn-outline-success">comprar</button>
                                    <button type="button" class="btn btn-primary" id="liveToastBtn">Anadir al
                                        carrito</button>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 col-xl-2">
                        <!--cuando este en xs habra 1 imagen porque ocuparan espacio 12  cuando esten en medio se venaran 2 card por vista ya que usaran 6 columnas por imagen y el total son 12, cuando este en la vista lg se venaran 3 ya que cada card ocupa 4 columnas y en la ultima vista la xl se veran 6 cards en pantalla yaque cada card usara 2 columnas y el total son 12-->
                        <div class="card m-2">
                            <img src="{{asset('images/sushi1.jpg')}}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">sushiprimero</h5>
                                <div class="btn-group d-flex">
                                    <button class="btn btn-outline-success">comprar</button>
                                    <button type="button" class="btn btn-primary" id="liveToastBtn">Anadir al
                                        carrito</button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-2">
                        <!--cuando este en xs habra 1 imagen porque ocuparan espacio 12  cuando esten en medio se venaran 2 card por vista ya que usaran 6 columnas por imagen y el total son 12, cuando este en la vista lg se venaran 3 ya que cada card ocupa 4 columnas y en la ultima vista la xl se veran 6 cards en pantalla yaque cada card usara 2 columnas y el total son 12-->
                        <div class="card m-2">
                            <img src="{{asset('images/sushi2.jpg')}}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">sushiprimero</h5>
                                <div class="btn-group d-flex">
                                    <button class="btn btn-outline-success">comprar</button>
                                    <button type="button" class="btn btn-primary" id="liveToastBtn">Anadir al
                                        carrito</button>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 col-xl-2">
                        <!--cuando este en xs habra 1 imagen porque ocuparan espacio 12  cuando esten en medio se venaran 2 card por vista ya que usaran 6 columnas por imagen y el total son 12, cuando este en la vista lg se venaran 3 ya que cada card ocupa 4 columnas y en la ultima vista la xl se veran 6 cards en pantalla yaque cada card usara 2 columnas y el total son 12-->
                        <div class="card m-2">
                            <img src="{{asset('images/sushi3.jpg')}}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">sushiprimero</h5>
                                <div class="btn-group d-flex">
                                    <button class="btn btn-outline-success">comprar</button>
                                    <button type="button" class="btn btn-primary" id="liveToastBtn">Anadir al
                                        carrito</button>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 col-xl-2">
                        <!--cuando este en xs habra 1 imagen porque ocuparan espacio 12  cuando esten en medio se venaran 2 card por vista ya que usaran 6 columnas por imagen y el total son 12, cuando este en la vista lg se venaran 3 ya que cada card ocupa 4 columnas y en la ultima vista la xl se veran 6 cards en pantalla yaque cada card usara 2 columnas y el total son 12-->
                        <div class="card m-2">
                            <img src="{{asset('images/sushi4.jpg')}}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">sushiprimero</h5>
                                <div class="btn-group d-flex">
                                    <button class="btn btn-outline-success">comprar</button>
                                    <button type="button" class="btn btn-primary" id="liveToastBtn">Anadir al
                                        carrito</button>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 col-xl-2">
                        <!--cuando este en xs habra 1 imagen porque ocuparan espacio 12  cuando esten en medio se venaran 2 card por vista ya que usaran 6 columnas por imagen y el total son 12, cuando este en la vista lg se venaran 3 ya que cada card ocupa 4 columnas y en la ultima vista la xl se veran 6 cards en pantalla yaque cada card usara 2 columnas y el total son 12-->
                        <div class="card m-2">
                            <img src="{{asset('images/sushi1.jpg')}}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">sushiprimero</h5>
                                <div class="btn-group d-flex">
                                    <button class="btn btn-outline-success">comprar</button>
                                    <button type="button" class="btn btn-primary" id="liveToastBtn">Anadir al
                                        carrito</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <script>
            var toastTrigger = document.getElementById('liveToastBtn')
            var toastLiveExample = document.getElementById('liveToast')
            if (toastTrigger) {
                toastTrigger.addEventListener('click', function () {
                    var toast = new bootstrap.Toast(toastLiveExample)

                    toast.show()
                })
            }
        </script>


    </main>



    @endsection

    @section('Script')
    <script src="js/Show.js {{asset('js/Show.js')}}"></script>
    <script src="https://kit.fontawesome.com/11614eb144.js" crossorigin="anonymous"></script>
    @endsection



