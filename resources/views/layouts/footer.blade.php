<footer>
    <div class="row">
        <div class="container">
            <ul class="list-inline text-center">
                <li><a href="/" title="Home">Home</a></li>
                <li><a href="/record" title="Records">Records</a></li>
                <li><a href="/artist" title="Artists">Artists</a></li>
                <li><a href="/#about" title="About">About</a></li>
                @if(Auth::guest())
                    <li><a href="/login" title="Login">Login</a></li>
                @endif
                <li class="pull-right"><a href="http://ajamesb.com" title="About">Site By Adam</a></li>
            </ul>
        </div>
    </div>
</footer>