<!doctype html>
<html class="no-js" lang="en">
    <head>
        @include('frontend.partials.css')
        @stack('css')
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Header Area Start -->
		<header class="top">
            @include('frontend.partials.header')
		</header>
		<!-- Header Area End -->
		<!-- Background Area Start -->
        
		<!-- Background Area End -->
            @yield('content')
        <!-- Footer Start -->
        <footer class="footer-area">
            @include('frontend.partials.footer')
        </footer>
        <!-- Footer End -->
        @include('frontend.partials.js')
        @stack('js')
    </body>
</html>
