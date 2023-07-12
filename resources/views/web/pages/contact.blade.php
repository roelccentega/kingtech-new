@extends('layouts.app')
@section('content')
<style type="">
    .bg-breadcrumb{
        background-image: url(assets/headder.png);
        display: block;
    }
    .text-p{
            display: block;
        }
     .block-address{
        display: none
     }
     .pad-10
     {
        padding-top:50px;
     }
    @media(max-width: 768px)
    {
     
     .bg-breadcrumb{
        background-image: url(assets/inicio-header2.jpg);
        display: block;
        }   
        .text-p{
            display: none
        }
        .none-address{
            display: none;
        }
        .block-address{
        display: block
     }
     .pad-10
     {
        padding-top:10px;
     }
    }
    .contacts-widget .contacts-info-list > li {
    position: relative;
    padding-left: 50px;
    min-height: 32px;
    display: table;
}
.contacts-widget .contacts-info-list > li > .fa {
    display: block;
    position: absolute;
    left: 0;
    top: 0;
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: #009636;
    line-height: 32px;
    font-size: 14px;
    color: #fff;
    text-align: center;
}
.contacts-widget .contacts-info-list > li .info-item {
    display: table-cell;
    vertical-align: middle;
}
</style>

   <!-- ==========Banner Section Start Here========== -->
    <div class="pageheader padding-tb bg-img bg-breadcrumb">
        <div class="container">
            <div class="pageheader__area text-center">
                <h2>Contáctenos</h2>
                <p style="color: #fff" class="text-p">¿Tienes alguna duda? Nuestro equipo de asesores con gusto le atenderán.</p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{URL('/')}}">Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page" style="color: #009636">Contacto</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

 

    
    <!-- ==========Contact Section Start Here========== -->
    <div class="contact padding-tb contact--one contact--three bg-img" style="background-image: url(assets/images/bg/14.jpg);">
        <div class="container">
            <div class="section__header text-center">
                <h5 style="color: #009636">Ponerse en contacto!</h5>
                <h2>¿Tiene Alguna Pregunta? No Dude En Ponerse En Contacto Con Nosotros.</h2>
            </div>
             <div class="row contacts-widget widget widget__sidebar justify-content-center g-4">
                    <div class="col-lg-4">
                        <ul class="contacts-info-list pad-10">
                                        <li>
                                            <i class="fa fa-map-marker"></i>
                                            <div class="info-item">
                                               Av. Arenales 2523 San Isidro
                                            </div>
                                        </li>
                                        <br>
                                        <li>
                                            <i class="fa fa-phone"></i>
                                            <div class="info-item">
                                                <a href="tel:51913069000">
                                                +51 913 069 000    
                                                </a>
                                                
                                            </div>
                                        </li>
                                        <br>
                                        <li>
                                            <i class="fa fa-envelope"></i>
                                                <a href="mailto:info@kingtech.pe">info@kingtech.pe</a>
                                            <span class="info-item">
                                            </span>
                                        </li>
                                        
                                      
                                    </ul>
                                  
                    </div>
                    <div class="col-lg-8">  
                     <div class="section__wrapper">
                <form action="" id="contact-form" >
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-6">   
                        </div>
                        <div class="col-lg-6">   
                        </div>

                        <div class="col-md-6 col-12">
                            <input type="text" placeholder="Nombre*" name="name" id="name" >
                        </div>
                        <div class="col-md-6 col-12">
                            <input type="email" placeholder="Correo*" name="email" id="email" >
                        </div>
                          <div class="col-md-6 col-12">
                            <input type="text" placeholder="Teléfono " name="phone" id="phone">
                        </div>
                        <div class="col-md-6 col-12">
                            <input type="text" placeholder="Asunto" name="subject" id="subject">
                        </div>
                      
                        <div class="col-12">
                            <textarea name="content" id="content" rows="6" placeholder="Escriba su mensaje*" ></textarea>
                        </div>
                        <br>
 
                        <div class="campo pad-rpt">
                                <div id="respuesta"></div>
                        </div>  
                         
                     
                        <br>
                        <div class="col-12 text-center">
                            <button type="submit" id="submit3" class="lab-btn border-0">Enviar su mensaje<i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                    <p class="form-message"></p>
                </form>
            </div> 
                </div>
                  
                </div>

       
        </div>
    </div>
    <!-- ==========Contact Section Ends Here========== -->

    
    <!-- ==========Google map Section Start Here========== -->
    <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1950.6658975923506!2d-77.03489716111956!3d-12.08942306529975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c85e40a590eb%3A0x6719e454a771a6c4!2sAv.%20Arenales%202523%2C%20San%20Isidro%2015046!5e0!3m2!1ses-419!2spe!4v1604335250047!5m2!1ses-419!2spe" class="video-play-icon text-primary" style="border:0" allowfullscreen=""></iframe>
    </div>
    <!-- ==========Google map Section Ends Here========== -->


@endsection