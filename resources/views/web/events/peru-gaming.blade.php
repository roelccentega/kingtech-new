@extends('layouts.app')
@section('css-carousel-images')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css">
@endsection
@section('content')

<style type="">
    .bg-breadcrumb{
        background-image: url({{asset('assets/headder.png')}});
        display: block;
    }
    .text-p{
            display: block;
        }
     
    @media(max-width: 768px)
    {
     
     .bg-breadcrumb{
        background-image: url({{asset('assets/inicio-header2.jpg')}});
        display: block;
        }   
        .text-p{
            display: none
        }
    }

</style>
    <!-- ==========Banner Section Start Here========== -->
    <div class="pageheader padding-tb bg-img bg-breadcrumb" >
        <div class="container">
            <div class="pageheader__area text-center">
                <h2>Perú Gaming Show</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page" style="color: #009636">PGS</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- ==========Banner Section Ends Here========== -->


    <!-- ==========Project Section Start Here========== -->
    <div class="project project--four padding-tb">
        <div class="container">
            <div class="section__wrapper">
            	<div class=" col-lg-12 text-center">
            		  <p>El <b>14</b> y <b>15</b> de junio fuimos unos de los protagonistas del <b>Perú Gaming Show 2023</b>, realizado en el Centro de Convenciones del Jockey Plaza, se logró brindar información rápida y directa al público sobre una inversión emocionante en el mundo de los <b>juegos deportivos.</b> 🌍🎮
                    </p>
					<p>Nuestros establecimientos ofrecen un negocio de vanguardia, con instalaciones de primer nivel y experiencias únicas para los amantes del deporte. ⚽⛳</p>
					<p>Aprovecha esta oportunidad para ser parte de una industria con amplia experiencia y deja tu huella en el mundo del entretenimiento. 🌟</p>
            	</div>
            	<br><br><br>
                
                <div class="project__grid grid">

                    <div class="row justify-content-center g-4">

                      
                        <div class="col-lg-4 col-sm-6 col-12 business">
                            <div class="project__item">
                                <div class="project__thumb">
                                    <img src="{{asset('/pgs/fot-2.png')}}" alt="rajib raj">
                                </div>
                                <div class="project__content">
                                    <a href="{{asset('/pgs/fot-2.png')}}" class="project__icon" data-rel="lightcase">
                                        <i class="fa-solid fa-maximize"></i>
                                    </a>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12 analyzing ">
                            <div class="project__item">
                                <div class="project__thumb">
                                    <img src="{{asset('/pgs/fot-3.png')}}" alt="rajib raj">
                                </div>
                                <div class="project__content">
                                    <a href="{{asset('/pgs/fot-3.png')}}" class="project__icon" data-rel="lightcase">
                                        <i class="fa-solid fa-maximize"></i>
                                    </a>
                                  
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 col-12 analyzing">
                            <div class="project__item">
                                <div class="project__thumb">
                                    <img src="{{asset('/pgs/fot-6.png')}}" alt="rajib raj">
                                </div>
                                <div class="project__content">
                                    <a href="{{asset('/pgs/fot-6.png')}}" class="project__icon" data-rel="lightcase">
                                        <i class="fa-solid fa-maximize"></i>
                                    </a>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12 business">
                            <div class="project__item">
                                <div class="project__thumb">
                                    <img src="{{asset('/pgs/fot-7.png')}}" alt="rajib raj">
                                </div>
                                <div class="project__content">
                                    <a href="{{asset('/pgs/fot-7.png')}}" class="project__icon" data-rel="lightcase">
                                        <i class="fa-solid fa-maximize"></i>
                                    </a>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12 financial">
                            <div class="project__item">
                                <div class="project__thumb">
                                    <img src="{{asset('/pgs/fot-8.png')}}" alt="rajib raj">
                                </div>
                                <div class="project__content">
                                    <a href="{{asset('/pgs/fot-8.png')}}" class="project__icon" data-rel="lightcase">
                                        <i class="fa-solid fa-maximize"></i>
                                    </a>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12 marketing">
                            <div class="project__item">
                                <div class="project__thumb">
                                    <img src="{{asset('/pgs/fot-9.png')}}" alt="rajib raj">
                                </div>
                                <div class="project__content">
                                    <a href="{{asset('/pgs/fot-9.png')}}" class="project__icon" data-rel="lightcase">
                                        <i class="fa-solid fa-maximize"></i>
                                    </a>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12 analyzing">
                            <div class="project__item">
                                <div class="project__thumb">
                                    <img src="{{asset('/pgs/fot-10.png')}}" alt="rajib raj">
                                </div>
                                <div class="project__content">
                                    <a href="{{asset('/pgs/fot-10.png')}}" class="project__icon" data-rel="lightcase">
                                        <i class="fa-solid fa-maximize"></i>
                                    </a>
                                  
                                </div>
                            </div>
                        </div>
                         <div class="col-lg-4 col-sm-6 col-12 marketing">
                            <div class="project__item">
                                <div class="project__thumb">
                                    <img src="{{asset('/pgs/fot-5.png')}}" alt="rajib raj">
                                </div>
                                <div class="project__content">
                                    <a href="{{asset('/pgs/fot-5.png')}}" class="project__icon" data-rel="lightcase">
                                        <i class="fa-solid fa-maximize"></i>
                                    </a>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12 financial">
                            <div class="project__item">
                                <div class="project__thumb">
                                    <img src="{{asset('/pgs/fot-4.png')}}" alt="rajib raj">
                                </div>
                                <div class="project__content">
                                    <a href="{{asset('/pgs/fot-4.png')}}" class="project__icon" data-rel="lightcase">
                                        <i class="fa-solid fa-maximize"></i>
                                    </a>
                                  
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-lg-4 col-sm-6 col-12 financial">
                            <div class="project__item">
                                <div class="project__thumb">
                                    <img src="{{asset('/pgs/fot-11.png')}}" alt="rajib raj">
                                </div>
                                <div class="project__content">
                                    <a href="{{asset('/pgs/fot-11.png')}}" class="project__icon" data-rel="lightcase">
                                        <i class="fa-solid fa-maximize"></i>
                                    </a>
                                  
                                </div>
                            </div>
                        </div>
                          <div class="col-lg-4 col-sm-6 col-12 marketing">
                            <div class="project__item">
                                <div class="project__thumb">
                                    <img src="{{asset('/pgs/fot-1.png')}}" alt="rajib raj">
                                </div>
                                <div class="project__content">
                                    <a href="{{asset('/pgs/fot-1.png')}}" class="project__icon" data-rel="lightcase">
                                        <i class="fa-solid fa-maximize"></i>
                                    </a>
                                  
                                </div>
                            </div>
                        </div>
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Project Section Ends Here========== -->


@endsection
