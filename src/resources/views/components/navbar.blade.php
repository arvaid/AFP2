<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
    <div class="container"><a class="navbar-brand logo" href="#">NamesAreOverrated</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link @if(Request::is('/')) active @endif" href="{{url('/')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link @if(Route::is('question.*'))) active @endif" href="{{ route('question.index') }}">Posts</a></li>
                <li class="nav-item"><a class="nav-link" href="about-us.html">Profile</a></li>
                <li class="nav-item"><a class="nav-link" href="contact-us.html">support</a></li>
            </ul>
            <div>
                @include('components.nav.authLinks')
            </div>
        </div>
    </div>
</nav>
