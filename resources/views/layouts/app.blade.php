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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Other css -->
    @yield('css-carousel-images')
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/icofont.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/odometer.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/lightcase.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css?v=12')}}">

    <title>Kingtech - Líder en Software de Apuestas Deportivas en Perú 🥇</title>
    <meta name="description" content="Empresa proveedor de Software Igaming, Apuestas Deportivas, Juegos Virtuales y Video Lotería para Casas y
Puntos de Apuestas en todo el Perú. " />
    <meta name="keywords" content="Casas de apuestas, Software de apuestas, Apuestas Deportivas, Video loteria">
    <meta name="author" content="Kingtech" />
  



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
<!-- Messenger Plugin de chat Code -->
    <div id="fb-root"></div>

 
    <style>
    .breadcrumb-item+.breadcrumb-item::before {
    float: left;
    padding-right: 0.5rem;
    color: #6c757d;
    content: var(--bs-breadcrumb-divider, "/");
}
.btn {
    display: inline-block;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: center;
    text-decoration: none;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
     padding: 0; 
     padding-left: 18%;
    font-size: 1rem;
    border-radius: 0.25rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
#wpp-fix a + .form-wpp form .btn, #wpp-fix button + .form-wpp form .btn {
     float: none;
    padding-top: 12px;
}

@media(max-width: 768px)
{
  .cart__content a, .header--innerpage .header__ellepsis i, .header--three .header__ellepsis i, .header--two .header__top .info__content p, .header__bottom .area .menu .search_cart ul li span, .header__bottom .area .menu ul li a, .sidebar__calculate button, .sidebar__radiolist .form-check .formcheck span, .sidebar__author .content ul li a, .pricing__body ul li b, .pricing__body ul li i.fa-circle-xmark, .pricing__item:hover .pricing__head p, .pricing__item.active .pricing__head p, .wwd--two .wwd__content .accordion-item .accordion-collapse .accordion-body p, .testimonial__pagination span, .team--deatils .team__thumb--info ul li .right ul li a, .team--deatils .team__thumb--info ul li .left p, .team--two .team__content ul li a, .approach--four .section__header h2, .service--three .sertab__content p, .service--two .service__pagination span, .progressbararea li .title p, .about__content ul li h5, .banner--three .banner__pagination span, .banner--two .banner__content .lab_btn_group .lab-btn.bg-transparate, .banner--one .banner__social ul li a i, .filters-button-group .filter-btn, .text-btn, .pagination li .page-link {
    color: #0B2239;
   
}
.fa-circle-info:before, .fa-info-circle:before {
    content: "\f05a";
    display: none;
}
}
</style>
</head>

<body>
   


    <!-- Search Area start here-->
    <div class="search">
        <div class="search__close">
            <i class="fa-solid fa-circle-xmark"></i>
        </div>
        <div class="search__area">
            <form action="#">
                <input type="text" name="s" placeholder="Sarch Here...">
                <button type="submit"><img src="{{asset('assets/images/header/icon/04.png')}}" alt="rajib raj"></button>
            </form>
        </div>
    </div>
    <!-- Search Area ending here -->

    
    @include('web.includes.header-main')

    @yield('content')

    @include('web.includes.footer')

<div id="wpp-fix" class="right shake">
  <button id="wpp-link" class="wpp-form wpp-link" data-href="https://api.whatsapp.com/send?text=Hola!&amp;phone=51965059553" data-wpp="51965059553">

    <span>Atención al Cliente</span>
    <img src="{{asset('/assets/whatsapp.png')}}" class="whatsapp-images">
  </button>

  <div class="form-wpp">

    <div class="head-wpp">
     <!--  <img src="{{asset('/assets/kingtech-atc.png')}}" loading="lazy"  width="50" height="50" class=" img-responsive 
      "  alt="Imagem perfil" > -->
      <h3>Atención al Cliente</h3>
      <i class="fas fa-times" id="close-bt"></i>
    </div>

    <div class="form-content">
      <p class="bus-msg">Hola, para brindarte información me podrías facilitar tu nombre, e-mail y teléfono 📝</p>

      <div role="form" class="wpcf7" id="f196-o3" lang="pt-BR" dir="ltr">
        <div class="screen-reader-response">
          <p role="status" aria-live="polite" aria-atomic="true"></p>
          <ul></ul>
        </div>

        <form action="#" class="form init theme_1 " id="wpp-form">

          <div class="campo">
          
            <input type="text" name="name" id="name" size="40" placeholder="nombre" required>
          </div>
          <div class="campo">
          
            <input type="text" name="dni" id="dni" size="40" placeholder="e-mail" required>
          </div>
          <div class="campo">
          
            <input type="text" name="id" id="id" size="40" placeholder="teléfono" required>
          </div>
         
          <br>
          <div class="campo pad-rpt">
            <div id="respuesta"></div>
          </div>  
   
          <div class="btn whatsapp">
            <input type="submit" id="submit2" value="Ir a WhatsApp" class="form-control has-spinner submit">

            <span class="spinner"></span>
          </div>
          <div class="response-output" aria-hidden="true"></div>

        </form>
      </div>
    </div>

  </div>
  <div class="mask"></div>
</div>

    <!-- All Scripts -->
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/swiper.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/js/circularProgressBar.min.js')}}"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/viewport.jquery.js')}}"></script>
    <script src="{{asset('assets/js/odometer.min.js')}}"></script>
    <script src="{{asset('assets/js/lightcase.js')}}"></script>
    <script src="{{asset('assets/js/functions.js')}}"></script>
    <script src="{{asset('assets/js/form-whatsapp.js')}}"></script>
    <script src="{{asset('assets/js/form-whatsapp2.js')}}"></script>
    <script src="{{asset('assets/js/formWahtsapp-Contact.js')}}"></script>
        @yield('script-carousel-images')

    <script type="text/javascript">

    const wppButton = document.getElementById('wpp-link');
    const mask = document.querySelector('#wpp-fix .mask');
  
    const closeButton = document.getElementById('close-bt');

    wppButton.onclick = function(e) { 
      wppButton.classList.add('hide-this')
    };

    mask.onclick = function(e) {
      wppButton.classList.remove('hide-this')
    };
    closeButton.onclick = function(e) {
      wppButton.classList.remove('hide-this')
    };

    

</script>


<!-- Messenger Plugin de chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin de chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "106322905856161");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v17.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
</body>


</html>