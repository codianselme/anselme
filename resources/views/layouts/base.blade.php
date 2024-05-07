<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@yield('title')</title>

        <!-- google fonts -->
        <link href="//fonts.googleapis.com/css2?family=Jost:wght@300;400;600&display=swap" rel="stylesheet">

        <!-- Template CSS -->
        @include("partials.css_files")
    </head>

    <body>
        <!-- header -->
        @include("partials.header")
        <!-- //header -->

        <!-- banner section -->
        @yield('content')

        <!-- Footer -->
        @include('partials.footer')
        <!-- //Footer -->

        <!-- all js scripts and files here -->
        @include("partials.js_files")
    </body>
</html>