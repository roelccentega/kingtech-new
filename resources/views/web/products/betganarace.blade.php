@extends('layouts.appbetganarace')
@section('content')
   


    
       <!-- ========================= banner section start ========================= -->
    <section class="banner banner--home3" id="home">
        <div class="container">
            <div class="banner__wrapper">
                <div class="row g-5">
                    <div class="col-lg-8">
                        <div class="banner__content wow animate__animated animate__slideInLeft">
                            <span>Juegos Virtuales</span>
                            <h2><span style="color: #aed51f">Bet Gana Race</span> <br> Lo mejor en eventos Hípicos</h2>
                             <p>Nuestra plataforma esta diseñada para que puedas usarlo desde cualquier dispositivo, podrás hacer tus pronósticos, descargar la programación de carreras ,ver las jornadas, ver los resultados de todas las carreras y disfrutar de los videos en vivo haciendo tu apuesta..</p>
                            <div class="group-btn g-30">
                                <a href="{{url('/contacto')}}" class="default-btn"><span>Contáctanos</span></a>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="banner__thumb wow animate__animated animate__slideInRight">
                            <img src="{{asset('assets/hipica/CABALLOS.png')}}" alt="Author Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================== banner section end ========================== -->

 

    <!-- ========================== service section start ========================== -->
    <section class="service padding-tb bg-ash" id="service">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="service__content">
                        <div class="section__header mb-5">
                            <span class="bg-white">Hípica</span>
                            <h2>LOS MEJORES EN APUESTA HÍPICA</h2>
                            <p>Nuestra plataforma esta diseñada para que puedas usarlo desde cualquier dispositivo, podrás hacer tus pronósticos, descargar la programación de carreras ,ver las jornadas, ver los resultados de todas las carreras y disfrutar de los videos en vivo haciendo tu apuesta.</p>
                            <a href="assets/cv.pdf" class="default-btn mt-30" download> <span>Descargar Brochure</span>
                                </a>
                        </div>
                  
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service__thumb wow animate__animated animate__slideInRight">
                        <img src="{{asset('/assets/hipica/betgana-111.png')}}" alt="Service Thumbnail">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================== service section end ========================== -->


    <!-- ========================== About section start ========================== -->
    <section class="about padding-tb" id="about">
        <div class="container">
            <div class="about__wrapper">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="about__thumb  wow animate__animated animate__slideInLeft">
                            <img src="{{asset('assets/hipica/portada-betrace.png')}}" alt="About Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content">
                            <div class="section__header">
                               
                                <h2>BET GANA RACE TE OFRECE SEGURIDAD</h2>
                                <p>Tus apuestas son importantes, por eso nos da gusto que lo puedas hacer de la forma más comoda y segura tal y como llevamos haciendo desde antes. Te permitimos hacer depósitos y retiros de forma fácil y dispones de un equipo profesional de asistencia al cliente que te ayudará con cualquier duda respecto a tu cuenta 24/7. Descubre el apasionante mundo de las carreras en vivo con los mejores del mercado y la mejor valorada por sus usuarios.</p>
                               <a href="https://wa.me/51983446479" target="_blank" class="default-btn mt-30" download> <span>Escríbenos vía WhatsApp</span>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================== About section end ========================== -->




    <!-- ========================== Contact section start ========================== -->
    <section class="contact padding-tb bg-ash" id="contact">
        <div class="container">
            <div class="section__header mb-5 text-center">
                <span class="bg-white">Contacto</span>
                <h2>¿Tiene Alguna Pregunta?
No Dude En Ponerte En Contacto Con Nosotros.</h2>
            </div>
            <div class="contact__wrapper wow animate__animated animate__fadeInUp">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <ul class="contact__info">
                            <li class="contact__info-item">
                                <div class="contact__info-thumb">
                                    <img src="appbetganarace/assets/images/contact/icon/call.png" alt="Phone Icon">
                                </div>
                                <div class="contact__info-content">
                                    <h4>
Número De Teléfono</h4>
                                    <p>+51 913 069 000</p>
                                </div>
                            </li>
                            <li class="contact__info-item">
                                <div class="contact__info-thumb">
                                    <img src="appbetganarace/assets/images/contact/icon/mail.png" alt="Mail Icon">
                                </div>
                                <div class="contact__info-content">
                                    <h4>Correo Electrónico</h4>
                                    <p>info@kingtech.com
                                    </p>
                                </div>
                            </li>
                            <li class="contact__info-item">
                                <div class="contact__info-thumb">
                                    <img src="appbetganarace/assets/images/contact/icon/location.png" alt="Location Icon">
                                </div>
                                <div class="contact__info-content">
                                    <h4>
Dirección</h4>
                                    <p>Av. Gral. Antonio Alvarez de Arenales 2523, Lince</p>
                                </div>
                            </li>
                        </ul>

                    </div>
                    <div class="col-lg-8 col-md-6">
                        <form action="#" class="contact__form">
                            <div class="row g-4">
                                    
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="name" placeholder="Nombre Completo">
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" class="form-control" id="email" placeholder="Correo Electrónico">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="phone" placeholder="Teléfono">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="subject" placeholder="Asunto">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control" id="content" placeholder="Escriba su Mensaje"></textarea>
                                </div>
                                  <br>
                        <div class="campo pad-rpt">
                                <div id="respuesta"></div>
                        </div>  
                         
                        <br>
                            </div>
                            <button class="default-btn" id="submit" type="submit"><span>Enviar</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================== Contact section end ========================== -->


@endsection