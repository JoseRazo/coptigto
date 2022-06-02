@extends('layouts.front.app')

@section('title', 'CONTACTO')

@section('meta_site')
<meta name="resource-type" content="CONTACTO" />
<meta name="description"
    content="Somos un conjunto de Profesionistas del Estado de Guanajuato, con especialidades en Ingeniería y Licenciatura en Sistemas Computacionales, Ing. en Desarrollo de Software, Lic. en Informática e Ing. en Tecnologías de la Información, Ing. en Telecomunicaciones y sistemas electrónicos, que tomamos la iniciativa en el año 2017, de constituir legalmente con personas de carreras afines el COPTIGTO AC. siendo este un Colegio Autónomo cuyo objeto es mejorar continuamente la calidad del ejercicio profesional por medio de la actualización y bajo los principios de legalidad y ética, además de contribuir en la mejora de los programas de estudios en las Instituciones que así lo requieran y contribuir activamente en áreas de Innovación, Ciencia y Tecnología." />
<meta name="keywords"
    content="DESARROLLO DE APLICACIONES, Diseño de Aplicaciones con altos Estándares de Calidad, Modelo CMMI (Internacional),  Creación personalizada de aplicaciones, Sector Turismo, Productoras Sector Agroindustrial,  Productoras Mercado Artesanal, Comercio, Educación a distancia" />
@endsection

@section('meta_og')
<meta property="og:title" content="COPTIGTO.A.C" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ request()->url() }}" />
<meta property="og:image" content="{{ asset('/images/slider/slider-bg-1.jpg') }}" />
<meta property="og:site_name" content="COPTIGTO.A.C" />
<meta property="og:description"
    content="Incorporar nuevos proyectos que permitan vincular al talento con la necesidad social de innovar, aprender y trascender para un mejor entorno." />
<meta property="article:publisher" content="" />
<meta property="fb:app_id" content="" />
<meta property="fb:admins" content="" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="" />
<meta name="twitter:creator" content="" />
<meta name="twitter:domain" content="COPTIGTO.A.C" />
<meta name="twitter:title" content="COPTIGTO.A.C" />
<meta name="twitter:description"
    content="Consta de un Consejo Directivo, cuyo periodo de Gestión se renueva cada tres años, conforme a los estatutos establecidos por el Colegio. El Colegiado admite socios desde el último semestre ó cuatrimestre de cualquier carrera afín, de tal manera que permita a los nuevos profesionistas incorporarse a las empresas de la región o bien generar su propia empresa de base tecnológica con el respaldo y asesoría que brinda el Colegio." />
<meta name="twitter:image" content="{{ asset('/images/slider/slider-bg-2.jpg') }}" />
<meta itemprop="image" content="{{ asset('/images/services/img-servicio-reclutamiento.jpg') }}" />
@endsection

@section('content')
<div id="banner-area">
    <img src="{{ asset('images/banner/banner3.jpg') }}" alt="" />
    <div class="parallax-overlay"></div>
    <!-- Subpage title start -->
    <div class="banner-title-content">
        <div class="text-center">
            <h2>Contáctenos</h2>
            <ul class="breadcrumb">
                <li><a href="{{ route('home') }}"> Home</a></li>
                <li>Contacto</li>
            </ul>
        </div>
    </div><!-- Subpage title end -->
</div><!-- Banner area end -->

<!-- Main container start -->
<section id="main-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12 contact-info">
                <h3>Formulario de Contacto</h3>
                <p class="text-justify">Para enviarnos un email por favor emplee el siguiente formulario, recuerde
                    completar los campos requeridos del mismo para permitirnos responderle a la brevedad.</p>
                <small class="text-danger">* (denota el campo requerido)</small>
                <form id="contact-form" method="post" action="{{ route('contact.post') }}" role="form">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Nombre: <span class="text-danger">*</span></label>
                                <input class="form-control" name="name" id="name" placeholder="" type="text" required>
                                @if ($errors->has('name'))
                                <small class="form-text text-danger">{{ $errors->first('name') }}</small>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Email: <span class="text-danger">*</span></label>
                                <input class="form-control" name="email" id="email" placeholder="" type="email"
                                    required>
                                @if ($errors->has('email'))
                                <small class="form-text text-danger">{{ $errors->first('email') }}</small>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Asunto: <span class="text-danger">*</span></label>
                                <input class="form-control" name="subject" id="subject" placeholder="" required>
                                @if ($errors->has('subject'))
                                <small class="form-text text-danger">{{ $errors->first('subject') }}</small>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Mensaje: <span class="text-danger">*</span></label>
                        <textarea class="form-control" name="message" id="message" placeholder="" rows="10"
                            required></textarea>
                        @if ($errors->has('message'))
                        <small class="form-text text-danger">{{ $errors->first('message') }}</small>
                        @endif
                    </div>
                    <div class="text-right"><br>
                        <button class="btn btn-primary solid blank" type="submit">Enviar Mensaje</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <h3>Detalles de Contacto</h3>
            <div class="col-md-6">
                <p><i class="fa fa-user info"></i> MISW. Joanna Elizabeth Mata Silva </p>
                <p><i class="fa fa-bookmark info"></i> Presidenta COPTIGTO AC </p>
                <a href="mailto:jmata@coptigto.org"><i class="fa fa-envelope info"></i> jmata@coptigto.org</a>
                <hr class="title-border">
                <p><i class="fa fa-user info"></i> MISW. Jaime Eduardo Gómez García </p>
                <p><i class="fa fa-bookmark info"></i> Vicepresidencia de Redes y Telecomunicaciones </p>
                <a href="mailto:egomez@coptigto.org"><i class="fa fa-envelope info"></i> egomez@coptigto.org</a>
                <hr class="title-border">
                <p><i class="fa fa-user info"></i> MIS. Marco Aurelio Ramírez </p>
                <p><i class="fa fa-bookmark info"></i> Vicepresidente Regional Valle de Santiago y Vinculación
                    Universitaria </p>
                <a href="mailto:mramirez@coptigto.org"><i class="fa fa-envelope info"></i> mramirez@coptigto.org</a>
                <hr class="title-border">
                <p><i class="fa fa-user info"></i> Dr. Filiberto Durán </p>
                <p><i class="fa fa-bookmark info"></i> Vicepresidente Región Celaya y Vinculación Gubernamental </p>
                <a href="mailto:fduran@coptigto.org"><i class="fa fa-envelope info"></i> fduran@coptigto.org</a>
                <hr class="title-border">
            </div>
            <div class="col-md-6">
                <p><i class="fa fa-user info"></i> LI. Moisés Muñoz </p>
                <p><i class="fa fa-bookmark info"></i> Proyectos Educativos (Robótica y Programación) </p>
                <a href="mailto:mmunoz@coptigto.org"><i class="fa fa-envelope info"></i> mmunoz@coptigto.org</a>
                <hr class="title-border">
                <p><i class="fa fa-user info"></i> Ing. David López Ammirata </p>
                <p><i class="fa fa-bookmark info"></i> Proyectos de Innovación y Fomento al Talento </p>
                <a href="mailto:dlopez@coptigto.org"><i class="fa fa-envelope info"></i> dlopez@coptigto.org</a>
                <hr class="title-border">
                <p><i class="fa fa-user info"></i> MTI. Luis Alberto Torres Castro </p>
                <p><i class="fa fa-bookmark info"></i> Vicepresidente Regional Salamanca, Difusión y Comunicación </p>
                <a href="mailto:ltorres@coptigto.org"><i class="fa fa-envelope info"></i> ltorres@coptigto.org</a>
                <hr class="title-border">
                <p><i class="fa fa-user info"></i> Ing.Sandra Beristain Arroyo </p>
                <p><i class="fa fa-bookmark info"></i> Vicepresidencia Regional León y Asesora de Negocios Productivos
                </p>
                <a href="mailto:sberistain@coptigto.org"><i class="fa fa-envelope info"></i> sberistain@coptigto.org</a>
                <hr class="title-border">
            </div>
        </div>
    </div>
    <!--/ container end -->
</section>
<!--/ Main container end -->
@endsection

@section('scripts')
<script type="text/javascript">
toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-bottom-center",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "10000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
}
@if(Session::has('message'))
var type = "{{ Session::get('alert-type', 'success') }}"

switch (type) {
    case 'success':
        toastr.success("{{ Session::get('message') }}");
        break;
    case 'info':
        toastr.info("{{ Session::get('message') }}");
        break;
    case 'warning':
        toastr.warning("{{ Session::get('message') }}");
        break;
    case 'error':
        toastr.error("{{ Session::get('message') }}");
        break;
}
@endif
</script>
@endsection