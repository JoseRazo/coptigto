@extends('layouts.front.app')

@section('title', 'PROYECTOS')

@section('meta_site')
<meta name="resource-type" content="PROYECTOS" />
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
    <img src="{{ asset('images/banner/banner1.jpg') }}" alt="" />
    <div class="parallax-overlay"></div>
    <!-- Subpage title start -->
    <div class="banner-title-content">
        <div class="text-center">
            <h2>Proyectos</h2>
            <ul class="breadcrumb">
                <li><a href="{{ route('home') }}"> Home</a></li>
                <li>Proyectos</li>
            </ul>
        </div>
    </div><!-- Subpage title end -->
</div><!-- Banner area end -->

<!-- Main container start -->
<section id="main-container">
    <div class="container">
        <section id="image-block" class="image-block no-padding">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 ts-padding"
                        style="height:650px;background:url({{ asset('images/image-block-bg.jpg') }}) 50% 50% / cover no-repeat;">
                    </div>
                    <div class="col-md-6 ts-padding img-block-right">
                        <div class="img-block-head text-center">
                            <h3>DESARROLLO DE PROYECTOS EN:</h3>
                            <ul class="unstyled arrow">
                                <li>DESARROLLO DE APLICACIONES</li>
                                <li>Diseño de Aplicaciones con altos Estándares de Calidad</li>
                                <li>Modelo CMMI (Internacional)</li>
                                <li>Creación personalizada de aplicaciones para:</li>
                                <li>Sector Turismo</li>
                                <li>Productoras Sector Agroindustrial</li>
                                <li>Productoras Mercado Artesanal</li>
                                <li>Comercio</li>
                                <li>Educación a distancia</li>
                            </ul>
                            <h2>PROYECTOS EN CURSO</h2>
                            <ul class="unstyled arrow">
                                <li>Laboratorio de Industria 4.0</li>
                                <li>Centro de capacitación y desarrollo del talento</li>
                                <li>Certificación a profesionistas en Industria 4.o para el desarrollo de competetencias</li>
                                <li>Integración al Clúster Nacional de Innovación</li>
                                <li> Integración a Cámaras y organismos del sector a nivel estatal y nacional</li>
                                <li>Vinculación e intercambio de profesionistas en Investigación con EUA, España y CANADA</li>
                            </ul>
                        </div>

                        <div class="gap-30"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--/ container end -->
</section>
<!--/ Main container end -->
@endsection