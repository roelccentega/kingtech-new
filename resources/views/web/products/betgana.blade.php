@extends('layouts.appbetgana')
@section('content')
  <!-- ========================= banner section start ========================= -->
    <section class="banner banner--home4" id="home">
        <div class="container">
            <div class="banner__wrapper">
                <div class="row flex-lg-row-reverse g-5">
                    <div class="col-lg-7">
                        <div class="banner__content wow animate__animated animate__slideInRight">
                            <span>Software de Apuestas</span>
                            <h2><span>Betgana</span> - Software de Apuestas Deportivas</h2>
                            <p>El sistema de apuestas con la más completa gama de eventos deportivos, donde podrá verificar datos, historiales y estadísticas detalladas de sus eventos favoritos, además presenta un interfaz atractivo que logrará el potencial rendimiento.</p>
                            <div class="group-btn g-30">
                                <a href="{{url('/contacto')}}" class="default-btn"><span>Contactarnos</span></a>
                                <ul class="banner__social d-flex g-20">
                                    <li><a href="https://www.instagram.com/betgana.official/" target="_blank"><i class="icofont-instagram"></i></a></li>
                                    <li><a href="https://www.tiktok.com/@betgana.oficial" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
                                    <li><a href="https://www.facebook.com/betganaperu/" target="_blank"><i class="icofont-facebook"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="banner__thumb wow animate__animated animate__slideInLeft">
                            <img src="assets/betgana/condor-betgana.png" alt="Author Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================== banner section end ========================== -->


 








 <!-- ========================== service section start ========================== -->
    <section class="service service--home4 padding-tb bg-ash" id="service">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-12">
                    <div class="service__wrapper wow animate__animated animate__slideInLeft">
                        <div class="section__header">
                            <span class="bg-white">BETGANA - SOFTWARE DE APUESTAS</span>
                            <h2>Características</h2>
                            <p>Sus clientes tendrán a disposición una excelente plataforma de apuestas en línea con el respaldo de un soporte profesional.</p>
                        </div>

                        <div class="row g-4">
                            <div class="col-sm-4">
                                <div class="service__item service__item--style3">
                                    <div class="service__inner">
                                        <div class="service__thumb service__thumb--rounded-shadow">
                                            <img src="/assets/betgana/resultados-en-vivo.png" width="90px" alt="bio thumb">
                                        </div>
                                        <div class="service__content">
                                            <h5>Resultados en vivo</h5>
                                            <p>Los usuarios/jugadores pueden ver los resultados mientras hacen sus apuestas. Esto les ayuda a controlar las probabilidades y los porcentajes en tiempo real.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="service__item service__item--style3">
                                    <div class="service__inner">
                                        <div class="service__thumb service__thumb--rounded-shadow">
                                            <img src="/assets/betgana/gestion-de-riesgos.png" width="90px" alt="bio thumb">
                                        </div>
                                        <div class="service__content">
                                            <h5>Gestión de riesgo</h5>
                                            <p>Podrá ver su riesgo y el comportamiento de su negocio. Si desea un manejo personal en sus líneas de apuestas o limitar eventos para sus jugadores, lo podrá realizar por medio de nuestro sistema.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="service__item service__item--style3">
                                    <div class="service__inner">
                                        <div class="service__thumb service__thumb--rounded-shadow">
                                            <img src="/assets/betgana/variedad-en-eventos-deportivos.png" width="90px" alt="bio thumb">
                                        </div>
                                        <div class="service__content">
                                            <h5>Variedad de eventos deportivos</h5>
                                            <p>Betgana ofrece numerosas apuestas previas al partido y hasta 10.000 partidos en vivo por mes para apostar
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="service__item service__item--style3">
                                    <div class="service__inner">
                                        <div class="service__thumb service__thumb--rounded-shadow">
                                            <img src="/assets/betgana/mejores-cuotas-del-mercado.png" width="90px" alt="bio thumb">
                                        </div>
                                        <div class="service__content">
                                            <h5>Las mejores cuotas del mercado</h5>
                                            <p>Nuestras altas cuotas atraen una gran cantidad de jugadores a decidirse por Betgana
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="col-sm-4">
                                <div class="service__item service__item--style3">
                                    <div class="service__inner">
                                        <div class="service__thumb service__thumb--rounded-shadow">
                                            <img src="/assets/betgana/alto-nivel-de-encriptación.png" width="90px" alt="bio thumb">
                                        </div>
                                        <div class="service__content">
                                            <h5>Alto nivel de encriptación y seguridad</h5>
                                            <p>Para un juego justo y una experiencia única nos aseguramos de que tengas una base robusta antifraude para la seguridad.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="col-sm-4">
                                <div class="service__item service__item--style3">
                                    <div class="service__inner">
                                        <div class="service__thumb service__thumb--rounded-shadow">
                                            <img src="/assets/betgana/datos-y-estadisticas.png" width="90px" alt="bio thumb">
                                        </div>
                                        <div class="service__content">
                                            <h5>Datos y estadísticas detalladas de las apuestas</h5>
                                            <p>La plataforma de apuestas deportivas Betgana ofrece probabilidades y análisis sobre deportes, jugadores y resultados.
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

 <!-- ========================== About section start ========================== -->
    <section class="about padding-tb" id="about">
        <div class="container">
            <div class="about__wrapper">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="about__thumb wow animate__animated animate__fadeInUp">
                            <img src="{{asset('/assets/betgana/betgana-socios.png')}}" alt="About Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content">
                            <div class="section__header">
                                <span>Somos la marca con +500 tiendas a nivel nacional</span>
                                <h2>Conviértete en nuestro socio</h2>
                                <p>En estos 5 años en el mercado nos hemos convertido en una de las Empresas de Software de Apuestas que más ha apoyado e impulsado a cientos de emprendedores a montar su propia casa de apuestas deportivas en todo el Perú. Trabajando siempre con las mejores tecnologías y ofreciendo asesoramiento profesional a todos nuestros socios.</p>

<p>Estamos comprometidos con el crecimiento de nuestros socios. Te acompañamos y apoyamos en todas las fases, desde la planificación, construcción e impulso y crecimiento de tu propio local de apuestas.</p>

<p>¡No esperes más, conviértete en nuestro socio y comienza a ganar con un negocio rentable!</p>
                             
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
    <!-- ========================== About section start ========================== -->
    <section class="about padding-tb bg-ash" id="about">
        <div class="container">
            <div class="about__wrapper">
                <div class="row g-5">
                      <div class="col-lg-6">
                        <div class="about__content">
                            <div class="section__header">
                                <!-- <span class="bg-white">About me</span> -->
                                <h2>¿Por Qué Elegirnos?</h2>
                               <div class="skill__right wow animate__ animate__slideInUp animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: slideInUp;">
                            <ul>
                                <li>
                                    <div class="skill__right--year">
                      
                                    </div>
                                    <div class="skill__right--content">
                                        <h5>+5 años de Experiencia en el Mercado</h5>
                                        <p>Nos apasiona ofrecer el mejor producto de apuestas deportivas del mercado y siempre estamos a la vanguardia de la innovación mediante la implementación de las ultimas tecnologías que brinden la mejor experiencia al usuario</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="skill__right--year">
                             
                                    </div>
                                    <div class="skill__right--content">
                                        <h5>Software Amigable y Fácil de usar</h5>
                                        <p>Combina una interfaz atractiva y moderna, fácil de usar. Los usuarios pueden seleccionar cualquier apuesta en segundos y hacer su jugada de forma sencilla.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="skill__right--year">
                                   
                                    </div>
                                    <div class="skill__right--content">
                                        <h5> Constante expansión y aceptación de la comunidad</h5>
                                        <p>Más de 400 casas y puntos de apuestas Betgana en todo el Perú y gran cantidad de jugadores que eligen la experiencia de jugar con nuestra plataforma.</p>
                                    </div>
                                </li>
                               
                            </ul>
                        </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__thumb  wow animate__animated animate__slideInLeft">
                            <img src="{{asset('assets/betgana/mapa-betgana.png')}}" alt="About Image">
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </section>
    <!-- ========================== About section end ========================== -->




<style type="text/css">
    @media (min-width: 1440px)
{
    .consult__thumb img {
     right: 1%; 
}
}
</style>

    <!-- ========================== Consult section start ========================== -->
    <section class="consult padding-tb " id="consult">
        <div class="container">
            <div class="consult__wrapper">
                <div class="row g-5 flex-lg-row-reverse">
                    <div class="col-lg-4">
                        <div class="consult__thumb text-center">
                            <img src="assets/images/banner/01.png" alt="Doctor Image">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="consult__content pe-lg-5 wow animate__animated animate__slideInLeft">
                            <h2>¿Tiene alguna pregunta? ¡Pongase en contacto!</h2>
                            <p>Elija el medio de contacto de su preferencia, nuestro equipo de atención al cliente le responderé lo más pronto posible.</p>
                            <form action="#" class="consult__form">
                                <div class="row g-5">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Nombre Completo">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Coreo Electrónico">
                                    </div>
                                     <div class="col-md-6">
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Teléfono">
                                    </div>
                                     <div class="col-md-6">
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Asunto">
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" id="content" name="content" placeholder="Escriba su Mensaje"></textarea>
                                    </div>
                                </div>
                                 <br>
                        <div class="campo pad-rpt">
                                <div id="respuesta"></div>
                        </div>  
                         
                        <br>
                                <div class="mt-5">
                                    <button class="default-btn" id="submit" type="submit"><span>Enviar Mensaje</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================== Consult section end ========================== -->




    <!-- ========================== Contact section start ========================== -->
    <section class="contact bg-ash contact--fashion padding-tb" id="contact">
        <div class="container">
            <div class="contact__wrapper">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <div class="section__header mb-5">
                            <span class="bg-white">Contacto</span>
                            <h2>Ponerse En Contacto</h2>
                        </div>
                        <ul class="contact__info">
                            <li class="contact__info-item contact__info-item--transparent">
                                <div class="contact__info-thumb">
                                    <img src="appbetgana/assets/images/contact/icon/white/call.png" alt="Phone Icon">
                                </div>
                                <div class="contact__info-content">
                                    <h4>
Número De Teléfono</h4>
                                    <p>+51 913 069 000</p>
                                </div>
                            </li>
                            <li class="contact__info-item contact__info-item--transparent">
                                <div class="contact__info-thumb">
                                    <img src="appbetgana/assets/images/contact/icon/white/mail.png" alt="Mail Icon">
                                </div>
                                <div class="contact__info-content">
                                    <h4>Dirección De Correo Electrónico</h4>
                                    <p>

info@kingtech.com
                                    </p>
                                </div>
                            </li>
                            <li class="contact__info-item contact__info-item--transparent">
                                <div class="contact__info-thumb">
                                    <img src="appbetgana/assets/images/contact/icon/white/location.png" alt="Location Icon">
                                </div>
                                <div class="contact__info-content">
                                    <h4>Dirección</h4>
                                    <p>Av. Gral. Antonio Alvarez de Arenales 2523, Lince</p>
                                </div>
                            </li>
                        </ul>

                    </div>
                    <div class="col-lg-8 col-md-6">
                        <div class="contact__map  wow animate__animated animate__slideInRight">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1950.6658975923506!2d-77.03489716111956!3d-12.08942306529975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c85e40a590eb%3A0x6719e454a771a6c4!2sAv.%20Arenales%202523%2C%20San%20Isidro%2015046!5e0!3m2!1ses-419!2spe!4v1604335250047!5m2!1ses-419!2spe" class="video-play-icon text-primary" style="border:0" allowfullscreen=""></iframe>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ========================== Contact section end ========================== -->
   

@endsection