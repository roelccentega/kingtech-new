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
        .width-query{
            width: 100%;
            height: 100%

        }
  
            .pad-parrafo{
                padding-bottom: 80px
            }
             .padding-tb {
    padding-top: 60px;
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
        .padding-tb {
    padding-top: 10px;
            }
             .width-query{
            width: 100%;
            height: 280px

        }
        .pad-parrafo{
                padding-bottom: 10px
            }
    }

/*vdeo*/

.none-mobile{
    display: block;
}
.none-desktop{
    display: none;
}
    @media(max-width: 768px){
        .none-mobile{
            display: none;
        }
        .none-desktop{
            display: block;
        }
    }

</style>
    <!-- ==========Banner Section Start Here========== -->
    <div class="pageheader padding-tb bg-img bg-breadcrumb" >
        <div class="container">
            <div class="pageheader__area text-center">
                <h2>Expo Feria Amázonica</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page" style="color: #009636">Expo Feria</li>
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
   <div class="col-lg-12 none-desktop">
                    <video class="width-query" controls autoplay loop poster="{{asset('assets/expo.png')}}">
                        <source src="https://tinbet.la/eventos/EXPOAMAZOINCA-TINBET-RESUMEN.mp4" type="video/mp4">
                   </video>   
                 </div>
                 <br>  
            	<div class=" col-lg-12 text-center pad-parrafo">
            		  <p style="font-size:28px; font-weight: 800"> Presentes en la ExpoAmazónica 2023</p>

<p style="font-size:19px;"> En Kingtech estamos contentos con nuestra participación en este prestigioso evento Amazónico. Nuestra misión va más allá de las franquicias, nos comprometemos a brindar e impulsar el motor de nuestra economía y ayudar a las familias peruanas a salir adelante con un negocio propio  👏</p>

<p style="font-size:19px;">Comuníquese con nosotros para obtener detalles para incursionar en el rubro de los juegos deportivos.</p>
            	</div>
          
                  <div class="col-lg-12 none-mobile">
                    <video class="width-query" controls autoplay loop poster="{{asset('assets/expo.png')}}">
                        <source src="{{asset('assets/EXPOAMAZOINCA-TINBET-RESUMEN.mp4')}}" type="video/mp4">
                   </video>   
                 </div>
                 <br>  
                  
                
                <div class="project__grid grid">
<br><br>
                    <div class="row justify-content-center g-4">
                           

                      
                        <div class="col-lg-4 col-sm-6 col-12 business">
                            <div class="project__item">
                                <div class="project__thumb">
                                    <img src="{{asset('/expoamazonica/expo-a.jpg')}}" alt="Expo Amázonica Tinbet">
                                </div>
                                <div class="project__content">
                                    <a href="{{asset('/expoamazonica/expo-a.jpg')}}" class="project__icon" data-rel="lightcase">
                                        <i class="fa-solid fa-maximize"></i>
                                    </a>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12 analyzing ">
                            <div class="project__item">
                                <div class="project__thumb">
                                    <img src="{{asset('/expoamazonica/expo-b.jpg')}}" alt="Expo Amázonica Tinbet">
                                </div>
                                <div class="project__content">
                                    <a href="{{asset('/expoamazonica/expo-b.jpg')}}" class="project__icon" data-rel="lightcase">
                                        <i class="fa-solid fa-maximize"></i>
                                    </a>
                                  
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 col-12 analyzing">
                            <div class="project__item">
                                <div class="project__thumb">
                                    <img src="{{asset('/expoamazonica/expo-c.jpg')}}" alt="Expo Amázonica Tinbet">
                                </div>
                                <div class="project__content">
                                    <a href="{{asset('/expoamazonica/expo-c.jpg')}}" class="project__icon" data-rel="lightcase">
                                        <i class="fa-solid fa-maximize"></i>
                                    </a>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12 business">
                            <div class="project__item">
                                <div class="project__thumb">
                                    <img src="{{asset('/expoamazonica/expo-d.jpg')}}" alt="Expo Amázonica Tinbet">
                                </div>
                                <div class="project__content">
                                    <a href="{{asset('/expoamazonica/expo-d.jpg')}}" class="project__icon" data-rel="lightcase">
                                        <i class="fa-solid fa-maximize"></i>
                                    </a>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12 financial">
                            <div class="project__item">
                                <div class="project__thumb">
                                    <img src="{{asset('/expoamazonica/expo-f.jpg')}}" alt="Expo Amázonica Tinbet">
                                </div>
                                <div class="project__content">
                                    <a href="{{asset('/expoamazonica/expo-f.jpg')}}" class="project__icon" data-rel="lightcase">
                                        <i class="fa-solid fa-maximize"></i>
                                    </a>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12 marketing">
                            <div class="project__item">
                                <div class="project__thumb">
                                    <img src="{{asset('/expoamazonica/expo-h.jpg')}}" alt="Expo Amázonica Tinbet">
                                </div>
                                <div class="project__content">
                                    <a href="{{asset('/expoamazonica/expo-h.jpg')}}" class="project__icon" data-rel="lightcase">
                                        <i class="fa-solid fa-maximize"></i>
                                    </a>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12 analyzing">
                            <div class="project__item">
                                <div class="project__thumb">
                                    <img src="{{asset('/expoamazonica/expo-j.jpg')}}" alt="Expo Amázonica Tinbet">
                                </div>
                                <div class="project__content">
                                    <a href="{{asset('/expoamazonica/expo-j.jpg')}}" class="project__icon" data-rel="lightcase">
                                        <i class="fa-solid fa-maximize"></i>
                                    </a>
                                  
                                </div>
                            </div>
                        </div>
                         <div class="col-lg-4 col-sm-6 col-12 marketing">
                            <div class="project__item">
                                <div class="project__thumb">
                                    <img src="{{asset('/expoamazonica/expo5.jpg')}}" alt="Expo Amázonica Tinbet">
                                </div>
                                <div class="project__content">
                                    <a href="{{asset('/expoamazonica/expo5.jpg')}}" class="project__icon" data-rel="lightcase">
                                        <i class="fa-solid fa-maximize"></i>
                                    </a>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12 financial">
                            <div class="project__item">
                                <div class="project__thumb">
                                    <img src="{{asset('/expoamazonica/expo6.jpg')}}" alt="Expo Amázonica Tinbet">
                                </div>
                                <div class="project__content">
                                    <a href="{{asset('/expoamazonica/expo6.jpg')}}" class="project__icon" data-rel="lightcase">
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
