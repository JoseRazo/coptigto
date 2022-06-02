<!-- Header start -->
<header id="header" class="navbar-fixed-top header2" role="banner">
    <div class="container">
        <div class="row">
            <!-- Logo start -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand">
                    <a href="{{ route('home') }}">
                        <img class="img-responsive" src="{{ asset('images/logo-coptigto-blanco-160x99.png') }}" alt="logo">
                    </a>
                </div>
            </div>
            <!--/ Logo end -->
            <nav class="collapse navbar-collapse clearfix" role="navigation">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">Conócenos</a></li>
					<li><a href="{{ route('services') }}">Servicios</a></li>
					<li><a href="{{ route('projects') }}">Proyectos</a></li>
                    <li><a href="{{ route('contact') }}">Contacto</a></li>
                </ul>
            </nav>
            <!--/ Navigation end -->
        </div>
        <!--/ Row end -->
    </div>
    <!--/ Container end -->
</header>
<!--/ Header end -->