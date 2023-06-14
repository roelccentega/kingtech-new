<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Other css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/odometer.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <link rel="stylesheet" href="assets/css/style.css?v=4">

    <title>Sportbetperú</title>
    <style>
    .breadcrumb-item+.breadcrumb-item::before {
    float: left;
    padding-right: 0.5rem;
    color: #6c757d;
    content: var(--bs-breadcrumb-divider, "/");
}
</style>
</head>

<body>
    <!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader ending here -->


    <!-- Search Area start here-->
    <div class="search">
        <div class="search__close">
            <i class="fa-solid fa-circle-xmark"></i>
        </div>
        <div class="search__area">
            <form action="#">
                <input type="text" name="s" placeholder="Sarch Here...">
                <button type="submit"><img src="assets/images/header/icon/04.png" alt="rajib raj"></button>
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
    <img src="/assets/whatsapp.png" class="whatsapp-images">
  </button>

  <div class="form-wpp">

    <div class="head-wpp">
      <img src="/assets/TINBBET.jpg" loading="lazy" decoding="aync" width="50" height="50" class=" img-responsive wp-image-228" srcset="" sizes="(max-width: 50px) 100vw, 50px" alt="Imagem perfil">
      <h3>Atención al Cliente</h3>
      <i class="fas fa-times" id="close-bt"></i>
    </div>

    <div class="form-content">
      <p class="bus-msg">Hola, para brindarte información me podrías facilitar tu nombre completo, número de DNI y teléfono 🤓</p>

      <div role="form" class="wpcf7" id="f196-o3" lang="pt-BR" dir="ltr">
        <div class="screen-reader-response">
          <p role="status" aria-live="polite" aria-atomic="true"></p>
          <ul></ul>
        </div>

        <form action="#" class="form init theme_1 " id="wpp-form">

          <div class="campo">
          
            <input type="text" name="name" id="name" size="40" placeholder="Nombre Completo" required>
          </div>
          <div class="campo">
          
            <input type="text" name="dni" id="dni" size="40" placeholder="DNI" required>
          </div>
          <div class="campo">
          
            <input type="text" name="id" id="id" size="40" placeholder="Telefono" required>
          </div>
         
          <br>
          <div class="campo pad-rpt">
            <div id="respuesta"></div>
          </div>  
   
          <div class="btn whatsapp">
            <input type="submit" id="submit2" value="Enviar a WhatsApp" class="form-control has-spinner submit">

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
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/circularProgressBar.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/viewport.jquery.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/lightcase.js"></script>
    <script src="assets/js/functions.js"></script>
    <script src="assets/js/form-whatsapp.js"></script>
    <script src="assets/js/form-whatsapp2.js"></script>
    <script src="assets/js/formWahtsapp-Contact.js"></script>

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
</body>


</html>