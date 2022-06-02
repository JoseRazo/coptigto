@extends('layouts.front.app')

@section('title', 'CONÓCENOS')

@section('meta_site')
<meta name="resource-type" content="CONÓCENOS" />
<meta name="description"
    content="Somos un conjunto de Profesionistas del Estado de Guanajuato, con especialidades en Ingeniería y Licenciatura en Sistemas Computacionales, Ing. en Desarrollo de Software, Lic. en Informática e Ing. en Tecnologías de la Información, Ing. en Telecomunicaciones y sistemas electrónicos, que tomamos la iniciativa en el año 2017, de constituir legalmente con personas de carreras afines el COPTIGTO AC. siendo este un Colegio Autónomo cuyo objeto es mejorar continuamente la calidad del ejercicio profesional por medio de la actualización y bajo los principios de legalidad y ética, además de contribuir en la mejora de los programas de estudios en las Instituciones que así lo requieran y contribuir activamente en áreas de Innovación, Ciencia y Tecnología." />
<meta name="keywords"
    content="Licenciatura en Sistemas Computacionales, , Ing. en Desarrollo de Software, Lic. en Informática e Ing. en Tecnologías de la Información, Ing. en Telecomunicaciones y sistemas electrónicos, COPTIGTO, industria 4.0" />
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
    <img src="{{ asset('images/banner/banner1.jpg') }}" alt="" />
    <div class="parallax-overlay"></div>
    <!-- Subpage title start -->
    <div class="banner-title-content">
        <div class="text-center">
            <h2>Conócenos</h2>
            <ul class="breadcrumb">
                <li><a href="{{ route('home') }}"> Home</a></li>
                <li>Conócenos</li>
            </ul>
        </div>
    </div><!-- Subpage title end -->
</div><!-- Banner area end -->

<!-- Main container start -->
<section id="main-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading">
                <span class="title-icon pull-left"><i class="fa fa-suitcase"></i></span>
                <h2 class="title">COPTIGTO.A.C <span class="title-desc">Colegio de Profesionistas de Tecnologías de la
                        Información del Estado de Guanajuato</span></h2>
            </div>
        </div><!-- Title row end -->

        @include('layouts.front.about')
    </div>
    <!--/ container end -->
</section>
<!--/ Main container end -->
@endsection