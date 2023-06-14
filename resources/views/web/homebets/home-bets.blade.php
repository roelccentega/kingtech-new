@extends('layouts.app')
@section('content')
<style type="">
    .bg-breadcrumb{
        background-image: url(assets/inicio-header.png);
        display: block;
    }
     
    @media(max-width: 768px)
    {
     
     .bg-breadcrumb{
        background-image: url(assets/inicio-header2.jpg);
        display: block;
        }   
    }

</style>
<!-- ==========Banner Section Start Here========== -->
    <div class="pageheader padding-tb bg-img bg-breadcrumb" >
        <div class="container">
            <div class="pageheader__area text-center">
                <h2>Casa de apuestas</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page" style="color:#009636">Casa de apuestas</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- ==========Banner Section Ends Here========== -->



    <!-- ==========About Section Start Here========== -->
    <div class="about padding-tb">
        <div class="container">
            <div class="row justify-content-center align-items-center g-4">
                <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                    <div class="about__content">
                        <h5>¡Somos la marca con +1000 tiendas a nivel nacional!</h5>
                        <h2>Tu propia casa de apuestas</h2>
                        <p>Las apuestas deportivas son cada vez más populares y la tendencia sigue aumentando. Los eventos deportivos cada vez atraen más público.</p>

						<p>Aprovecha ahora tu oportunidad de ingresar profesionalmente en este mercado en crecimiento. SBP es el socio ideal para usted con su experiencia, tecnología y trayectoria.</p>

						<p>Si estás buscando un proveedor de software de Igaming y estas considerando invertir en los negocios de apuestas, no dudes en contactarnos, será un gusto poder ayudarte.</p>
                        
                        <div class="lab_btn_group">
                            <a href="https://wa.me/51913069000" target="_blank" class="lab-btn">Contactarnos vía WhatsApp<i class="fa-solid fa-arrow-right"></i></a>
                       
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="about__thumb">
                        <div class="row g-4">
                            <div class="col-12 wow fadeInUp" data-wow-delay=".5s">
                                <div class="about__img about__img--thumb">
                                    <img src="{{asset('assets/kingtch-d.png')}}" alt="rajib raj">
                                </div>
                            </div>
                            <div class="col-md-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                                <div class="about__img about__img--thumb">
                                    <img src="{{asset('assets/kngtech-2.png')}}" alt="rajib raj">
                                </div>
                            </div>
                            <div class="col-md-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                                <div class="about__img about__img--thumb">
                                    <img src="{{asset('assets/kngtech-3.png')}}" alt="rajib raj">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========About Section Ends Here========== -->
<style type="text/css">
	.about__content ul li {
     padding-block: 0px; 
	}
	.titlre {
     text-transform: none; 
     font-size: 17px;
     }
     
</style>

      <!-- ==========About Section Start Here========== -->
    <div class="about about--three padding-tb">
        <div class="container">
            <div class="row justify-content-center align-items-center flex-row-reverse g-4">
                <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                    <div class="about__content">
                        <!-- <h5>WHO WE ARE</h5> -->
                        <h2>Requerimientos</h2>
                        
                        <p>Con nuestra experiencia en la industria de las apuestas, sabemos que un espíritu emprendedor y un compromiso activo son los requisitos previos más importante para el éxito tu casa de apuestas.</p>

                        <p>Aquí te mencionamos cuales son los requisitos necesarios:</p>
                        <ul>
                            <li>
                                <h5 class="titlre"><i class="fa-solid fa-check"></i> Local propio o alquilado</p>
                            </li>
                            <li>
                                <h5 class="titlre"><i class="fa-solid fa-check"></i> Acceso a internet</p>
                            </li>
                            <li>
                                <h5 class="titlre"><i class="fa-solid fa-check"></i> Inversión para implementación de equipos</p>
                            </li>
                            <li>
                                <h5 class="titlre"><i class="fa-solid fa-check"></i> Caja chica</p>
                            </li>
                            <li>
                                <h5 class="titlre"><i class="fa-solid fa-check"></i> Ser persona jurídica: régimen MYPE tributario o apertura nuevo RUC - Sunat (orientado al giro de negocio)</p>
                            </li>
                            
                        </ul>
                        <a href="https://wa.me/51913069000" target="_blank" class="lab-btn bg-title">Quiero ser socio <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="about__thumb">
                        <div class="row g-4" style="max-width: 90%">
                            <div class="col-12 wow fadeInUp" data-wow-delay=".5s">
                                <div class="about__img about__img--thumb">
                                    <img src="assets/requerimientos.png" alt="rajib raj">
                                </div>
                            </div>
                            <div class="col-md-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                                <div class="about__img about__img--thumb">
                                    <img src="assets/requerimientos1.png" alt="rajib raj">
                                </div>
                            </div>
                            <div class="col-md-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                                <div class="about__img about__img--thumb">
                                    <img src="assets/requerimientos2.png" alt="rajib raj">
                                </div>
                            </div>
                        </div>
                        <div class="about__img--content wow fadeInUp" data-wow-delay=".5s">
                           <h2 style="color: #0B2239">+5</h2>
                            <p><span>Años</span> de experiencia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========About Section Ends Here========== -->
     <!-- ==========Service Section Start Here========== -->
    <div class="service padding-tb bg-img" style="background-image: url(assets/images/bg/15.jpg);">
        <div class="container">
            <div class="section__header text-center wow fadeInUp" data-wow-delay=".5s">
                <h5>¡El que sabe, sabe!</h5>
                <h2>Te Apoyamos</h2>
            </div>
            <div class="section__wrapper">
                <div class="row justify-content-center align-items-center g-4">
                    <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="service__item">
                            <div class="service__front text-center">
                                <div class="service__icon">
                                    <img src="assets/SOPORTE-TECNICO.png" alt="rajib raj" width="100px">
                                </div>
                                <div class="service__content">
                                    <h5>Soporte Técnico</h5>
                                    <p>Contará con un equipo de profesionales que resolverá cualquier incidencia técnico que se le presente.</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="service__item">
                            <div class="service__front text-center">
                                <div class="service__icon">
                                    <img src="assets/asesoria-comercial.png" alt="rajib raj" width="100px">
                                </div>
                                <div class="service__content">
                                    <h5>Asesoría comercial</h5>
                                    <p>Podrá contar con nuestros especialistas comerciales, quienes estarán prestos a atender sus consultas.</p>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="service__item">
                            <div class="service__front text-center">
                                <div class="service__icon">
                                    <img src="assets/diseno-grafico.png" alt="rajib raj" width="100px">
                                </div>
                                <div class="service__content">
                                    <h5>Diseño Gráfico</h5>
                                    <p>Nuestro equipo de diseñadores le suministrará las piezas gráficas que le permitan promocionar su negocio.</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="service__item">
                            <div class="service__front text-center">
                                <div class="service__icon">
                                    <img src="assets/diseño-de-interiroes.png" alt="rajib raj" width="100px">
                                </div>
                                <div class="service__content">
                                    <h5>Diseño de Interiores 3D</h5>
                                    <p>De acuerdo a las medidas de su local, le desarrollamos los planos en 3D que le permitan distribuir mejor su espacio.</p>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="service__item">
                            <div class="service__front text-center">
                                <div class="service__icon">
                                    <img src="assets/logistica.png" alt="rajib raj" width="100px">
                                </div>
                                <div class="service__content">
                                    <h5>Logística</h5>
                                    <p>Contamos con proveedores que le pondremos a su disposición para que la adquisición de los equipos sea más cómoda.</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="service__item">
                            <div class="service__front text-center">
                                <div class="service__icon">
                                    <img src="assets/actualizaciones.png" alt="rajib raj" width="100px">
                                </div>
                                <div class="service__content">
                                    <h5>Actualizaciones</h5>
                                    <p>Las actualizaciones mejoradas de nuestros productos son totalmente gratuitas.</p>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4 mt-lg-5 wow fadeInUp" data-wow-delay=".5s">
                    <a href="https://wa.me/51913069000" target="_blank" class="lab-btn">Escríbenos <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Service Section Ends Here========== -->        

       <!-- ==========What we do Section Ends Here========== -->
    <div class="wwd wwd--one padding-tb bg-img" >
        <div class="container">
            <div class="row justify-content-center g-4">
                <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                    <div class="wwd__thumb">
                        <img src="assets/images/wwd/01.png" alt="rajib raj">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="wwd__content">
                        <div class="section__header wow fadeInUp" data-wow-delay=".5s">
                            <h5>Casa de apuestas deportivas</h5>
                            <h2>Razones para invertir</h2>
                            <p class="ms-0">Fortune 500 enterprises and established brands trust our software development.</p>
                        </div>
                        <div class="section__wrapper wow fadeInUp" data-wow-delay=".5s">
                         <div class="accordion accordion-flush" id="faqAccordion">
                                <div class="accordion-item">
                                    <h6 class="accordion-header" id="faqOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                           <span class="accordion-headerText">
Emprende tu negocio propio</span>
                                        </button>
                                    </h6>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="faqOne" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p>No estarás solo, te apoyamos en la planificación, construcción y crecimiento de tu negocio.</p>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="accordion-item">
                                    <h6 class="accordion-header" id="faqTwo">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                             <span class="accordion-headerText">Genera ganancias rentables</span>
                                        </button>
                                    </h6>
                                    <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="faqTwo" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p>Las apuestas cada vez son más populares y la tendencia sigue aumentando. Lo cual representa un gran oportunidad para generar ganancias.</p>
                                        </div>
                                    </div>
                                </div>
                
                                <div class="accordion-item">
                                    <h6 class="accordion-header" id="faqThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                             <span class="accordion-headerText">Obtén un sistema interactivo y rápido</span>
                                        </button>
                                    </h6>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="faqThree" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p>Nuestros software cuentan con una interfaz gráfica que brinda la amigabilidad para que el usuario haga su apuesta fácilmente.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h6 class="accordion-header" id="faqFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                             <span class="accordion-headerText">Ser parte de una empresa líder en el mercado iGaming</span>
                                        </button>
                                    </h6>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="faqFour" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p>Más de 5 años de experiencia. Creando oportunidades de emprendimiento para quien desee montar su propia casa de apuestas.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h6 class="accordion-header" id="faqFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            <span class="accordion-headerText">Apoyo y seguimiento de tu negocio</span>
                                        </button>
                                    </h6>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="faqFive" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p>Te brindamos las herramientas que necesites para el crecimiento de tu negocio, Diseño Grafico, Logistica, Soporte Tecnico, Asesoria Comercial.</p>
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
    <!-- ==========What we do Section Ends Here========== -->    


   <!-- ==========Team Section Start Here========== -->
    <div class="team team--two padding-tb" style="background-image: url(assets/images/bg/05.jpg);">
        <div class="container">
            <div class="section__header text-center wow fadeInUp" data-wow-delay=".5s">
                <!-- <h5>Our team mumbers</h5> -->
                <h2>Productos</h2>
                <p>Contamos con una amplia variedad de software de apuestas que le permitirán brindar una experiencia única a sus clientes en su casa de apuesta, incorporando Apuestas Deportivas, Lotería, Juegos Virtuales, Casino.</p>
            </div>
            <div class="section__wrapper">
                <div class="row justify-content-center align-items-center g-4">
                    <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="team__item">
                            <div class="team__thumb">
                                <img src="https://www.sportbetperu.com/img/frontend/casa-de-apuestas/apuestas-deportivas.png" alt="rajib raj">
                            </div>
                            <div class="team__content">
                                <h5><a href="team-single.html">Apuestas Deportivas</a></h5>
                                <!-- <span>Founder</span> -->
                                <p>Proveedor #1 de Software de Apuestas Deportivas en todo el Perú. Combinamos el diseño interactivo del interfaz con integraciones modernas y súper manejables.</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="team__item">
                            <div class="team__thumb">
                                <img src="https://www.sportbetperu.com/img/frontend/casa-de-apuestas/juegos-virtuales.png" alt="rajib raj">
                            </div>
                            <div class="team__content">
                                <h5><a href="team-single.html">Juegos Virtuales</a></h5>
                                
                                <p>El software de juegos virtuales ampliará las capacidades de su casino en línea y permitirá a los jugadores apostar 24/7. Con una gama de juegos en alta resolución como Caballos, Fútbol, Ruleta y más.</p>
                                
                            </div>
                        </div>
                    </div>
                   
                    
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Team Section Ends Here========== -->


@endsection