@extends('layouts.front.app')

@section('title', 'Home')

@section('meta_site')
<meta name="resource-type" content="Homepage" />
<meta name="description"
    content="Somos un conjunto de Profesionistas del Estado de Guanajuato, con especialidades en Ingeniería y Licenciatura en Sistemas Computacionales, Ing. en Desarrollo de Software, Lic. en Informática e Ing. en Tecnologías de la Información, Ing. en Telecomunicaciones y sistemas electrónicos, que tomamos la iniciativa en el año 2017, de constituir legalmente con personas de carreras afines el COPTIGTO AC. siendo este un Colegio Autónomo cuyo objeto es mejorar continuamente la calidad del ejercicio profesional por medio de la actualización y bajo los principios de legalidad y ética, además de contribuir en la mejora de los programas de estudios en las Instituciones que asi lo requieran y contribuir activamente en áreas de Innovación, Ciencia y Tecnología. Consta de un Consejo Directivo, cuyo periodo de Gestión se renueva cada tres años, conforme a los estatutos establecidos por el Colegio. El Colegiado admite socios desde el último semestre ó cuatrimestre de cualquier carrera afín, de tal manera que permita a los nuevos profesionistas incorporarse a las empresas de la región o bien generar su propia empresa de base tecnológica con el respaldo y asesoría que brinda el Colegio." />
<meta name="keywords"
    content="" />
@endsection

@section('meta_og')
<meta property="og:title" content="COLEGIO DE PROFESIONISTAS DE TECNOLOGÍAS DE LA INFORMACIÓN DEL ESTADO DE GUANAJUATO A.C." />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ request()->url() }}" />
<meta property="og:image" content="{{ asset('/images/slider/slider-bg-1.jpg') }}" />
<meta property="og:site_name" content="COLEGIO DE PROFESIONISTAS DE TECNOLOGÍAS DE LA INFORMACIÓN DEL ESTADO DE GUANAJUATO A.C." />
<meta property="og:description"
    content="Incorporar nuevos proyectos que permitan vincular al talento con la necesidad social de innovar,aprender ytrascender paraun mejor entorno." />
<meta property="article:publisher" content="" />
<meta property="fb:app_id" content="" />
<meta property="fb:admins" content="" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="" />
<meta name="twitter:creator" content="" />
<meta name="twitter:domain" content="COLEGIO DE PROFESIONISTAS DE TECNOLOGÍAS DE LA INFORMACIÓN DEL ESTADO DE GUANAJUATO A.C." />
<meta name="twitter:title" content="COLEGIO DE PROFESIONISTAS DE TECNOLOGÍAS DE LA INFORMACIÓN DEL ESTADO DE GUANAJUATO A.C." />
<meta name="twitter:description" content=" Motivar y colaborar en proyectos que tengan como misión fomentar la investigación, la ciencia y la tecnología desde la educación básica hasta la profesional." />
<meta name="twitter:image" content="{{ asset('/images/slider/slider-bg-2.jpg') }}" />
<meta itemprop="image" content="{{ asset('/images/services/img-servicio-reclutamiento.jpg') }}" />
@endsection

@section('content')
@include('layouts.front.slider')
@include('layouts.front.news')
@include('layouts.front.training')
@include('layouts.front.investigation')
@include('layouts.front.collaboration')
@endsection