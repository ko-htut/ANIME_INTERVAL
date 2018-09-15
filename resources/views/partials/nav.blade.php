<nav id="nav" class="navbar nav-transparent" style=""><!--style="background: rgba(0, 0, 0, 0.20)"-->
    <div class="container">

        <div class="navbar-header">
            <!-- Logo -->
            <div class="navbar-brand">
                <a href="{{url('/')}}">
                    <img class="logo-alt" src="{{URL::asset('img/logo-alt.png')}}" alt="logo">
                    <img class="logo" src="{{URL::asset('img/logo-alt.png')}}" alt="logo">
                </a>
            </div>
            <!-- /Logo -->

            <!-- Collapse nav button -->
            <div class="nav-collapse">
                <span></span>
            </div>
            <!-- /Collapse nav button -->
        </div>

        <!--  Main navigation  -->
        <ul class="main-nav nav navbar-nav navbar-right">
            <li><a href="{{url('/')}}">Home</a></li>
           <!--  <li><a href="{{url('AnimeSeries')}}">Anime Series</a></li> -->
            <li><a href="{{url('AnimeList')}}">Anime List</a></li>
            <li><a href="{{url('Movies')}}">Anime Movies</a></li>
            <li><a href="{{url('New_s')}}">New season</a></li>
            {{--<li><a href="{{url('AnimeMovies')}}">Community Forum</a></li>--}}
            <li><a href="{{url('Popular')}}">Popular</a></li>
            <!-- <li><a href="{{url('Report-Request')}}">Report/Request</a></li> -->
             <li>
            <form action="/search" method="get">
                <div class="input-group input-group-sm mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Search</span>
                  </div>
                  <input id="s" name="keyword" type="text" class="form-control" aria-label="Small"  aria-describedby="inputGroup-sizing-sm">
                  <input type="submit" value="Submit" style="display: none;">
                </div>

            </form>
            <div id="result"></div>
            </li>
        <script>
                $('#s').keyup(function()
                {
                    // $( "#result" ).load( "/anime_interval/public/search?keyword="+$('#s').val()+' .home-content', function() {
                    //       alert( "Load was performed." );
                    //     });
                   // alert(  $('#s').val());
                })
            </script>

            <!--<li class="has-dropdown"><a href="#blog">Gener</a>
                <ul class="dropdown">
                    <li><a href="#">Action</a></li>
                </ul>
            </li>
            <li><a href="#service">Report/Request</a></li>-->
        </ul>
        <!-- /Main navigation -->
    </div>
   
</nav>