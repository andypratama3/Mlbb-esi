<nav>
    <div class="logo">
        <img src="{{ asset('assets/img/Logo_Bankaltimtara.png') }}" alt="" />
    </div>
    <ul>
        <li>
            <a href="{{ route('landing.index') }}" class="home {{ Request::routeIs('landing.index') ? 'active' : '' }}">HOME</a>
        </li>
        <li>
            @if(Request::routeIS('registrasi.index'))
                <a href="/#about" class="about">ABOUT</a>
            @else
                <a href="#about" class="about">ABOUT</a>
            @endif
        </li>
        <li>
            <a href="{{ route('registrasi.index') }}" class="register {{ Request::routeIs('registrasi.index') ? 'active' : '' }}">REGISTER</a>
        </li>
    </ul>
    <div class="login"><a href="{{ route('login') }}">SIGN UP</a></div>
</nav>
