<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/panel.css')}}" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{asset('dashboard/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('dashboard/js/bootstrap-datepicker/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/js/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css')}}">

    <script src="{{asset('dashboard/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('js/app.js')}}" defer></script>
    <script src="{{asset('dashboard/js/momentjs/moment.js')}}"></script>
    <script src="{{asset('dashboard/js/momentjs/moment-with-locales.js')}}"></script>
    <script src="{{asset('dashboard/js/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('dashboard/js/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.js"></script>

    @yield('styles')
</head>

<body>
    <nav class="topnav navbar navbar-expand shadow-sm navbar-light bg-white" id="">
        <div class="container">
            <a href="" class="topnav-logo navbar-brand">
                <img src="{{ asset('images/logo.png') }}" alt="escuta aqui logo" class="img-fluid">
            </a>
            <ul class="navbar-nav mr-auto">

            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span>
                            <span class="account-user-name">{{ (Auth::user()) ? Auth::user()->name : 'User' }}</span>
                        </span>
                        <span class="account-user-avatar">
                            <img src="{{ (Auth::user()) ? Auth::user()->getImage() : asset('images/profile.png') }}" alt="user-image"
                                class="rounded-circle img-fluid">
                        </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#"> {{ (Auth::user()) ? Auth::user()->email : 'user@mail.com' }}</a>
                    <a class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Sair</a>
                </div>
                </li>
            </ul>
        </div>
    </nav>
    @yield('content')

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>

    @yield('scripts')
</body>

</html>
