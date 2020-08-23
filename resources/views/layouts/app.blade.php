<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@lang('Penguin')</title>

    {{-- <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script> --}}
    
    <!-- jQuery 3.1.1 -->
    <script src="{{ asset('libs/jquery/3.2.1/jquery.min.js') }}"></script>

    <!-- Propper 1.16.1 -->
    <script src="{{ asset('libs/propper/1.16.1/js/popper.min.js') }}"></script>    
    
    <!-- Bootstrap 4.4.1 -->
    <link rel="stylesheet" href="{{ asset('libs/bootstrap/4.4.1/css/bootstrap.min.css') }}">
    <script src="{{ asset('libs/bootstrap/4.4.1/js/bootstrap.min.js') }}"></script>

    <!-- Axios 1.16.1 -->
    <script src="{{ asset('libs/axios/0.19.2/js/axios.min.js') }}"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('libs/font-awesome/4.7.0/css/font-awesome.min.css') }}">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container col-md-12">
                <a class="navbar-brand" href="{{ url('/') }}">
                    @lang('Penguin')
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <div class="col-md-12">
                            <a style="color:red"> @lang('Demo Version') 1.6</a>
                        </div>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown" style = "margin-right:15px;">
                                <a id="languageDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    @lang('Language') (@lang('English')) <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="languageDropdown">
                                    <a class="dropdown-item" href="{{ route('language.switch','en') }}">
                                        English
                                    </a>
                                    <a class="dropdown-item" href="{{ route('language.switch','ar') }}">
                                        العربية
                                    </a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('cp.home') }}"> @lang('Management') </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
