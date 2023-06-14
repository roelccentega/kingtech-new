@extends('layouts.apptinbet')
@section('content')
   
   

  


<!-- ========================= banner section start ========================= -->
    <section class="banner banner--home3" id="home">
        <div class="container">
            <div class="banner__wrapper">
                <div class="row g-5">
                    <div class="col-lg-8">
                        <div class="banner__content wow animate__animated animate__slideInLeft">
                            <span>Software De Apuestas Deportivas</span>
                            <h2><span>Tinbet</span> - Apuestas Deportivas</h2>
                            <p>El programa de apuestas deportivas con la interfaz más atractiva y moderna, fácil de usar y con una gran variedad de deportes totalmente en vivo hasta el último segundo.</p>
                            <div class="group-btn g-30">
                                <a href="https://wa.me/51913069000" target="_blank" class="default-btn"><span>Escríbenos Vía WhatsApp</span></a>
                                <ul class="banner__social d-flex g-20">
                                    <li><a href="https://www.facebook.com/tinbet.oficial" target="_blank"><i class="icofont-facebook"></i></a></li>
                                    <li><a href="https://www.instagram.com/tinbet.pe.oficial/" target="_blank"><i class="icofont-instagram"></i></a></li>
                                    <li><a href="https://www.youtube.com/@tinbet.oficial" target="_blank"><i class="icofont-youtube"></i></a></li>
                                    <li><a href="https://www.tiktok.com/@tinbet.oficial" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="banner__thumb  wow animate__animated animate__slideInRight">
                            <img src="assets/tinbet/tinbet-portada.png" alt="Author Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================== banner section end ========================== -->



    <!-- ========================== service section start ========================== -->
    <section class="service padding-tb" id="service">
        <div class="container">
            <div class="row g-5 g-lg-4 flex-row-reverse align-items-center">
           
                <div class="col-lg-12">
                    <!-- service__wrapper -->
                    <div class="">
                        <div class="row g-4">
                             <div class="col-sm-4">
                                <div class="service__item bg-ash text-center wow animate__animated animate__fadeInUp">
                                    <div class="service__inner">
                                        <div class="service__thumb service__thumb--rounded-shadow">
                                            <img src="{{asset('assets/tinbet/resultados-en-vivo.png')}}" alt="Resultados En Vivo" width="80px">
                                        </div>
                                        <div class="service__content">
                                            <h5>Resultados En Vivo</h5>
                                            <p>Los usuarios/jugadores pueden ver los resultados mientras hacen sus apuestas. Esto les ayuda a controlar las probabilidades y los porcentajes en tiempo real.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="service__item bg-ash text-center wow animate__animated animate__fadeInUp">
                                    <div class="service__inner">
                                        <div class="service__thumb service__thumb--rounded-shadow">
                                            <img src="{{asset('assets/tinbet/gestion-de-riesgo.png')}}" alt="Gestión De Riesgo" width="80px">
                                        </div>
                                        <div class="service__content">
                                            <h5>Gestión De Riesgo</h5>
                                            <p>Podrá ver su riesgo y el comportamiento de su negocio. Si desea un manejo personal en sus líneas de apuestas o limitar eventos para sus jugadores, lo podrá realizar por medio de nuestro sistema.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="service__item bg-ash text-center wow animate__animated animate__fadeInUp">
                                    <div class="service__inner">
                                        <div class="service__thumb service__thumb--rounded-shadow">
                                            <img src="{{asset('assets/tinbet/variedad-de-eventos.png')}}" alt="Variedad De Eventos Deportivos" width="80px">
                                        </div>
                                        <div class="service__content">
                                            <h5>Variedad De Eventos Deportivos</h5>
                                            <p>Tinbet ofrece numerosas apuestas previas al partido y hasta 10.000 partidos en vivo por mes para apostar
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="service__item bg-ash text-center wow animate__animated animate__fadeInUp">
                                    <div class="service__inner">
                                        <div class="service__thumb service__thumb--rounded-shadow">
                                            <img src="{{asset('assets/tinbet/altas-cuotassd.png')}}" alt="Las Mejores Cuotas Del Mercado" width="80px">
                                        </div>
                                        <div class="service__content">
                                            <h5>Las Mejores Cuotas Del Mercado</h5>
                                            <p>Nuestras altas cuotas atraen una gran cantidad de jugadores a decidirse por Tinbet
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="service__item bg-ash text-center wow animate__animated animate__fadeInUp">
                                    <div class="service__inner">
                                        <div class="service__thumb service__thumb--rounded-shadow">
                                            <img src="{{asset('assets/tinbet/alto-nivel-de-encrioatcion.png')}}" alt="Alto Nivel De Encriptación Y Seguridad" width="80px">
                                        </div>
                                        <div class="service__content">
                                            <h5>Alto Nivel De Encriptación Y Seguridad</h5>
                                            <p>Para un juego justo y una experiencia única nos aseguramos de que tengas una base robusta antifraude para la seguridad.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="service__item bg-ash text-center wow animate__animated animate__fadeInUp">
                                    <div class="service__inner">
                                        <div class="service__thumb service__thumb--rounded-shadow">
                                            <img src="{{asset('assets/tinbet/datos-y-etadisticass.png')}}" alt="Datos Y Estadísticas Detalladas De Las Apuestas" width="80px">
                                        </div>
                                        <div class="service__content">
                                            <h5>Datos Y Estadísticas Detalladas De Las Apuestas</h5>
                                            <p>La plataforma de apuestas deportivas Tinbet ofrece probabilidades y análisis sobre deportes, jugadores y resultados.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================== service section end ========================== -->
<!-- ========================== service section start ========================== -->
    <section class="service padding-tb bg-ash" id="service">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="service__content">
                        <div class="section__header mb-5">
                       
                            <h2>¿Por Qué Elegirnos?</h2>
                        </div>
               <div class="skill__right wow animate__ animate__slideInUp animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: slideInUp;">
                            <ul>
                                <li>
                                    <div class="skill__right--year">
                                    
                                    </div>
                                    <div class="skill__right--content">
                                        <h5>+5 Años De Experiencia En El Mercado</h5>
                                        <p>Nos apasiona ofrecer el mejor producto de apuestas deportivas del mercado y siempre estamos a la vanguardia de la innovación mediante la implementación de las ultimas tecnologías que brinden la mejor experiencia al usuario</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="skill__right--year">
                                       
                                    </div>
                                    <div class="skill__right--content">
                                        <h5>Software Amigable Y Fácil De Usar</h5>
                                        <p>Combina una interfaz atractiva y moderna, fácil de usar. Los usuarios pueden seleccionar cualquier apuesta en segundos y hacer su jugada de forma sencilla.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="skill__right--year">
                                 
                                    </div>
                                    <div class="skill__right--content">
                                        <h5>Constante Expansión Y Aceptación De La Comunidad</h5>
                                        <p>Más de 1500 casas y puntos de apuestas Tinbet en todo el Perú y gran cantidad de jugadores que eligen la experiencia de jugar con nuestra plataforma.</p>
                                    </div>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service__thumb wow animate__animated animate__slideInRight">
                        <img src="{{asset('assets/mapa-tinbet.png')}}" alt="Mapa tinbet">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================== service section end ========================== -->


   <!-- ========================== About section start ========================== -->
    <section class="about padding-tb " id="about">
        <div class="container">
            <div class="about__wrapper">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="about__thumb wow animate__animated animate__slideInUp">
                            <!-- <div class="about__thumb-award">
                                <img src="apptinbet/assets/images/about/icon/award.png" alt="award Icon">
                                <h4>Apuestas Deportivas</h4>
                            </div> -->
                            <div class="about__thumb-project">
                                <img src="{{asset('/assets/lugar.png')}}" alt="1000 locales">
                                <h4>+1000 locales</h4>
                            </div>
                            <img src="{{asset('assets/socios.png')}}" alt="Socios">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content">
                            <div class="section__header">
                                <h4 style="color: #1e8b40">Crece con nosotros</span>
                                <h2>Conviértete En Nuestro Socio Y Emprende En Un Negocio Rentable</h2>
                                <p> Los sistemas de apuestas son cada vez más populares y la tendencia sigue aumentando. Los eventos deportivos y máquinas de videolotería cada vez atraen más público.</p>

<p> Contamos con un sistema de administración con el cual tendrá acceso a toda la información sobre sus clientes y ganancias en tiempo real. Podrá ver su riesgo y el comportamiento de su negocio. Si desea un manejo personal en sus líneas de apuestas o limitar eventos para sus jugadores, lo podrá realizar por medio de nuestro sistema.</p>

<p> Si estás buscando un proveedor de software de Igaming y este considerando invertir en los negocios de apuestas no dudes en contactarnos, será un gusto poder ayudarte.</p>
                           
                                <a href="assets/cv.pdf" class="default-btn mt-30" download> <span>Descargar Brochure</span>
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
                <!-- <span>Contact</span> -->
                <h5 style="color: #1e8b40">  ¡PONTE EN CONTACTO!</h5>
                <h2>¿Tiene Alguna Pregunta? <br> No Dude En Ponerse En Contacto Con Nosotros.</h2>
            </div>
            <div class="contact__wrapper wow animate__animated animate__fadeInUp">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <ul class="contact__info">
                            <li class="contact__info-item">
                                <div class="contact__info-thumb">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="contact__info-content">
                                    <h4>Número De Teléfono</h4>
                                    <p>+51 913 069 000</p>
                                </div>
                            </li>
                            <li class="contact__info-item">
                                <div class="contact__info-thumb">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="contact__info-content">
                                    <h4>Correo Electrónico</h4>
                                    <p>info@kingtech.com
                                    </p>
                                </div>
                            </li>
                            <li class="contact__info-item">
                                <div class="contact__info-thumb">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="contact__info-content">
                                    <h4>Dirección</h4>
                                    <p>Av. Gral. Antonio Alvarez de Arenales 2523, Lince</p>
                                </div>
                            </li>
                        </ul>

                    </div>
                    <div class="col-lg-8 col-md-6">
                        <form action="#" class="contact__form">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Nombre y Apellido">
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Correo Electrónico">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="phone" name="phone" class="form-control" placeholder="Teléfono">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="subject" name="subject" class="form-control" placeholder="Asunto">
                                </div>

                                <div class="col-12">
                                    <textarea class="form-control" id="content" name="content" placeholder="Mensaje"></textarea>
                                </div>
                                   <br>
                        <div class="campo pad-rpt">
                                <div id="respuesta"></div>
                        </div>  
                         
                        <br>
                            </div>
                            <button class="default-btn" id="submit" type="submit"><span>Enviar</span> </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================== Contact section end ========================== -->



@endsection