<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="Greefi Technology" />
    <meta name="robots" content="" />
    <meta property="og:title" content="Thottakaran"/>
    <meta name="description" content=""/>
    
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('images/logo.jpg') }}" />
    
    <title>Thottakaran @yield('title')</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" type="text/css" href="{{ url('css/plugins.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
    <link class="skin"  rel="stylesheet" type="text/css" href="{{ url('css/skin/skin-1.css') }}">
    <link  rel="stylesheet" type="text/css" href="{{ url('css/templete.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ url('plugins/revolution/revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('plugins/revolution/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('plugins/revolution/revolution/css/navigation.css') }}">
</head>
<body id="bg">
    <div id="loading-area"></div><div class="page-wraper">

       @include('thottakaran.layout.header')
       
        
        @yield('slide')
        @yield('services')
        @yield('gallery')
        @yield('about-us')
        @yield('testimonals')
        @yield('partners')
        @yield('contact-us')


       @include('thottakaran.layout.footer')


        <button class="scroltop fa fa-chevron-up" ></button>
    </div>
    <script src="{{ url('js/jquery.min.js') }}"></script>
    <script src="{{ url('plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ url('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <script src="{{ url('plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script>
    <script src="{{ url('plugins/magnific-popup/magnific-popup.js') }}"></script>
    <script src="{{ url('plugins/counter/waypoints-min.js') }}"></script>
    <script src="{{ url('plugins/counter/counterup.min.js') }}"></script>
    <script src="{{ url('plugins/imagesloaded/imagesloaded.js') }}"></script>
    <script src="{{ url('plugins/masonry/masonry-3.1.4.js') }}"></script>
    <script src="{{ url('plugins/masonry/masonry.filter.js') }}"></script>
    <script src="{{ url('plugins/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ url('js/dz.ajax.js') }}"></script>
    <script src="{{ url('js/custom.js') }}"></script>
    <script src="{{ url('js/dz.carousel.js') }}"></script>
    <script src="{{ url('plugins/revolution/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ url('plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ url('plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ url('plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ url('plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ url('plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ url('plugins/revolution/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ url('plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ url('plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ url('plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ url('plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script  src="{{ url('js/rev.slider.js') }}"></script>
    <script >
    jQuery(document).ready(function() {
        'use strict';
        dz_rev_slider_2();
    }); /*ready*/
    </script>
</body>
</html>