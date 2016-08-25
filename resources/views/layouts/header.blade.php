<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            @if(\Request::is('/'))
                <a class="navbar-brand page-scroll" href="#page-top">Vinyl Database</a>
            @else
                <a class="navbar-brand page-scroll" href="/">Vinyl Database</a>
            @endif
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a class="page-scroll" href="#page-top"></a>
                </li>
                @if(\Request::is('/'))
                    <li>
                        <a class="page-scroll" href="#about"><span class="glyphicon glyphicon-info-sign"></span> About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#records"><span class="glyphicon glyphicon-record"></span> Records</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#artists"><span class="glyphicon glyphicon-user"></span> Artists</a>
                    </li>
                @else
                    @if (Auth::guest())
                        <li><a href="/record"><span class="glyphicon glyphicon-record"></span> Records</a></li>
                        <li><a href="/artist"><span class="glyphicon glyphicon-user"></span> Artists</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <span class="glyphicon glyphicon-record"></span> Records <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/record') }}"><span class="glyphicon glyphicon-record"></span> Records</a></li>
                                <li><a href="{{ url('/record/create') }}"><span class="glyphicon glyphicon-pencil"></span> Add New Record</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <span class="glyphicon glyphicon-user"></span> Artists <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/artist') }}"><span class="glyphicon glyphicon-user"></span> Artists</a></li>
                                <li><a href="{{ url('/artist/create') }}"><span class="glyphicon glyphicon-pencil"></span> Add New Artist</a></li>
                            </ul>
                        </li>
                    @endif

                @endif
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"></span></a></li>
                    {{--<li><a href="{{ url('/register') }}">Register</a></li>--}}
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>