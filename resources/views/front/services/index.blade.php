@extends('layouts.front.app')

@section('title', 'SERVICIOS')

@section('meta_site')
<meta name="resource-type" content="SERVICIOS" />
<meta name="description"
    content="Somos un conjunto de Profesionistas del Estado de Guanajuato, con especialidades en Ingeniería y Licenciatura en Sistemas Computacionales, Ing. en Desarrollo de Software, Lic. en Informática e Ing. en Tecnologías de la Información, Ing. en Telecomunicaciones y sistemas electrónicos, que tomamos la iniciativa en el año 2017, de constituir legalmente con personas de carreras afines el COPTIGTO AC. siendo este un Colegio Autónomo cuyo objeto es mejorar continuamente la calidad del ejercicio profesional por medio de la actualización y bajo los principios de legalidad y ética, además de contribuir en la mejora de los programas de estudios en las Instituciones que así lo requieran y contribuir activamente en áreas de Innovación, Ciencia y Tecnología." />
<meta name="keywords"
    content="Educación continúa, Diplomados en Universidades en convenio,  Congresos, foros y eventos relacionados con la Innovación, ciencia y la Tecnología, Participación en cursos de capacitación a Instituciones solicitantes, Acceso a programas de certificación, Vinculación de triple Hélice, Academia, Industria, Gobierno" />
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
            <h2>Servicios</h2>
            <ul class="breadcrumb">
                <li><a href="{{ route('home') }}"> Home</a></li>
                <li>Servicios</li>
            </ul>
        </div>
    </div><!-- Subpage title end -->
</div><!-- Banner area end -->

<!-- Main container start -->
<section id="main-container">
    <div class="container">
        <!-- Services -->

        <div class="row">
            <div class="col-md-12 heading">
                <span class="title-icon classic pull-left"><i class="fa fa-cogs"></i></span>
                <h2 class="title classic">Nuestros Servicios</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".5s">
                    <div class="service-content text-center">
                        <span class="service-icon icon-pentagon"><i class="fa fa-book"></i></span>
                        <h3>Educación continúa</h3>
                    </div>
                </div>
                <!--/ End first service -->

                <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".8s">
                    <div class="service-content text-center">
                        <span class="service-icon icon-pentagon"><i class="fa fa-file"></i></span>
                        <h3>Diplomados en Universidades en convenio</h3>
                    </div>
                </div>
                <!--/ End Second service -->

                <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay="1.1s">
                    <div class="service-content text-center">
                        <span class="service-icon icon-pentagon"><i class="fa fa-bullhorn"></i></span>
                        <h3>Congresos, foros y eventos relacionados con la Innovación, ciencia y la Tecnología</h3>
                    </div>
                </div>
                <!--/ End Third service -->
            </div>
        </div><!-- Content 1st row end -->

        <div class="gap-40"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".5s">
                    <div class="service-content text-center">
                        <span class="service-icon icon-pentagon"><i class="fa fa-university"></i></span>
                        <h3>Participación en cursos de capacitación a Instituciones solicitantes</h3>
                    </div>
                </div>
                <!--/ End first service -->

                <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".8s">
                    <div class="service-content text-center">
                        <span class="service-icon icon-pentagon"><i class="fa fa-bookmark"></i></span>
                        <h3> Acceso a programas de certificación</h3>
                    </div>

                </div>
                <!--/ End Second service -->

                <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay="1.1s">
                    <div class="service-content text-center">
                        <span class="service-icon icon-pentagon"><i class="fa fa-connectdevelop"></i></span>
                        <h3>Vinculación de triple Hélice ( Academia, Industria, Gobierno)</h3>
                    </div>
                </div>
                <!--/ End Third service -->

            </div>
        </div><!-- Content 2nd row end -->

        <!-- Services end -->
    </div>
    <!--/ container end -->
</section>
<!--/ Main container end -->
@endsection