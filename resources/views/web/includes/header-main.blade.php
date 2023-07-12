  <!-- ==========Header Section Starts Here========== -->
    <header class="header header--one header--three">
        <!-- <div class="header__top">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-12">
                        <div class="info">
                            <ul>
                                <li>
                                    <img src="{{asset('assets/images/header/icon/01.png')}}" alt="kingtech" >
                                    <span>info@kingtech.pe</span>
                                </li>
                                <li>
                                    <img src="{{asset('assets/images/header/icon/02.png')}}" alt="kingtech" >
                                    <span>Lunes-Viernes : 08:00 pm - 22:00 pm</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="social text-xl-end">
                            <ul>
                                <li><a href="https://www.google.com/maps/place/Av.+Gral.+Antonio+Alvarez+de+Arenales+2523,+Lince+15046/@-12.089371,-77.0348,17z/data=!4m6!3m5!1s0x9105c85e3889d159:0x8ac4fa1a74e7c08a!8m2!3d-12.0893706!4d-77.0347996!16s%2Fg%2F11ts_wfyv0?hl=es-419" style="color: white" target="blank">
                                    <img src="{{asset('assets/images/header/icon/03.png')}}" alt="Mapa de Kingtech" >
                                    <span>Av. Gral. Antonio Alvarez de Arenales 2523, Lince 15046</span>
                                </a>
                                    
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <style type="">
            .img-logoh{
                    width: 150px
                }  
             .lab-btn:hover {
                background-color: #0B2239 !important;
               
                }
            @media(max-width: 768px)
            {
                    .none-menu
                {
                    display: none;
                }  
                .img-logoh{
                    width: 150px
                }  
            }
            
        </style>
        <div class="header__bottom">
            <div class="container-fluid">
                <div class="area">
                    <div class="logo">
                        <a href="
                        {{url('/')}}"><img src="{{asset('assets/king-blanco.png')}}" alt="logo" width="250px"></a>
                    </div>
                    <div class="main-menu">
                        <div class="menu">
                            <ul>
                                <li>
                                    <!-- <a href="{{url('/')}}" class="active">Inicio</a> -->
                                    
                                </li>
                                <li>
                                    <a href="{{url('/nosotros')}}">Nosotros</a>
                                   
                                   
                                   
                                </li>

                                <li>
                                    <a href="#0">Productos</a>
                                    <ul>
                                
                                        <li>
                                            <a href="#0">Apuestas Deportivas</a>
                                            <ul>
                                                <li><a href="{{url('/tinbet')}}"><img src="{{asset('assets/tinbet-logo1.png')}}" class="img-logoh" title="Tinbet - Apuestas Deportivas"></a></li>
                                                <li><a href="{{url('/betgana')}}"><img src="{{asset('/assets/betgana-blanco.png')}}" class="img-logoh" title="Betgana - Apuestas Deportivas"></a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#0">Juegos Virtuales</a>
                                            <ul>
                                                <!-- <li><a href="{{url('/video-loteria')}}">Máquinas de Video Lotería</a></li> -->
                                                <li><a href="{{url('/betganarace')}}"><img src="{{asset('/assets/betganarace-blanco.png')}}" class="img-logoh"></a></li>
                                                
                                            </ul>
                                        </li>
                                       
                                    </ul>
                                </li>
                               
                                <li>
                                    <a href="#0">Casa de Apuestas</a>
                                    <ul>
                                        <li><a href="{{url('/casa-de-apuestas')}}">Casas de Apuestas</a></li>
                                        <li><a href="{{url('/punto-de-apuestas')}}">Puntos de Apuestas</a></li>
                                
                                    </ul>
                                </li>
                             
                                <li>

                                            <a href="#0">Noticias</a>
                                            <ul>
                                                <li><a href="{{url('/eventos/peru-gaming-show')}}">Perú Gaming Show 2023</a></li>
                                         
                                            </ul>
                                        </li> 
                            </ul>
                            <div class="search_cart d-none d-xl-block">
                                <ul>
                                    <li class="" style="width: 88px">
                                        <a href="tel:51913069000">
                                            <img src="{{asset('assets/llamada.png')}}" alt="Llamada">    
                                        </a>
                                        
                                    </li>
                                    <li class="cart_icon" style="width: 88px">
                                        <a href="https://www.facebook.com/KingtechCorporation" target="_blank"><img src="{{asset('assets/facebook.png')}}" alt="Facebook en Tinbet" width="120px"></a>
                                    </li>
                                </ul>
                            </div>
                            <a href="{{url('/contacto')}}" class="lab-btn bg-title"> Contacto</a>
                        </div>
                        <div class="header__bararea">
                            
                            <div class="header__bar d-xl-none">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="header__ellepsis d-xl-none">
                                <i class="fa-solid fa-circle-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ==========Header Section Ends Here========== -->