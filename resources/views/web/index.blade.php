@extends('layouts.app')

@section('content')
<style type="">
    .images-bg{
            background-image: url({{asset('assets/banner-kt.png')}});
            display: block;    
    }
    .images2{
        background-image: url({{asset('assets/banner2b.png')}});
        display: block;  
    }
    .text-c{
        color: #0B2239;
        
    }
    
    @media(max-width: 768px)
    {
        .images-bg{
            background-image: url({{asset('assets/banner-kt-movil.jpg')}});
            display: block;    
    }
    .images-2-movil{
         background-image: url({{asset('assets/banner-kt-2-movil.jpg')}});
        display: block;  
    }
    .text-c{
        color: #009636 !important;
    }
    }
    
    

    
</style>

    <!-- ==========Banner Section Start Here========== -->
    <div class="banner banner--three">
        <div class="banner__slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="banner__item bg-img images-bg " 

                    >
                        <div class="container">
                            <div class="row">
                                <div class="offset-xl-6 col-xl-6 col-md-8 col-12">
                                    <div class="banner__content">
                                        <h5 class="text-c">#1 en perú</h5>
                                        <h2 style="color:#f4f4f4">Empresa líder de Software para Casa de Apuestas Deportivas en Perú</h2>
                                        <div class="lab_btn_group">
                                            <a href="#" class="lab-btn">Explora Más<i class="fa-solid fa-arrow-right"></i></a>
                                            <a href="#" class="lab-btn bg-title">Ponerse en Contacto <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="banner__item bg-img images2 images-2-movil" >
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-6 col-md-8 col-12">
                                    <div class="banner__content text-center">
                                        <h5 class="text-c">#1 en perú</h5>
                                        <h2 style="color:#f4f4f4">Empresa líder de Software para Casa de Apuestas Deportivas en Perú</h2>
                                        <div class="lab_btn_group">
                                            <a href="{{url('/nosotros')}}" class="lab-btn">Explora Más <i class="fa-solid fa-arrow-right"></i></a>
                                            <a href="{{url('/contacto')}}" class="lab-btn bg-title">Ponerse en Contacto <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="banner__pagination"></div>
        </div>
    </div>
    <!-- ==========Banner Section Ends Here========== -->
    
    <!-- ==========Feature Section Start Here========== -->
    <div class="feature feature--three padding-tb">
        <div class="container">
            <div class="row justify-content-center align-items-center g-4">
                <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                    <div class="feature__item text-center">
                        <div class="feature__thumb">
                            <img src="assets/copa-o.png" alt="rajib raj" width="90px">
                        </div>
                        <div class="feature__content">
                            <h5><a href="#">Apuestas Deportivas</a></h5>
                            <p>Combinamos el diseño interactivo del interfaz con integraciones modernas que permitirá a sus clientes vivir una experiencia única.</p>
                            <a href="#" class="text-btn">Ponerse en contacto <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                    <div class="feature__item text-center">
                        <div class="feature__thumb">
                            <img src="assets/bingo-o.png" alt="rajib raj" width="90px">
                        </div>
                        <div class="feature__content">
                            <h5><a href="#">Bingo en Vivo</a></h5>
                            <p>Aperturar una máquina de VLT es un complemento altamente atractivo para ofrecer a los jugadores. Aumenta la rentabilidad de tu negocio con nuestros sistemas de Videolotería.</p>
                            <a href="#" class="text-btn">Ponerse en contacto <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                    <div class="feature__item text-center">
                        <div class="feature__thumb">
                            <img src="assets/juegos-o.png" alt="rajib raj" width="90px">
                        </div>
                        <div class="feature__content">
                            <h5><a href="#">Juegos Virtuales</a></h5>
                            <p>El software de deportes virtuales ampliará las capacidades de su tienda de apuestas. Con una gama de juegos en alta resolución como Caballos, Football, Ruleta y más.</p>
                            <a href="#" class="text-btn">Ponerse en contacto <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5 wow fadeInUp" data-wow-delay=".5s">
                <p>Inicia tu propio negocio de apuestas con nosotros. <a href="https://wa.me/51983446479" target="_blank" class="theme-color" style="font-size: 20px"><b>¡Comunicate con nuestros asesores!</b></a></p>
            </div>
        </div>
    </div>
    <!-- ==========Feature Section Ends Here========== -->
    
    <style type="">
        .bg-quienes{
            background-image: url(assets/textura-fondo-2.png); 
      
            display: block;
        }
        @media(max-width: 768px)
        {
                .bg-quienes{
            background-image:none; 
           
            display: block;
        }
        }

    </style>
    <!-- ==========About Section Start Here========== -->
    <div class="about about--two padding-tb bg-img pt-0 bg-quienes">
        <div class="container">
            <div class="row justify-content-center align-items-end g-4">
                <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                    <div class="about__thumb pe-lg-4">
                        <div class="row g-4">
                            <div class="col-12">
                            	<style type="text/css">
                            		.about--two .abs__thumb img {
										    width: 250px;
										}                        
									</style>
                                <div class="about__img about__img--thumb">
                                    <img src="{{asset('assets/quienes-somos-a.png')}}" alt="rajib raj">
                                    <div class="abs__thumb">
                                        <!-- <img src="assets/D6.png" alt="rajib raj" style=""> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                    <div class="about__content">
                        <h5 style="color: #009636">+ 5 años de experiencia</h5>
                        <h2>¿Quiénes somos?</h2>
                        
                        <p>En nuestra trayectoria en el mercado nos hemos convertido en una de las Empresas de Software de Apuestas que más ha apoyado e impulsado a cientos de emprendedores a montar su propia casa de apuestas deportivas en todo el Perú. Trabajando siempre con las mejores tecnologías y ofreciendo asesoramiento profesional a todos nuestros clientes.</p>

						<p>Estamos comprometidos con el crecimiento de nuestros socios y clientes. Te acompañamos y apoyamos en todas las fases, desde la planificación, construcción e impulso y crecimiento de tu propio local de apuestas.</p>

						<p>¡No esperes más, conviértete en nuestro socio y comienza a ganar con un negocio rentable!</p>
                        
                        <div class="lab_btn_group">
                            <a href="{{url('/contacto')}}" class="lab-btn">Contáctanos<i class="fa-solid fa-arrow-right"></i></a>
                            <a href="{{url('/nosotros')}}" class="lab-btn bg-title">Ver más <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========About Section Ends Here========== -->
    
    <!-- ==========Service Section Start Here========== -->
    <div class="service service--two padding-tb bg-img" style="background-image: url(assets/images/bg/06.jpg);">
        <div class="container">
            <div class="section__header text-center wow fadeInUp" data-wow-delay=".5s">
                <h5 style="color: #009636">Productos</h5>
                <h2>Apuestas Deportivas</h2>
            </div>
            <div class="section__wrapper wow fadeInUp" data-wow-delay=".5s">
                <div class="service__slider overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="service__item">
                                <div class="service__front text-center">
                                    <div class="service__icon">
                                        <img src="assets/tinbet.png" alt="rajib raj">
                                    </div>
                                    <div class="service__content">
                                        <h5><a href="{{url('/tinbet')}}">Tinbet</a></h5>
                                        <p>Nuestra tecnología desarrollada para la terminal combina
                                    una interfaz atractiva y moderna, fácil de usar y grandes probabilidades en tiempo
                                    real hasta el último segundo. Los usuarios pueden seleccionar cualquier apuesta en
                                    segundos y hacer su jugada de forma sencilla.</p>
                                    </div>
                                </div>
                                <div class="service__back">
                                    <img src="{{asset('assets/imagen-transparent.png')}}" alt="rajib raj">
                                    <a href="#" class="lab-btn">Ver más<i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service__item">
                                <div class="service__front text-center">
                                    <div class="service__icon">
                                        <img src="assets/betgana.png" alt="rajib raj">
                                    </div>
                                    <div class="service__content">
                                        <h5><a href="{{url('/betgana')}}">BetGana</a></h5>
                                        <p>La potente terminal de Betgana integra un sistema
                                    multilenguaje, una amplia gama de eventos deportivos, estadísticas en tiempo real,
                                    además presenta una interfaz atractiva que logrará causar una experiencia de usuario
                                    amigable. </p>
                                    </div>
                                </div>
                                <div class="service__back">
                                    <img src="{{asset('assets/imagen-transparent.png')}}" alt="rajib raj">
                                    <a href="#" class="lab-btn">Ver más <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service__item">
                                <div class="service__front text-center">
                                    <div class="service__icon">
                                        <img src="assets/bet-gana-race.png" alt="rajib raj">
                                    </div>
                                    <div class="service__content">
                                        <h5><a href="{{url('/betganarace')}}">Bet Gana Race</a></h5>
                                        <p>Nuestra plataforma esta diseñada para que puedas usarlo desde cualquier dispositivo, podrás hacer tus pronósticos, descargar la programación de carreras ,ver las jornadas, ver los resultados de todas las carreras y disfrutar de los videos en vivo haciendo tu apuesta.</p>
                                    </div>
                                </div>
                                <div class="service__back">
                                    <img src="{{asset('assets/imagen-transparent.png')}}" alt="rajib raj">
                                    <a href="#" class="lab-btn">Ver más <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    <div class="text-center mt-5">
                        <div class="service__pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Service Section Ends Here========== -->
    
    <!-- ==========Counter Section Ends Here========== -->
    <div class="counter">
        <div class="container">
            <div class="counter__area">
                <div class="row justify-content-center g-0">
                   <!--  <div class="col-lg-3 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="counter__item">
                            <div class="counter__count">
                                <h2 class="odometer" data-odometer-final="10000">0</h2>
                            </div>
                            <div class="counter__title">
                                <h6><b>Clientes Felices</b></h6>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-lg-4 col-lg-offset-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="counter__item">
                            <div class="counter__count">
                                <h2 class="odometer" data-odometer-final="+1500">0</h2>
                            </div>
                            <div class="counter__title">
                                <h6><b>Tiendas</b></h6>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-3 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="counter__item">
                            <div class="counter__count">
                                <h2 class="odometer" data-odometer-final="200">0</h2>
                            </div>
                            <div class="counter__title">
                                <h6><b>Partners</b></h6>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-lg-3 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="counter__item">
                            <div class="counter__count">
                                <h2 class="odometer" data-odometer-final="59">0</h2>
                            </div>
                            <div class="counter__title">
                                <h6><b>Campañas Exitosa</b></h6>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Counter Section Ends Here========== -->
    <style type="text/css">
        .textj:hover{
            color: #0B2239

        }
    </style>
    
    <!-- ==========Project Section Start Here========== -->
    <div class="project padding-tb">
        <div class="container">
            <div class="section__header text-center wow fadeInUp" data-wow-delay=".5s">
                <h5 style="color: #009636">Diseños Render</h5>
                <h2>FRANQUICIAS</h2>
            </div>
            <div class="section__wrapper">
                <ul class="filters-button-group d-flex flex-wrap justify-content-center wow fadeInUp" data-wow-delay=".5s">
                    <li class="filter-btn is-checked textj" data-filter="*">Ver todos</li>
                    <li class="filter-btn" data-filter=".financial" style="color:#0B2239">Tinbet</li>
                    <li class="filter-btn" data-filter=".analyzing" style="color: #0B2239">BetGana</li>
                </ul>
                <div class="project__grid grid">
                    <div class="row justify-content-center g-4">
                        <div class="col-lg-4 col-sm-6 col-12 financial wow fadeInUp" data-wow-delay=".5s">
                            <div class="project__item">
                                <div class="project__thumb">
                                    <img src="assets/render1.jpg" alt="rajib raj">
                                </div>
                                <div class="project__content">
                                    <h5 style="color: #009636">Vista Isométrica 1</h5>
                                    <span>Render Interior</span>
                                    <!-- <a href="#" class="project__icon">
                                        <i class="fa-solid fa-eye"></i>
                                    </a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12 analyzing marketing wow fadeInUp" data-wow-delay=".5s">
                            <div class="project__item">
                                <div class="project__thumb">
                                    <img src="assets/render2.jpg" alt="rajib raj">
                                </div>
                                <div class="project__content">
                                    <h5 style="color: #009636">Vista Isométrica 2</h5>
                                    <span>Diseños Interiores</span>
                                    <!-- <a href="#" class="project__icon">
                                        <i class="fa-solid fa-eye"></i>
                                    </a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12 marketing business wow fadeInUp" data-wow-delay=".5s">
                            <div class="project__item">
                                <div class="project__thumb">
                                    <img src="assets/render3.jpg" alt="rajib raj">
                                </div>
                                <div class="project__content">
                                    <h5 style="color: #009636">Vista Interior de Zona de Apuestas</h5>
                                    <span>Render Interior</span>
                                    <!-- <a href="#" class="project__icon">
                                        <i class="fa-solid fa-eye"></i>
                                    </a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12 analyzing wow fadeInUp" data-wow-delay=".5s">
                            <div class="project__item">
                                <div class="project__thumb">
                                    <img src="assets/render4.jpg" alt="rajib raj">
                                </div>
                                <div class="project__content">
                                    <h5 style="color: #009636">Vista Interior de Zona de Apuestas 2</h5>
                                    <span>Render Interior</span>
                                    <!-- <a href="#" class="project__icon">
                                        <i class="fa-solid fa-eye"></i>
                                    </a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12 business wow fadeInUp" data-wow-delay=".5s">
                            <div class="project__item">
                                <div class="project__thumb">
                                    <img src="assets/render5.jpg" alt="rajib raj">
                                </div>
                                <div class="project__content">
                                    <h5 style="color: #009636">Vista Interior de Caja</h5>
                                    <span>Render Interior</span>
                                    <!-- <a href="#" class="project__icon">
                                        <i class="fa-solid fa-eye"></i>
                                    </a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12 financial wow fadeInUp" data-wow-delay=".5s">
                            <div class="project__item">
                                <div class="project__thumb">
                                    <img src="assets/render6.jpg" alt="rajib raj">
                                </div>
                                <div class="project__content">
                                    <h5 style="color: #009636">Vista Interior de Espectadores</h5>
                                    <span>Render Interior</span>
                                    <!-- <a href="assets/render6.jpg" class="project__icon">
                                        <i class="fa-solid fa-eye"></i>
                                    </a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5 wow fadeInUp" data-wow-delay=".5s">
                    <a href="{{url('/punto-de-apuestas')}}" class="lab-btn bg-title">Ver puntos de apuestas<i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Project Section Ends Here========== -->

    
    <!-- ==========Sponsor Section Start Here========== -->
  <!--   <div class="sponsor sponsor--one bg-img" style="background-image: url(assets/images/bg/07.jpg);">
        <div class="container">
            <div class="section__wrapper">
                <div class="sponsor__title text-center mb-4 mb-lg-5 wow fadeInUp" data-wow-delay=".5s">
                    <h5>Trusted by 1200+ popular companies and Individuals</h5>
                </div>
                <div class="sponsor__slider overflow-hidden wow fadeInUp" data-wow-delay=".5s">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="sponsor__item">
                                <div class="sponsor__thumb">
                                    <img src="assets/images/sponsor/01.jpg" alt="rajib raj">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor__item">
                                <div class="sponsor__thumb">
                                    <img src="assets/images/sponsor/02.jpg" alt="rajib raj">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor__item">
                                <div class="sponsor__thumb">
                                    <img src="assets/images/sponsor/03.jpg" alt="rajib raj">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor__item">
                                <div class="sponsor__thumb">
                                    <img src="assets/images/sponsor/04.jpg" alt="rajib raj">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor__item">
                                <div class="sponsor__thumb">
                                    <img src="assets/images/sponsor/05.jpg" alt="rajib raj">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor__item">
                                <div class="sponsor__thumb">
                                    <img src="assets/images/sponsor/06.jpg" alt="rajib raj">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- ==========Sponsor Section Ends Here========== -->

    
    <!-- ==========Testimonial Section Start Here========== -->
    <!-- <div class="testimonial testimonial--two padding-tb bg-img" style="background-image: url(assets/clientes-oficial.jpg);">
        <div class="container">
            <div class="section__header text-center wow fadeInUp" data-wow-delay=".5s">
                <h5>Clientes Felices</h5>
                <h2>Lo que dicen la gente sobre Kingtech</h2>
            </div>
            <div class="section__wrapper wow fadeInUp" data-wow-delay=".5s">
                <div class="testimonial__slider--two overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial__item">
                                <div class="testimonial__inner">
                                    <div class="testimonial__thumb">
                                        <img src="assets/friki.png" alt="rajib raj">
                                    </div>
                                    <div class="testimonial__content">
                                        <h5>Users</h5>
                                        <span>Tienda Hucaho</span>
                                        <div class="testimonial__content testimonial__content--rating">
                                            <ul>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <p>We are privleged to work with hundred of future thinking businesses including many the world top hardware software creative and brands.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial__item">
                                <div class="testimonial__inner">
                                    <div class="testimonial__thumb">
                                        <img src="assets/friki.png" alt="rajib raj">
                                    </div>
                                    <div class="testimonial__content">
                                        <h5>Users</h5>
                                        <span>Tienda Hucaho</span>
                                        <div class="testimonial__content testimonial__content--rating">
                                            <ul>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <p>We are privleged to work with hundred of future thinking businesses including many the world top hardware software creative and brands.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial__item">
                                <div class="testimonial__inner">
                                    <div class="testimonial__thumb">
                                        <img src="assets/friki.png" alt="rajib raj">
                                    </div>
                                    <div class="testimonial__content">
                                        <h5>Users</h5>
                                        <span>Tienda Hucaho</span>
                                        <div class="testimonial__content testimonial__content--rating">
                                            <ul>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <p>We are privleged to work with hundred of future thinking businesses including many the world top hardware software creative and brands.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial__pagination"></div>
                </div>
                
            </div>
        </div>
    </div> -->
    <!-- ==========Testimonial Section Ends Here========== -->

    
    <!-- ==========About Section Start Here========== -->
    <div class="about about--two padding-tb" style="background-image: url(assets/fondo-socios4.png);">
        <div class="container">
            <div class="row justify-content-center align-items-end g-4">
                <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                    <div class="about__thumb about__thumb--two pe-lg-4">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="about__img about__img--thumb">
                                    <img src="{{asset('assets/socios.png')}}" alt="rajib raj">
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                    <div class="about__content">
                     
                        <h2>Conviértete en nuestro socio y emprende en un negocio rentable</h2>
                        <p>	Los sistemas de apuestas son cada vez más populares y la tendencia sigue aumentando. Los eventos deportivos y máquinas de videolotería cada vez atraen más público.</p>

		<p>	Contamos con un sistema de administración con el cual tendrá acceso a toda la información sobre sus clientes y ganancias en tiempo real. Podrá ver su riesgo y el comportamiento de su negocio. Si desea un manejo personal en sus líneas de apuestas o limitar eventos para sus jugadores, lo podrá realizar por medio de nuestro sistema.</p>

		<p>	Si estás buscando un proveedor de software de Igaming y este considerando invertir en los negocios de apuestas no dudes en contactarnos, será un gusto poder ayudarte.software, and brands.</p>
                      
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========About Section Ends Here========== -->

    
    <!-- ==========Blog Section Start Here========== -->
    <div class="blog blog--one padding-tb bg-img" style="background-image: url(assets/images/bg/03.jpg);">
        <div class="container">
            <div class="section__header text-center wow fadeInUp" data-wow-delay=".5s">
               
                <h2>Como trabajamos...</h2>
                <p>	En <b>Sportbetperú</b> estamos comprometidos con nuestros socios, por lo que no estarás solo, te apoyamos en la planificación, construcción y crecimiento de tu negocio.</p>
            </div>
            <style type="text/css">
            	.blog__thumb a img{
            			width: 100px            	}
            </style>
            <div class="section__wrapper">
                <div class="row justify-content-center g-4">
                    <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="blog__item">
                            <div class="blog__thumb">
                                <a href="#">
                                	<img src="{{asset('assets/nos-reunimos-b.png')}}" alt="rajib raj" width="270px">
                                </a>
                            </div>
                            <div class="blog__content">
                                
                                <h5><a href="#">Nos reunimos</a></h5>
                                <p>Resuelve tus dudas desde el primer día. Nuestros asesores lo harán posible. ¡El primer contacto es importante!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="blog__item">
                            <div class="blog__thumb">
                                <a href="#"><img src="{{asset('assets/icono-te-impulsamos.png')}}" alt="rajib raj" width="270px"></a>
                            </div>
                            <div class="blog__content">
                                
                                <h5><a href="#">Te impulsamos</a></h5>
                                <p>Te apoyamos en cada fase de nuestra asociación. Desde la planificación hasta las operaciones en curso, no lo dejaremos solo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="blog__item">
                            <div class="blog__thumb">
                                <a href="#"><img src="{{asset('assets/icono-subiendo-escaleras.png')}}" alt="rajib raj" width="270px"></a>
                            </div>
                            <div class="blog__content">
                                
                                <h5><a href="#">Crecemos</a></h5>
                                <p>Nos importa tu crecimiento. Juntos lograremos alcanzar todas tus metas comerciales y garantizar tus ingresos.</p>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
    <!-- ==========Blog Section Ends Here========== -->
    <style>
        .alert-project{
            background:#20CA25;
            color:#fff;
        }

    </style>
<div class="row">
                @if (session('notification'))
                    <div class="alert alert-project">
                        <span >{{ session('notification') }}</span>
                    </div>
                @endif
    </div>
    
    <!-- ==========Contact Section Start Here========== -->
    <div class="contact padding-tb contact--one">
        <div class="container">
            <div class="section__header text-center wow fadeInUp" data-wow-delay=".5s">
                <h5 style="color: #009636">Consulta</h5>
                <h2>¿Tienes alguna pregunta? ¡Ponte en contacto!</h2>
            </div>
            <div class="section__wrapper wow fadeInUp" data-wow-delay=".5s">
                <form action="">
                     
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-6 col-12">
                            <input type="text" placeholder="Su Nombre" name="name" id="name">
                        </div>
                        <div class="col-md-6 col-12">
                            <input type="text" placeholder="Tu Correo Electrónico" name="email" id="email">
                        </div>
                         <div class="col-md-6 col-12">
                            <input type="text" placeholder="Tu Número" name="phone" id="phone">
                        </div>
                        <div class="col-md-6 col-12">
                            <input type="text" placeholder="¿Servicio Que Busca?" name="subject" id="subject">
                        </div>
                       
                        <div class="col-12">
                            <textarea name="content" id="content" rows="6" placeholder="Mensaje"></textarea>
                        </div>
                        <br>
                        <div class="campo pad-rpt">
                                <div id="respuesta"></div>
                        </div>  
                         
                        <br>
                        <div class="col-md-6 col-12">
                            <button type="submit" id="submit" class="lab-btn w-100 border-0">Enviar Mensaje a WhatsApp<i class="fa-solid fa-arrow-right"></i></button>
                           
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ==========Contact Section Ends Here========== -->



@endsection