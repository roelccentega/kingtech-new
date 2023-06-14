@extends('layouts.applanding')
@section('content')
 
  
 
    <!-- ==========Banner Section Start Here========== -->
    <div class="banner banner--four bg-img">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="banner__content wow fadeInUp" data-wow-delay=".5s">
                        <h5>Software de Apuestas Deportivas</h5>
                        <h2>
Betgana</h2>
                        <h5>El sistema de apuestas con la más completa gama de eventos deportivos, donde podrá verificar datos, historiales y estadísticas detalladas de sus eventos favoritos, además presenta un interfaz atractivo que logrará el potencial rendimiento.</h5>
                        <div class="lab_btn_group">
                            <a href="{{url('/nosotros')}}" class="lab-btn">Explorar más<i class="fa-solid fa-arrow-right"></i></a>
                            <a href="{{url('/contacto')}}" class="lab-btn bg-transparate">Ponerse en contacto <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- <div class="lab_btn_group lab_btn_group--two">
                        <div class="row g-4">
                            <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                <a href="#" class="lab-btn bg-transparate wow fadeInUp" data-wow-delay=".5s"><img src="assets/images/banner/icon/02.png" alt="rajib raj"> it consultancy <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                <a href="#" class="lab-btn bg-transparate wow fadeInUp" data-wow-delay=".5s"><img src="assets/images/banner/icon/03.png" alt="rajib raj"> cyber security <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                <a href="#" class="lab-btn bg-transparate wow fadeInUp" data-wow-delay=".5s"><img src="assets/images/banner/icon/04.png" alt="rajib raj"> development <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                <a href="#" class="lab-btn bg-transparate wow fadeInUp" data-wow-delay=".5s"><img src="assets/images/banner/icon/05.png" alt="rajib raj"> uI UX design <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div> -->
                    <div class="banner__quote d-none d-xl-block wow fadeInRight" data-wow-delay=".5s">
                        <h5>Somos el aliado que necesitas. <br> 
                        <b>¡El que sabe, sabe! </b></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Banner Section Ends Here========== -->

    
    <!-- ==========Sponsor Section Start Here========== -->
    <div class="sponsor sponsor--one">
        <div class="container">
            <div class="section__wrapper">
                <div class="sponsor__title text-center mb-4 mb-lg-5 wow fadeInUp" data-wow-delay=".5s">
                    <h5>Con más de 10 años de experiencia en el mercado y más de 1000 locales a nivel nacional</h5>
                </div>
                <div class="sponsor__slider overflow-hidden wow fadeInUp" data-wow-delay=".5s">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="sponsor__item">
                                <div class="sponsor__thumb">
                                    <img src="assets/bet_on_numbers_logo.png" alt="rajib raj">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor__item">
                                <div class="sponsor__thumb">
                                    <img src="assets/golden_balls_logo_transparent.png" alt="rajib raj">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor__item">
                                <div class="sponsor__thumb">
                                    <img src="assets/ez_dealer_roulette_eng_logo.png" alt="rajib raj">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor__item">
                                <div class="sponsor__thumb">
                                    <img src="assets/gold_vault_roulette_logo_eng_2023_06.png" alt="rajib raj">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor__item">
                                <div class="sponsor__thumb">
                                    <img src="assets/10_2018_speed_auto_roulette_logo.png" alt="rajib raj">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Sponsor Section Ends Here========== -->
 

        <!-- ==========Approach Section Start Here========== -->
    <div class="approach padding-tb bg-img" style="background-image: url(assets/images/bg/01.jpg);">
        <div class="container">
            <div class="section__header text-center">
                <h5>Tinbet - Software de Apuestas</h5>
                <h2>Características</h2>
                <p style="color: #fff">Sus clientes tendrán a disposición una excelente plataforma de apuestas en línea con el respaldo de un soporte profesional. </p>
            </div>
            <div class="section__wrapper">
                <div class="row justify-content-center align-items-center g-4">
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="approach__item text-center">
                            <div class="approach__icon">
                                <img src="assets/images/approach/icon/01.png" alt="rajib raj">
                            </div>
                            <div class="approach__content">
                              
                                <h5>
Resultados en vivo</h5>
                                <p>Los usuarios/jugadores pueden ver los resultados mientras hacen sus apuestas. Esto les ayuda a controlar las probabilidades y los porcentajes en tiempo real.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="approach__item text-center">
                            <div class="approach__icon">
                                <img src="assets/images/approach/icon/02.png" alt="rajib raj">
                            </div>
                            <div class="approach__content">
                           
                                <h5>
Gestión de riesgo</h5>
                                <p>Podrá ver su riesgo y el comportamiento de su negocio. Si desea un manejo personal en sus líneas de apuestas o limitar eventos para sus jugadores, lo podrá realizar por medio de nuestro sistema.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="approach__item text-center">
                            <div class="approach__icon">
                                <img src="assets/images/approach/icon/03.png" alt="rajib raj">
                            </div>
                            <div class="approach__content">
                               
                                <h5>
Variedad de eventos deportivos</h5>
                                <p>Tinbet ofrece numerosas apuestas previas al partido y hasta 10.000 partidos en vivo por mes para apostar</p>
                            </div>
                        </div>
                    </div>
                      <div class="col-lg-4 col-sm-6 col-12">
                        <div class="approach__item text-center">
                            <div class="approach__icon">
                                <img src="assets/images/approach/icon/03.png" alt="rajib raj">
                            </div>
                            <div class="approach__content">
                               
                                <h5>Las mejores cuotas del mercado</h5>
                                <p>Nuestras altas cuotas atraen una gran cantidad de jugadores a decidirse por Tinbet</p>
                            </div>
                        </div>
                    </div>
                      <div class="col-lg-4 col-sm-6 col-12">
                        <div class="approach__item text-center">
                            <div class="approach__icon">
                                <img src="assets/images/approach/icon/03.png" alt="rajib raj">
                            </div>
                            <div class="approach__content">
                               
                                <h5>Alto nivel de encriptación y seguridad</h5>
                                <p>Para un juego justo y una experiencia única nos aseguramos de que tengas una base robusta antifraude para la seguridad.</p>
                            </div>
                        </div>
                    </div>
                      <div class="col-lg-4 col-sm-6 col-12">
                        <div class="approach__item text-center">
                            <div class="approach__icon">
                                <img src="assets/images/approach/icon/03.png" alt="rajib raj">
                            </div>
                            <div class="approach__content">
                               
                                <h5>
Datos y estadísticas detalladas de las apuestas</h5>
                                <p>La plataforma de apuestas deportivas Tinbet ofrece probabilidades y análisis sobre deportes, jugadores y resultados.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Approach Section Ends Here========== -->
    
    <!-- ==========hr Section Start Here========== -->
    <div class="container">
        <hr class="m-0">
    </div>
    <!-- ==========hr Section Ends Here========== -->
<br>    <br>    <br>    <br>    <br>    
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