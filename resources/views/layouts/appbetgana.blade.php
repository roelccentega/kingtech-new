<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Betgana</title>
 
    <link rel="stylesheet" href="appbetgana/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="appbetgana/assets/css/all.min.css">
    <link rel="stylesheet" href="appbetgana/assets/css/animate.css">
    <link rel="stylesheet" href="appbetgana/assets/css/icofont.min.css">
    <link rel="stylesheet" href="appbetgana/assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="appbetgana/assets/css/style.css">
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
                        <a class="default-btn ms-3" href="{{url('/')}}" ><span>Volver a la página principal</span></a>
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
                <a class="footer__logo" href="index.html"><img src="/assets/logo-blanco-betgana.png" width="185px" alt="Bio" width="180px"></a>
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
                    <li class="social__item"><a href="#" class="social__link"><i class="fa-brands fa-dribbble"></i></a>
                    </li>
                    <li class="social__item"><a href="#" class="social__link"><i class="fa-brands fa-linkedin"></i></a>
                    </li>
                    <li class="social__item"><a href="#" class="social__link"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                    <li class="social__item"><a href="#" class="social__link"><i class="fa-brands fa-behance"></i></a>
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