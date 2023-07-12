@extends('layouts.app')
@section('content')
<style type="">
    .bg-breadcrumb{
        background-image: url(assets/headder.png);
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
    <div class="pageheader padding-tb bg-img bg-breadcrumb bg-breadcrumb2" style="">
        <div class="container">
            <div class="pageheader__area text-center">
                <h2>Sobre Nosotros</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{URL('/')}}">Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page" style="color: #009636">Nosotros</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- ==========Banner Section Ends Here========== -->


    <!-- ==========About Section Start Here========== -->
    <div class="about about--teampage padding-tb">
        <div class="container">
            <div class="row justify-content-center align-items-center g-4">
                <div class="col-lg-6 col-12">
                    <div class="about__content">
                        <h5 style="color: #009636; font-size: 19px">"El mejor proveedor de Software De apuestas"
                          </h5>
                        <h2>¿Quiénes somos?</h2>
                        <p>	En nuestra trayectoria en el mercado, nos hemos convertido en una de las Empresas de Software de Apuestas Deportivas que más ha apoyado e impulsado a miles de emprendedores a montar su propia casa de apuestas deportivas en todo el Perú. Trabajando siempre con las mejores tecnologías y ofreciendo asesoramiento profesional a todos nuestros clientes.</p>

						<p>	Estamos comprometidos con el crecimiento de nuestros socios y clientes. Te acompañamos y apoyamos en todas las fases, desde la planificación, construcción, impulso y crecimiento de tu propio local de apuestas</p>

						<p>	<b> ¡No esperes más, conviértete en nuestro socio y comienza a ganar con un negocio rentable!  </b></p>
                        
                        <div class="lab_btn_group">
                            <a href="#" class="lab-btn bg-title">Contactarnos <i class="fa-solid fa-arrow-right"></i></a>
                            <!-- <a href="contact.html" class="lab-btn bg-title">get in touch <i class="fa-solid fa-arrow-right"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="about__thumb">
                        <div class="row g-4">
                            <div class="col--lg12">
                                <div class="about__img about__img--thumb">
                                    <img src="{{asset('assets/portada.jpg')}}" alt="Sobre Nosotros Kingtech" >
                                </div>
                            </div>
                         <!--    <div class="col-md-6 col-12">
                                <div class="about__img about__img--thumb">
                                    <img src="{{asset('assets/render3.jpg')}}" alt="rajib raj">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="about__img about__img--thumb">
                                    <img src="{{asset('assets/render1.jpg')}}" alt="rajib raj">
                                    <div class="about__img--content">
                                        <img src="assets/images/about/icon/01.png" alt="">
                                        <h5><span>+5 Años </span> de experiencia</h5>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========About Section Ends Here========== -->


    <!-- ==========Approach Section Start Here========== -->
    <div class="approach padding-tb bg-img" style="background-image: url(assets/images/bg/01.jpg);">
        <div class="container">
            <div class="section__header text-center">
                <h5>NUESTRO ENFOQUE</h5>
                <h2>Como trabajamos</h2>
                <p style="color:#fff">En <b style="color:#34BD6B, text-transform: uppercase">Kingtech Corporation</b> estamos comprometidos con nuestros
                        socios, por lo que no estarás solo, te apoyamos en la planificación, construcción y crecimiento
                        de tu negocio. </p>
            </div>
            <div class="section__wrapper">
                <div class="row justify-content-center align-items-center g-4">
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="approach__item text-center">
                            <div class="approach__icon">
                                <img src="assets/nos-reunimos-t.png" alt="rajib raj">
                            </div>
                            <div class="approach__content">
                                <span class="step">Proceso: 1</span>
                                <h5>Nos reunimos</h5>
                                <p>Resuelve tus dudas desde el primer día. Nuestros asesores lo harán
                            posible. ¡El primer contacto es importante!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="approach__item text-center">
                            <div class="approach__icon">
                                <img src="assets/te-impulsamos-t.png" alt="rajib raj">
                            </div>
                            <div class="approach__content">
                                <span class="step">Proceso: 2</span>
                                <h5>Te impulsamos</h5>
                                <p>Lo apoyamos en cada fase de nuestra asociación. Desde la
                            planificación hasta las operaciones en curso, no lo dejaremos solo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="approach__item text-center">
                            <div class="approach__icon">
                                <img src="assets/crecemos-t.png" alt="rajib raj">
                            </div>
                            <div class="approach__content">
                                <span class="step">Proceso: 3</span>
                                <h5>Crecemos</h5>
                                <p>Nos importa tu crecimiento. Juntos lograremos alcanzar todas las
                            metas comercial y garantizar tus ingresos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Approach Section Ends Here========== -->

    
    <!-- ==========Sponsor Section Start Here========== -->
    <div class="sponsor sponsor--one">
        <div class="container">
            <div class="section__wrapper">
                <div class="sponsor__title text-center mb-4 mb-lg-5">
                    <h5>Sponsor</h5>
                </div>
                
                <div class="sponsor__slider overflow-">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="sponsor__item">
                                <div class="sponsor__thumb">
                                    <img src="assets/utc.jpg" alt="rajib raj">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor__item">
                                <div class="sponsor__thumb">
                                    <img src="assets/powerade.jpg" alt="rajib raj">
                                </div>
                            </div>
                        </div>
                       
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Sponsor Section Ends Here========== -->


@endsection