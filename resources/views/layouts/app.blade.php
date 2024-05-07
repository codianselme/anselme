<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>My CV</title>

        <!-- google fonts -->  
        <link href="//fonts.googleapis.com/css2?family=Jost:wght@300;400;600&display=swap" rel="stylesheet">

        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/style-starter.css">
    </head>
    
    <body>
        <!-- header -->
        <header id="site-header" class="fixed-top">
          <div class="container">
              <nav class="navbar navbar-expand-lg stroke">
                  <a class="navbar-brand" href="index.html">
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
                      </span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                      <ul class="navbar-nav ml-auto">
                          <li class="nav-item @@home__active">
                              <a class="nav-link" href="{{route('anselme.index')}}">Home <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item active">
                              <a class="nav-link" href="{{route('anselme.about')}}">About</a>
                          </li>
                          <li class="nav-item @@contact__active">
                              <a class="nav-link" href="{{route('anselme.contact')}}">Contact</a>
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
        <!-- //header -->

        @yield('content')

        <!-- Footer -->
        @include('partials.footer')

        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
            <span class="fa fa-angle-up"></span>
        </button>

        @yield('scripts')

        @yield('js')
    </body>
</html>