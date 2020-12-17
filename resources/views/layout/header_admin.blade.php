<!DOCTYPE html>
<html @if (app()->getLocale()=='en')lang='en' dir='ltr' @else lang='ar' dir='rtl' @endif>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'unknown page')</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <header>
        <div class="logo">
            <img src="{{asset('images/Logo.svg')}}" alt="Logo">
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

                <li>
                  @if(url()->current() == route('get_products'))
                      <a href="#">Product</a>
                  @else
                      <a href="{{route('get_products')}}">Product</a>
                  @endif
                </li>
                <li>
                    @if(url()->current() == route('get_brands'))
                        <a href="#">Brand</a>
                    @else
                        <a href="{{route('get_brands')}}">Brand</a>
                    @endif
                </li>
                <li>
                    @if(url()->current()== route('get_categories'))
                        <a href="#">Category</a>
                    @else
                        <a href="{{route('get_categories')}}">Category</a>
                    @endif
                </li>
                @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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
                </li>
                @if(app()->getLocale() == 'en')
                    <li><a href="{{route('language', 'ar')}}">AR</a></li>
                @else
                    <li> <a href="{{route('language', 'en')}}">EN</a></li>
                @endif
            </ul>
        </nav>
    </header>
    @yield('content')
</body>
</html>
