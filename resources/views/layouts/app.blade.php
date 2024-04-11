<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Aglaë Podologue') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <!--custom css -->
  <style>
      
      .navbar-nav{
        justify-content: space-between;
        align-items: center;
        padding-left: 25px;
        padding-right:25px
      }

      @media only screen and (min-width: 300px) and (max-width: 767px)  {

        .navbar-nav{
            justify-content: space-between;
            float: right;
            padding-top: 15px;

      }
    }

          @media only screen and (min-width: 768px) and (max-width: 1024px)  {

        .nav-link {
        margin:0px 1px;

      }
    }


            @media only screen and (min-width: 768) and (max-width: 1024px)  {

        .navbar-nav{
            flex-direction: row;
            float: center;

      }
      
    }

        .nav-link {
        margin:0px 10px;

      }
  </style>
  <!--End custom css -->
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-black shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Aglaë Podologue') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span style="color:white;" class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a style="color:white;" class="nav-link" href="#">{{ __('Home') }} <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item active">
                        <a style="color:white;" class="nav-link" href="#">{{ __('Service') }} <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item active">
                        <a style="color:white;" class="nav-link" href="#">{{ __('About') }} <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item active">
                        <a style="color:white;" class="nav-link" href="#">{{ __('Contact') }} <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item active">
                        <a style="color:white;" class="nav-link" href="#">{{ __('Help') }} <span class="sr-only"></span></a>
                    </li>                                          
                        <!-- Dropdown -->
                <li class="dropdown">
                    <a style="color:white;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <span class="caret">{{ Config::get('languages')[App::getLocale()] }} </span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                         @foreach (Config::get('languages') as $lang => $language)
                            @if ($lang != App::getLocale())
                            <li>
                                <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"> {{$language}}</a>
                                    @endif
                                @endforeach
                            </li>
                    </ul>
                </li>
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a style="color:white;" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a style="color:white;" class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a style="color:white;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a  class="dropdown-item" href="{{ route('logout') }}"
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
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
 

</body>
</html>
