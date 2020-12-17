<!DOCTYPE html>
<html @if (app()->getLocale()=='en')lang='en' dir='ltr' @else lang='ar' dir='rtl' @endif>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'unknown page')</title>

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
    <header>
        <div class="logo">
            <img src="images/Logo.svg" alt="Logo">
        </div>
        <nav>
            <ul>
                <li>
                    <a href="/">{{__('all.home')}}</a>
                </li>
                <li>
                    <a href="{{route('about')}}">{{__('all.about')}}</a>
                </li>
                <li>
                    <a href="{{route('shop')}}">{{__('all.shop')}}</a>
                </li>
                <li>
                    <a href="{{route('contact')}}">{{__('all.contact')}}</a>
                </li>

                @if(app()->getLocale() == 'en')
                    <li><a href="{{route('language', 'ar')}}">AR</a></li>
                @else
                    <li> <a href="{{route('language', 'en')}}">EN</a></li>
                @endif

                @guest


                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('all.login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('all.register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest

            </ul>
        </nav>
    </header>
    @yield('content')
</body>
</html>

{{-- <ul>
    <li><a href="/">Home</a></li>
    <li><a href="{{route('about')}}">{{__('About')}}</a></li>
    <li><a href="{{route('shop')}}">Shop</a></li>
    <li><a href="{{route('contact')}}">Contact</a></li>
</ul> --}}
