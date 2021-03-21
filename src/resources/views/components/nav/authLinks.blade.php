@guest
    @if (Route::has('register'))
    <a href="{{ route('register') }}" style="color:inherit;text-decoration: none">
        <i class="fas fa-user-plus" data-toggle="tooltip" data-bss-tooltip="" style="padding: 8px;margin: 5px;padding-left: 8px;" title="Registration"></i>
    </a>
    @endif
    @if (Route::has('login'))
    <a href="{{ route('login') }}" style="color:inherit;text-decoration: none">
        <i class="fas fa-sign-in-alt" data-toggle="tooltip" data-bss-tooltip="" style="padding: 8px;margin: 5px;padding-left: 17px;" title="Login"></i>
    </a>
    @endif
@endguest
@auth
    @if (Route::has('logout'))
    <a href="{{ route('logout') }}" style="color:inherit;text-decoration: none">
        <i class="fas fa-sign-out-alt" data-toggle="tooltip" data-bss-tooltip="" style="padding: 8px;margin: 5px;padding-left: 8px;" title="Log Out"></i>
    </a>
    @endif
@endauth
