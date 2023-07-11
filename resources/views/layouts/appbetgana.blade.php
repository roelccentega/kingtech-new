<!DOCTYPE html>
<html lang="en">



<head>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-D19RPMYWM0"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-D19RPMYWM0');
</script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Franquicias Betgana - Apuestas Deportivas</title>
 
    <link rel="stylesheet" href="appbetgana/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="appbetgana/assets/css/all.min.css">
    <link rel="stylesheet" href="appbetgana/assets/css/animate.css">
    <link rel="stylesheet" href="appbetgana/assets/css/icofont.min.css">
    <link rel="stylesheet" href="appbetgana/assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="appbetgana/assets/css/style.css">

     <link rel="apple-touch-icon" sizes="57x57" href="{{asset('favicons/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('favicons/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('favicons/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('favicons/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('favicons/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('favicons/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('favicons/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('favicons/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicons/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('favicons/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('favicons/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('/favicons/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('favicons/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
</head>

<body>
   


 

<style type="text/css">
    
     .fail {
    background: #F1141E;
    color: #fff;
    padding: 6px 12px;
    }
    .send {
    background: #11AF26;
    color: #fff;
    padding: 6px 12px;
}
</style>

    <!-- ========================== header section end ========================== -->
    <header class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{url('/')}}">
                        <img src="/assets/betgana/betgana-logo-o.png" alt="logo" width="180px">
                    </a>
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{url('/tinbet')}}">Tinbet</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/betganarace')}}">Bet Gana Race</a>
                            </li>
                          
                        </ul>
                        <a class="default-btn ms-3 text-center" href="{{url('/')}}" ><span>Volver a la página principal</span></a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- ========================== header section end ========================== -->


@yield('content')



    <!-- ========================== Footer section start ========================== -->
    <footer class="footer">
        <div class="container">
            <div class="footer__content">
                <a class="footer__logo" href="index.html"><img src="/assets/logo-blanco-betgana.png" width="185px" alt="" width="180px"></a>
                <ul class="footer__menu mb-4">
                    <li class="footer__menu-item">
                        <a href="{{url('/')}}" class="footer__menu-link">Inicio</a>
                    </li>
                    <li class="footer__menu-item">
                        <a href="{{url('/nosotros')}}" class="footer__menu-link">Nosotros</a>
                    </li>
                    <li class="footer__menu-item">
                        <a href="{{url('/casa-de-apuestas')}}" class="footer__menu-link">Casa de Apuestas</a>
                    </li>
                    <li class="footer__menu-item">
                        <a href="{{url('/punto-de-apuestas')}}" class="footer__menu-link">Puntos de Apuestas</a>
                    </li>
                    <li class="footer__menu-item">
                        <a href="{{url('/contacto')}}" class="footer__menu-link">Contacto</a>
                    </li>
                   
                </ul>
                <ul class="social justify-content-center">
                    <li class="social__item"><a href="https://www.facebook.com/betganaperu/" target="_blank" class="social__link"><i class="fa-brands fa-facebook"></i></a>
                    </li>
                  
                    <li class="social__item"><a href="https://www.instagram.com/betgana.official/" target="_blank" class="social__link"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                    <li class="social__item"><a href="https://www.tiktok.com/@betgana.oficial" target="_blank" class="social__link"><i class="fa-brands fa-tiktok"></i></a>
                    </li>
                </ul>
            </div>
            <div class="footer__copyright">
                <p class="mb-0">Creado por Kingtech</p>
            </div>
        </div>
    </footer>
    <!-- ========================== Footer section end ========================== -->



    <!-- ============================ scroll top start =========================== -->
    <a href="#" class="scrollToTop">
        <span class="wave-1"></span>
        <span class="wave-2"></span>
    </a>
    <!-- ============================= scroll top end ============================= -->

    <script src="appbetgana/assets/js/jquery.js"></script>
    <script src="appbetgana/assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="appbetgana/assets/js/bootstrap.bundle.min.js"></script>
    <script src="appbetgana/assets/js/progressbar.min.js"></script>
    <script src="appbetgana/assets/js/fontawesome.min.js"></script>
    <script src="appbetgana/assets/js/isotope.pkgd.min.js"></script>
    <script src="appbetgana/assets/js/counterup.js"></script>
    <script src="appbetgana/assets/js/swiper-bundle.min.js"></script>
    <script src="appbetgana/assets/js/wow.min.js"></script>
    <script src="appbetgana/assets/js/main.js"></script>
    <script src="/assets/js/form-betgana.js"></script>
</body>



</html>