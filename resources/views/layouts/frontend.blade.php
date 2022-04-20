<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        

        <title>Laika</title>

        <!-- Favicon -->
        <link href="assets/img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="assets/lib/slick/slick.css" rel="stylesheet">
        <link href="assets/lib/slick/slick-theme.css" rel="stylesheet">

        <script src="{{ asset('css/app.css') }}" defer></script>
        

        <!-- Template Stylesheet -->
        <link href="assets/css/style.css" rel="stylesheet">

        @yield('styles')
    </head>

    

    <body>
        <div id="app">
            
            <!-- Top bar Start -->
            <div class="top-bar">
                <div class="container-fluid">
                    <div class="row top-bar">
                        <div class="col-sm-7">
                            <span class="info_top-bar"><img class="img_top-bar" src="assets/img/Compra-segura-icono.png">Compras seguras online </span>
                            <span class="info_top-bar"><img class="img_top-bar" src="assets/img/Pago-Contra-Entrega-Icono.png">Pago contra entrega </span>
                            <span class="info_top-bar"><img class="img_top-bar" src="assets/img/entrega-rapida-icono.png">Entregas el mismo día </span>
                        </div>
                        <div class="col-sm-5">
                            <span class="call_top-bar">Llámanos <img class="img_top-bar" src="assets/img/Telefono-icono.png"></span>
                            <span class="number_top-bar">3009108496</span>
                            <span class="subscription_top-bar">Escríbenos</span>
                            <a href="https://www.youtube.com/channel/UC_Syn3ptKsOheb1Yz2MzGgA"><img class="img_top-bar" src="assets/img/Youtube-icono.png"></a>
                            <a href="https://www.instagram.com/laikamascotas/?hl=es-la"><img class="img_top-bar" src="assets/img/instagram-icono.png"></a>
                            <a href="https://www.facebook.com/Laikamascotascolombia/"><img class="img_top-bar" src="assets/img/facebook-icono.png"></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top bar End -->


            <!-- Bottom Bar Start -->
            <div class="bottom-bar">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-1">
                            <div class="logo">
                                <a href="/">
                                    <img src="https://laika.com.co/assets/Logo_Laika_500x500.png" alt="Logo">
                                </a>
                            </div> 
                        </div>
                        <div class="col-md-8">                               
                            <div class="search">
                                <input type="search" id="search" placeholder="Encuentra lo mejor para tu mascota" />
                                <button class="icon"><i class="fa fa-search"></i></button>
                            </div>  
                            <div class="Col-city" >
                                <img class="img_Col" src="assets/img/Bandera-Colombia.png">
                                <select class="select_city" name="Ciudad">
                                    <option value="BOG">Bogotá</option>
                                    <option value="CAL">Cali</option>
                                    <option value="BUC">Bucaramanga</option>
                                    <option value="bAR">Barranquilla</option>
                                    <option value="CAR">Cartagena</option>
                                    <option value="SAN">Santa Marta</option>
                                    <option value="CIE">Ciénaga</option>
                                    <option value="PER">Pereira</option>
                                    <option value="CAJ">Cajicá</option>
                                    <option value="SOA">Soacha</option>
                                    <option value="TOC">Tocancipá</option>
                                    <option value="ARM">Armenia</option>
                                    <option value="MAN">Manizales</option>
                                    <option value="ZIP">Zipaquirá</option>
                                    <option value="SOP">Sopó</option>
                                    <option value="CHI">Chia</option>
                                    <option value="ENV">Envigado</option>
                                    <option value="SAB">Sabaneta</option>
                                    <option value="MED">Medellín</option>
                                    <option value="SAN">San Antonio de prado</option>
                                    <option value="BEL">Bello</option>
                                    <option value="CAL">Caldas</option>
                                    <option value="ITA">Itagüí</option>
                                    <option value="LAC">La Ceja</option>
                                    <option value="RIO">Ríonegro</option>
                                    <option value="LAE">La Estrella</option>
                                    <option value="GUA">Guarne</option>
                                    <option value="BRI">Briceño</option>
                                    <option value="COP">Copacabana</option>
                                    <option value="ELR">El retiro</option>
                                    <option value="ELC">El carmen de viboral</option>
                                    <option value="OTRA">Otra ciudad</option>
                                </select>
                            </div>
                        </div>                      
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-sm-8">
                                    @if (Route::has('login'))
                                        @auth
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle UserName" href="/" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                            

                                        @else
                                            <div class="nav-item dropdown">
                                                <div class="account">   
                                                    <span class="nav-link dropdown-toggle" data-toggle="dropdown"><img class="img_account" src="assets/img/User-icon.png">Mi cuenta</span>
                                                    <div class="dropdown-menu" >
                                                        <!-- ------------------Modal------------ -->
                                                        <li type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal-Login">Iniciar sesión</li>
                                                        <li>¿Eres nuevo cliene?</li>
                                                        
                                                        @if (Route::has('register'))
                                                        
                                                            <li type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal-Registrarse">Crear cuenta</li>
                                                        
                                                        @endif
                                                        
                                                    </div>
                                                </div>
                                            </div>                            
                                        @endauth
                                    @endif
                                
                                </div>                      
                            
                                <div class="col-sm-3">
                                    <div class="cart">
                                        <cart/>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Bottom Bar End -->


            <!-- Nav Bar Start -->
            <nav class="menu">
                <section class="menu_container">
                    <ul class="menu_links">
                        <li class="menu_item menu_item-show">
                            <a href="/" class="menu_link"><img class="img-nav" src="assets/img/perro.jpg">Compra para perro 
                                <i class="fa fa-angle-down menu_arrow"></i>
                            </a>
                            <ul id="CambiarCSSul" class="menu_niv2">
                                <li id="CambiarCSSli" class="menu_inside menu_item menu_item-show"><a href="" class="menu_link menu_link_inside">Alimento</a>
                                    <ul class="menu_niv3 ">
                                        <li class="menu_inside"><a href="/" class="menu_link menu_link_inside2">Concentrado</a></li>
                                        <li class="menu_inside"><a href="/" class="menu_link menu_link_inside2">Humedo</a></li>
                                        <li class="menu_inside"><a href="/" class="menu_link menu_link_inside2">Dietas naturales</a></li>
                                    </ul>
                                </li>
                                <li id="CambiarCSSli" class="menu_inside menu_item menu_item-show"><a href="" class="menu_link menu_link_inside">Snacks</a>
                                    <ul class="menu_niv3 ">
                                        <li class="menu_inside"><a href="/" class="menu_link menu_link_inside2">Brownies y otros</a></li>
                                        <li class="menu_inside"><a href="/" class="menu_link menu_link_inside2">Tortas de celebración</a></li>
                                        <li class="menu_inside"><a href="/" class="menu_link menu_link_inside2">Huesos y Carnaza</a></li>
                                        <li class="menu_inside"><a href="/" class="menu_link menu_link_inside2">Galletas y Snacks</a></li>
                                    </ul>
                                </li>
                                <li class="menu_inside"><a href="/" class="menu_link menu_link_inside">Farmapet</a></li>
                                <li class="menu_inside"><a href="/" class="menu_link menu_link_inside">Cuidado e Higiene</a></li>
                                <li class="menu_inside"><a href="/" class="menu_link menu_link_inside">Juguetes</a></li>
                                <li class="menu_inside"><a href="/" class="menu_link menu_link_inside">Accesorios</a></li>
                                <li class="menu_inside"><a href="/" class="menu_link menu_link_inside">Para PetLovers</a></li>
                            </ul>

                        </li>
                        <li class="menu_item menu_item-show">
                            <a href="/" class="menu_link"><img class="img-nav" src="assets/img/gato.jpg">Compra para gato 
                                <i class="fa fa-angle-down menu_arrow"></i>
                            </a>
                            <ul id="CambiarCSSul" class="menu_niv2">
                                <li id="CambiarCSSli" class="menu_inside menu_item menu_item-show"><a href="" class="menu_link menu_link_inside">Alimento</a>
                                    <ul class="menu_niv3 ">
                                        <li class="menu_inside"><a href="/" class="menu_link menu_link_inside2">Concentrado</a></li>
                                        <li class="menu_inside"><a href="/" class="menu_link menu_link_inside2">Humedo</a></li>
                                        <li class="menu_inside"><a href="/" class="menu_link menu_link_inside2">Dietas naturales</a></li>
                                    </ul>
                                </li>
                                <li id="CambiarCSSli" class="menu_inside menu_item menu_item-show"><a href="" class="menu_link menu_link_inside">Snacks</a>
                                    <ul class="menu_niv3 ">
                                        <li class="menu_inside"><a href="/" class="menu_link menu_link_inside2">Brownies y otros</a></li>
                                        <li class="menu_inside"><a href="/" class="menu_link menu_link_inside2">Tortas de celebración</a></li>
                                        <li class="menu_inside"><a href="/" class="menu_link menu_link_inside2">Huesos y Carnaza</a></li>
                                        <li class="menu_inside"><a href="/" class="menu_link menu_link_inside2">Galletas y Snacks</a></li>
                                    </ul>
                                </li>
                                <li class="menu_inside"><a href="/" class="menu_link menu_link_inside">Farmapet</a></li>
                                <li class="menu_inside"><a href="/" class="menu_link menu_link_inside">Cuidado e Higiene</a></li>
                                <li class="menu_inside"><a href="/" class="menu_link menu_link_inside">Juguetes</a></li>
                                <li class="menu_inside"><a href="/" class="menu_link menu_link_inside">Accesorios</a></li>
                                <li class="menu_inside"><a href="/" class="menu_link menu_link_inside">Para PetLovers</a></li>
                            </ul>

                        </li>
                        
                        <li class="menu_item"><a href="/" class="menu_link">Ofertas</a></li>
                        <li class="menu_item"><a href="/" class="menu_link">Servicios</a></li>
                        <li class="menu_item"><a href="/" class="menu_link">Blog</a></li>
                    </ul>
                    <div class="menu_hamburguer"><i class="fa fa-bars menu_img" ></i></div>
                </section>
                <div class="LaikaMembers-menu"><img src="assets/img/Laika_member.png"> <div ><button >ADQUIÉRELA YA</button></div>
            </nav>
            <!-- Nav Bar End --> 


            <!----------------------------------------------------------------------------------------------------->
            @yield('content')
            <!----------------------------------------------------------------------------------------------------->

            


            
                


























                




               

            <!------------------------------------------------------------------------------------------------------------------->




           

            <!------------------------------------------------------------------------------------------------------------------->

            <!-- Footer Start --> 
            <div class="footer">
                <div class="row m-auto justify-content-center">
                    <div class="col-md-4 col-lg-2 mt-5 text-center  log-social-media" >
                        <img src="assets/img/Logo-Laika-color.png" alt="Laika" class="footer-logo">
                        <div class="social-media">
                            <h3 class="title-info">Síguenos en:</h3>
                            <a href="https://www.youtube.com/channel/UC_Syn3ptKsOheb1Yz2MzGgA"><img src="assets/img/Youtube-icono-footer.png" alt="Youtube" class="footer-img-social-media" style="width: 26px;"></a>
                            <a href="https://www.instagram.com/laikamascotas/?hl=es-la"><img src="assets/img/instagram-icono-footer.png" alt="Instagram" class="footer-img-social-media"></a>
                            <a href="https://www.facebook.com/Laikamascotascolombia/"><img src="assets/img/facebook-icono-footer.png" alt="Facebook" class="footer-img-social-media"></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-2 mt-5 text-center dropdown">
                        <h2 class="title-info dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ACERCA DE LAIKA</h2>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a href="/" class="footer-info dropdown-item">Sobre Laika</a>
                            <a href="/" class="footer-info dropdown-item">Servicios</a>
                            <a href="/" class="footer-info dropdown-item">Trabaja con nosotros</a>
                            <a href="/" class="footer-info dropdown-item">Blog</a>
                            <a href="/" class="footer-info dropdown-item">Términos y condiciones</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-2 mt-5 text-center dropdown">
                        <h2 class="title-info dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">LINKS DE INTERÉS</h2>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a href="/" class="footer-info dropdown-item">¿Cómo comprar en Laika?</a>
                            <a href="/" class="footer-info dropdown-item">Política de privacidad</a>
                            <a href="/" class="footer-info dropdown-item">Trabaja con nosotros</a>
                            <a href="/" class="footer-info dropdown-item">Contáctenos</a>
                            <a href="/" class="footer-info dropdown-item">Políticas de entrega</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-2 mt-5 text-center dropdown">
                        <h2 class="title-info dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">INFORMACIÓN</h2>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <h3 class="footer-info dropdown-item">Teléfono: 3009108496</h3>
                            <h3 class="footer-info dropdown-item">servicioclientes@laika.com.co</h3>
                            <h3 class="footer-info dropdown-item">Bogotá D.C., Colombia</h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-2 mt-5 text-center">
                        <h2 class="title-info">SUBSCRÍBETE</h2>
                        <p class="footer-info">Recibe noticias y promociones al instante</p>

                        <div class="input-subscription">
                            <input type="email" placeholder="Correo electrónico" required="required">
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"  id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1"> He leído y acepto las políticas de privacidad.
                            </label>
                        </div>         
                    </div>
                </div>                
            </div>
            <!-- Footer End --> 


            <!-- Footer-Pay Start -->
            <div class="footer-pay">
                <div class="payment">
                    <img src="assets/img/mercado-pago.png" alt="Mercado-pago" class="img-pay">
                    <img src="assets/img/mastercard.png" alt="MasterCard" class="img-pay">
                    <img src="assets/img/visa.png" alt="Visa" class="img-pay">
                    <img src="assets/img/american-express.png" alt="Amex" class="img-pay">
                </div>
                <div class="store-app">
                    <img src="assets/img/App-Store.png" alt="App-Store" class="img-store-app">
                    <img src="assets/img/Google-play.png" alt="Google-Play" class="img-store-app">
                    <img src="assets/img/appGallery.png" alt="AppGalery" class="img-store-app">
                </div>
            </div>
            <!-- Footer Pay End --> 

        </div>
        
        

        <script src="{{ asset('js/app.js') }}"></script>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="assets/lib/easing/easing.min.js"></script>
        <script src="assets/lib/slick/slick.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="assets/js/main.js"></script>
        <script src="assets/js/app.js"></script>
        <!--@yield('scripts')-->
    </body>
</html>