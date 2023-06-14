@extends('layouts.applanding')
@section('content')
    
    <!-- ==========Header Section Starts Here========== -->
    <header class="header header--one">
        <div class="header__top">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-12">
                        <div class="info">
                            <ul>
                                <li>
                                    <img src="assets/images/header/icon/01.png" alt="rajib raj" >
                                    <span> info@kingtech.pe</span>
                                </li>
                                <li>
                                    <img src="assets/images/header/icon/02.png" alt="rajib raj" >
                                    <span> Lunes-Viernes : 08:00 pm - 22:00 pm</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="social text-xl-end">
                            <ul>
                                <li>
                                    <img src="assets/images/header/icon/03.png" alt="rajib raj" >
                                    <span>Av. Gral. Antonio Alvarez de Arenales 2523, Lince 15046</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__bottom">
            <div class="container-fluid">
                <div class="area">
                    <div class="logo">
                        <a href="index.html"><img src="assets/kingtech.png" alt="logo"></a>
                    </div>
                    <div class="main-menu">
                        <div class="menu">
                         <ul>
                                <li>
                                    <a href="{{url('/')}}" class="active">Inicio</a>
                                    
                                </li>
                                <li>
                                    <a href="{{url('/nosotros')}}">Nosotros</a>
                                   
                                </li>
                                <li>
                                    <a href="{{url('/productos')}}">Productos</a>
                                    <ul>
                                
                                        <li>
                                            <a href="#0">Apuestas Deportivas</a>
                                            <ul>
                                                <li><a href="{{url('/tinbet')}}">Tinbet</a></li>
                                                <li><a href="{{url('/betgana')}}">Betgana</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#0">Videolotería</a>
                                            <ul>
                                                <!-- <li><a href="{{url('/video-loteria')}}">Máquinas de Video Lotería</a></li> -->
                                                <li><a href="{{url('/bingoxd')}}">Bingo XD</a></li>
                                                
                                            </ul>
                                        </li>
                                       
                                    </ul>
                                </li>
                               
                                <li>
                                    <a href="#0">Casa de Apuestas</a>
                                    <ul>
                                        <li><a href="{{url('/casa-de-apuestas')}}">Casas de Apuestas</a></li>
                                        <li><a href="{{url('/punto-de-apuestas')}}">Puntos de Apuestas</a></li>
                                
                                    </ul>
                                </li>
                             
                                <li><a href="{{url('/contacto')}}">Contacto</a></li>
                            </ul>
                            <div class="search_cart d-none d-xl-block">
                                <ul>
                                    <li class="search_icon" style="width: 88px">
                                        <img src="assets/llamada.png" alt="rajib raj">
                                    </li>
                                    <li class="cart_icon" style="width: 88px">
                                        <a href="cart.html"><img src="assets/facebook.png" alt="rajib raj" width="120px"></a>
                                    </li>
                                </ul>
                            </div>
                            <a href="contact.html" class="lab-btn">EScribenos vía WhatsApp <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                        <div class="header__bararea">
                            
                            <div class="header__bar d-xl-none">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="header__ellepsis d-xl-none">
                                <i class="fa-solid fa-circle-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ==========Header Section Ends Here========== -->

    
    <!-- ==========Banner Section Start Here========== -->
    <div class="banner banner--one">
        <div class="banner__social">
            <ul>
                <li><a href="#"><i class="fa-brands fa-facebook-f"></i> Facebook</a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i> Twitter</a></li>
                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i> Linkedin</a></li>
            </ul>
        </div>
        <div class="banner__area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-12">
                        <div class="banner__content wow fadeInUp" data-wow-delay=".5s">
                            <h5>Software De Apuestas Deportivas</h5>
                            <h2>Tinbet</h2>
                            <p style="color: #fff"> El Programa De Apuestas Deportivas Con La Interfaz Más Atractiva Y Moderna, Fácil De Usar Y Con Una Gran Variedad De Deportes Totalmente En Vivo Hasta El Último Segundo.</p>
                            <ul>
                                <li>
                                    <i class="fa-solid fa-house-user"></i>
                                    Optimo
                                </li>
                                <li>
                                    <i class="fa-solid fa-clock-rotate-left"></i>
                                    Optimo
                                </li>
                                <li>
                                    <i class="fa-solid fa-briefcase"></i>
                                    Optimo
                                </li>
                                <li>
                                    <i class="fa-solid fa-user-secret"></i>
                                    Optimo
                                </li>
                                <li>
                                    <i class="fa-solid fa-sack-dollar"></i>
                                    Optimo
                                </li>
                                <li>
                                    <i class="fa-solid fa-signal"></i>
                                    Optimo
                                </li>
                            </ul>
                            <div class="lab_btn_group">
                                <a href="about.html" class="lab-btn">Explorar más <i class="fa-solid fa-arrow-right"></i></a>
                                <a href="contact.html" class="lab-btn bg-transparate">Ponerse en contacto <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="banner__thumb">
                            <img src="assets/images/banner/01.png" alt="rajib raj" class=" wow slideInUp" data-wow-delay="1s">
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Banner Section Ends Here========== -->

    
    <!-- ==========Feature Section Start Here========== -->
    <div class="feature feature--one">
        <div class="container">
            <div class="feature__area">
                <div class="row justify-content-center align-items-center g-4">
                    <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="feature__item text-center">
                            <div class="feature__thumb">
                                <img src="assets/RESULTADOs-VIVO.png" alt="rajib raj" width="100px">
                            </div>
                            <div class="feature__content">
                                <h5>Resultados En Vivo</h5>
                                <p>Los usuarios/jugadores pueden ver los resultados mientras hacen sus apuestas. Esto les ayuda a controlar las probabilidades y los porcentajes en tiempo real.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="feature__item text-center">
                            <div class="feature__thumb">
                                <img src="assets/gestion-de-riesgos.png" alt="rajib raj" width="100px">
                            </div>
                            <div class="feature__content">
                                <h5>Gestión De Riesgo</h5>
                                <p>Podrá ver su riesgo y el comportamiento de su negocio. Si desea un manejo personal en sus líneas de apuestas o limitar eventos para sus jugadores, lo podrá realizar por medio de nuestro sistema.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="feature__item text-center">
                            <div class="feature__thumb">
                                <img src="assets/Variedad-De-Eventos-Deportivos.png" alt="rajib raj" width="100px">
                            </div>
                            <div class="feature__content">
                                <h5>Variedad De Eventos Deportivos</h5>
                                <p>Tinbet ofrece numerosas apuestas previas al partido y hasta 10.000 partidos en vivo por mes para apostar</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="feature__item text-center">
                            <div class="feature__thumb">
                                <img src="assets/ALTAS-CUOTAS.png" alt="rajib raj" width="100px">
                            </div>
                            <div class="feature__content">
                                <h5>Las Mejores Cuotas Del Mercado</h5>
                                <p>Nuestras altas cuotas atraen una gran cantidad de jugadores a decidirse por Tinbet</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="feature__item text-center">
                            <div class="feature__thumb">
                                <img src="assets/Alto-Nivel-De-Encriptación-Y-Seguridad.png" alt="rajib raj" width="100px">
                            </div>
                            <div class="feature__content">
                                <h5>Alto Nivel De Encriptación Y Seguridad</h5>
                                <p>Para un juego justo y una experiencia única nos aseguramos de que tengas una base robusta antifraude para la seguridad.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="feature__item text-center">
                            <div class="feature__thumb">
                                <img src="assets/Datos-Y-EstadísticasS.png" alt="rajib raj" width="100px">
                            </div>
                            <div class="feature__content">
                                <h5>Datos Y Estadísticas Detalladas De Las Apuestas</h5>
                                <p>La plataforma de apuestas deportivas Tinbet ofrece probabilidades y análisis sobre deportes, jugadores y resultados.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Feature Section Ends Here========== -->
<br>    <br>    <br>    <br>    
      <!-- ==========About Section Start Here========== -->
    <div class="about about--two padding-tb bg-img pt-0" >
        <div class="container">
            <div class="row justify-content-center align-items-end g-4">
                <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                    <div class="about__thumb pe-lg-4">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="about__img about__img--thumb">
                                  <!--   <img src="https://www.sportbetperu.com/img/frontend/tinbet/tinbet-peru.png" alt="rajib raj"> -->
                                    <div class="">
                                        <img src="assets/mapa-tinbet.png" alt="rajib raj">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                    <div class="about__content">
                        <!-- <h5> WE DO</h5> -->
                        <h2>¿Por qué elegirnos?</h2>
                   <!--      <p>We are privileged to work with hundreds of future-thinking businesses, including many of the world’s top hardware, an software, and brands.</p> -->
                        <ul>
                            <li>
                                <h5><i class="fa-solid fa-check"></i> +5 años de Experiencia en el Mercado</h5>
                                <p>Nos apasiona ofrecer el mejor producto de apuestas deportivas del mercado y siempre estamos a la vanguardia de la innovación mediante la implementación de las ultimas tecnologías que brinden la mejor experiencia al usuario</p>
                            </li>
                            <li>
                                <h5><i class="fa-solid fa-check"></i> Software Amigable y Fácil de usar</h5>
                                <p>Combina una interfaz atractiva y moderna, fácil de usar. Los usuarios pueden seleccionar cualquier apuesta en segundos y hacer su jugada de forma sencilla.</p>
                            </li>
                            <li>
                                <h5><i class="fa-solid fa-check"></i> Constante expansión y aceptación de la comunidad</h5>
                                <p>Más de 400 casas y puntos de apuestas Tinbet en todo el Perú y gran cantidad de jugadores que eligen la experiencia de jugar con nuestra plataforma.</p>
                            </li>
                        </ul>
                     <!--    <div class="lab_btn_group">
                            <a href="about.html" class="lab-btn">explore now <i class="fa-solid fa-arrow-right"></i></a>
                            <a href="contact.html" class="lab-btn bg-title">get in touch <i class="fa-solid fa-arrow-right"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========About Section Ends Here========== -->


    <!-- ==========Approach Section Start Here========== -->
    <div class="approach approach--two padding-tb bg-img" style="background-image: url(assets/images/bg/10.jpg);">
        <div class="container">
        
            <div class="section__wrapper">
                <div class="row justify-content-center g-4">
                    <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                    <div class="about__content">
                        <br>    <br>    <br>    <br>    
                     <h5>CRECE CON NOSOTROS</h5>
                        <h2>Conviértete en nuestro socio y emprende en un negocio rentable</h2>
                        <p> Los sistemas de apuestas son cada vez más populares y la tendencia sigue aumentando. Los eventos deportivos y máquinas de videolotería cada vez atraen más público.</p>

        <p> Contamos con un sistema de administración con el cual tendrá acceso a toda la información sobre sus clientes y ganancias en tiempo real. Podrá ver su riesgo y el comportamiento de su negocio. Si desea un manejo personal en sus líneas de apuestas o limitar eventos para sus jugadores, lo podrá realizar por medio de nuestro sistema.</p>

        <p> Si estás buscando un proveedor de software de Igaming y este considerando invertir en los negocios de apuestas no dudes en contactarnos, será un gusto poder ayudarte.software, and brands.</p>
                      
                      
                    </div>
                </div>
                     <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                    <div class="about__thumb about__thumb--two pe-lg-4">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="about__img about__img--thumb">
                                    <img src="https://www.sportbetperu.com/img/frontend/empresa-sportbetperu-2.png" alt="rajib raj">
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Approach Section Ends Here========== -->
     <!-- ==========Consultancy Section Start Here========== -->
    <div class="consultancy padding-tb bg-img" style="background-image: url(assets/images/consultancy/bg/bg.jpg);">
        <div class="container">
            <div class="row justify-content-center align-items-center g-4">
                <div class="offset-lg-6 col-lg-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                    <div class="consultancy__contact">
                        <h2>¿Tiene alguna pregunta? ¡Pongase en contacto!</h2>
                        <p> Elija el medio de contacto de su preferencia, nuestro equipo de atención al cliente le responderé lo más pronto posible.</p>
                        <form action="#">
                            <div class="row g-3">
                                <div class="col-sm-6 col-12">
                                    <input type="text" placeholder="Nombre*" name="name" id="name">
                                </div>
                                <div class="col-sm-6 col-12">
                                    <input type="text" placeholder="Empresa*" name="company" id="company">
                                </div>
                                <div class="col-sm-6 col-12">
                                    <input type="text" placeholder="Correo*" name="email" id="email">
                                </div>
                                <div class="col-sm-6 col-12">
                                    <input type="text" placeholder="Asunto*" name="subject" id="subject">
                                </div>
                                <div class="col-12">
                                    <textarea name="massage" id="massage"  rows="5" placeholder="Mensaje"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="lab-btn">Enviar <i class="fa-solid fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Consultancy Section Ends Here========== -->


@endsection