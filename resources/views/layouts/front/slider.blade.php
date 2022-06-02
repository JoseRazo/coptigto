<!-- Slider start -->
<section id="home" class="no-padding">
    <!-- Carousel -->
    <div id="main-slide" class="carousel slide" data-ride="carousel">
        <div class="overlay"></div>
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#main-slide" data-slide-to="0" class="active"></li>
            <li data-target="#main-slide" data-slide-to="1"></li>
            <li data-target="#main-slide" data-slide-to="2"></li>
        </ol>
        <!--/ Indicators end-->

        <!-- Carousel inner -->
        <div class="carousel-inner">
            <!--/ Carousel item end -->
            <div class="item active">
                <img class="img-responsive" src="{{ asset('images/slider/banner-coptigto-quienes-somos.png') }}"
                    alt="slider">
                <div class="slider-content">
                    <div class="col-md-12 text-center">
                        <h2 class="animated2">
                            Colegio Autónomo
                        </h2>
                        <h3 class="animated3">
                            Innovación - Economía del conocimiento - Industria 4.0
                        </h3>
                        <p class="animated4"><a href="{{ route('about') }}" class="slider btn btn-primary white">Leer
                                Más</a></p>
                    </div>
                </div>
            </div>
            <!--/ Carousel item end -->
            <div class="item">
                <img class="img-responsive" src="{{ asset('images/slider/banner-coptigto-servicios.png') }}"
                    alt="slider">
                <div class="slider-content">
                    <div class="col-md-12 text-center">
                        <h2 class="animated4">
                            SERVICIOS PARA LOS ASOCIADOS
                        </h2>
                        <h3 class="animated5">
                            Academia - Industria - Gobierno
                        </h3>
                        <p class="animated6"><a href="{{ route('services') }}" class="slider btn btn-primary white">Leer
                                Más</a></p>
                    </div>
                </div>
            </div>
            <!--/ Carousel item end -->
            <div class="item">
                <img class="img-responsive"
                    src="{{ asset('images/slider/banner-coptigto-convenios-de-colaboracion.png') }}" alt="slider">
                <div class="slider-content">
                    <div class="col-md-12 text-center">
                        <h2 class="animated7">
                            Aportaciones colaborativas
                        </h2>
                        <div class="">
                            <a class="animated4 slider btn btn-primary btn-min-block white" href="#collaboration">Leer
                                Más</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Carousel item end -->
        </div><!-- Carousel inner end-->

        <!-- Controls -->
        <a class="left carousel-control" href="#main-slide" data-slide="prev">
            <span><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control" href="#main-slide" data-slide="next">
            <span><i class="fa fa-angle-right"></i></span>
        </a>
    </div><!-- /carousel -->
</section>
<!--/ Slider end -->