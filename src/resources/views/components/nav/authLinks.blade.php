@guest
    <a href="{{ route('register') }}" style="color:inherit;text-decoration: none">
        <i class="fas fa-user-plus" data-toggle="tooltip" data-bss-tooltip="" style="padding: 8px;margin: 5px;padding-left: 8px;" title="Registration"></i>
    </a>
    <a href="{{ route('login') }}" style="color:inherit;text-decoration: none">
        <i class="fas fa-sign-in-alt" data-toggle="tooltip" data-bss-tooltip="" style="padding: 8px;margin: 5px;padding-left: 17px;" title="Login"></i>
    </a>
@endguest
@auth
    <a href="{{ route('logout') }}" style="color:inherit;text-decoration: none">
        <i class="fas fa-sign-out-alt" data-toggle="tooltip" data-bss-tooltip="" style="padding: 8px;margin: 5px;padding-left: 8px;" title="Log Out"></i>
    </a>
@endauth
