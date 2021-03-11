<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
    <div class="container"><a class="navbar-brand logo" href="#">NamesAreOverrated</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link @if(Request::is('/')) active @endif" href="{{url('/')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="features.html">Posts</a></li>
                <li class="nav-item"><a class="nav-link" href="about-us.html">Profile</a></li>
                <li class="nav-item"><a class="nav-link" href="contact-us.html">support</a></li>
            </ul>
            <div>
                <a href="{{ url('/register') }}">
                    <i class="fas fa-registered" data-toggle="tooltip" data-bss-tooltip="" style="padding: 8px;margin: 5px;padding-left: 8px;" title="Registration"></i>
                </a>
                <a href="{{ url('/login') }}">
                    <i class="fas fa-sign-in-alt" data-toggle="tooltip" data-bss-tooltip="" style="padding: 8px;margin: 5px;padding-left: 17px;" title="Login"></i>
                </a>
            </div>
        </div>
    </div>
</nav>