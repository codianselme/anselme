<header id="site-header" class="fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg stroke">
            <a class="navbar-brand" href="{{route('index')}}">
                <span class="fa fa-laptop"></span> Anselme
            </a>
            <!-- if logo is image enable this
        <a class="navbar-brand" href="#index.html">
            <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
        </a> -->
            <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item @if($currentPage === 'index') active @endif">
                        <a class="nav-link" href="{{route('index')}}">Accueil</a>
                    </li>
                    <li class="nav-item @if($currentPage === 'portfolio') active @endif">
                        <a class="nav-link" href="{{route('portfolio')}}">Portfolio</a>
                    </li>
                    <li class="nav-item @if($currentPage === 'about') active @endif">
                        <a class="nav-link" href="{{route('about')}}">A Propos</a>
                    </li>
                    <li class="nav-item @if($currentPage === 'contact') active @endif">
                        <a class="nav-link" href="{{route('contact')}}">Me Contacter</a>
                    </li>
                </ul>
            </div>
            <!-- toggle switch for light and dark theme -->
            <div class="mobile-position">
                <nav class="navigation">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox">
                            <div class="mode-container">
                                <i class="gg-sun"></i>
                                <i class="gg-moon"></i>
                            </div>
                        </label>
                    </div>
                </nav>
            </div>
            <!-- //toggle switch for light and dark theme -->
        </nav>
    </div>
</header>