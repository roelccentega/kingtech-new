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
    <title>Tinbet - Apuestas Deportivas</title>

    <link rel="stylesheet" href="{{asset('apptinbet/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('apptinbet/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('apptinbet/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('apptinbet/assets/css/icofont.min.css')}}">
    <link rel="stylesheet" href="{{asset('apptinbet/assets/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('apptinbet/assets/css/style.css')}}">
</head>

<body>
   


 
<style type="">
    
    @media(max-width: 768px)
    {
        .enlace-home{
            display: block;
        }
    }

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
                    <a class="navbar-brand" href="https://tinbet.pe/" target="blank">
                        <img src="assets/tinbet-logo1.png" alt="logo" width="185px">
                    </a>
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{url('/betgana')}}">Betgana </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/betganarace')}}">Bet Gana Race</a>
                            </li>
                        
                        </ul>

                        <a class="default-btn enlace-home ms-3 text-center" href="{{url('/')}}" ><span> <i>    </i>Volver a la página principal</span></a>
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
                <a class="footer__logo" href="https://www.tinbet.pe"><img src="assets/tinbet-logo1.png" alt="Tinbet" width="180px"></a>
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
                    <li class="social__item"><a href="https://www.facebook.com/tinbet.oficial" class="social__link"><i class="fa-brands fa-facebook"></i></a>
                    </li>
            
                    <li class="social__item"><a href="https://www.youtube.com/@tinbet.oficial" class="social__link"><i class="fa-brands fa-youtube"></i></a>
                    </li>
                    <li class="social__item"><a href="https://www.instagram.com/tinbet.pe.oficial/" class="social__link"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                    <li class="social__item"><a href="https://www.tiktok.com/@tinbet.oficial" class="social__link"><i class="fa-brands fa-tiktok"></i></a>
                  
                </ul>
            </div>
            <div class="footer__copyright">
                <p class="mb-0">Creado por <a href="">Kingtech</a></p>
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

    <script src="{{asset('apptinbet/assets/js/jquery.js')}}"></script>
    <script src="{{asset('apptinbet/assets/js/jquery-migrate-1.2.1.min.js')}}"></script>
    <script src="{{asset('apptinbet/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('apptinbet/assets/js/progressbar.min.js')}}"></script>
    <script src="{{asset('apptinbet/assets/js/fontawesome.min.js')}}"></script>
    <script src="{{asset('apptinbet/assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('apptinbet/assets/js/counterup.js')}}"></script>
    <script src="{{asset('apptinbet/assets/js/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('apptinbet/assets/js/wow.min.js')}}"></script>
    <script src="{{asset('apptinbet/assets/js/main.js')}}"></script>
    <script src="{{asset('assets/js/form-tinbet.js')}}"></script>
</body>


</html>