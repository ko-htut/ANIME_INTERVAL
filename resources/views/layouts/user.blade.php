<!DOCTYPE html>
<html lang="en">

    <head>
        @include('partials.head')
    </head>

    <body>

        <!-- Nav -->
        @include('partials.nav')
        <!-- /Nav -->

        <!-- /Body start -->
        @yield('content')
        <!--  /Body end  -->

        <!-- Footer -->
        @include('partials.footer')
        <!-- /Footer -->

        <!-- Back to top -->
        <div id="back-to-top"></div>
        <!-- /Back to top -->

        <!-- Preloader -->
        <div id="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- /Preloader -->

        <!-- jQuery Plugins -->
            @include('partials.scripts')
        <!-- Go to www.addthis.com/dashboard to customize your tools -->
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b0d29aba1e624de"></script>
    </body>

</html>
