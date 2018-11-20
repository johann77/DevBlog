<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DevBlog</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        {{-- navigation start --}}
        <nav class="navbar has-shadow">
            <div class="container navbar">
                <div class="navbar-brand p-t-5">
                    <a href="{{ route('home') }}" class="nav-item">
                        <figure class="image">
                            <img src="{{ asset('images/logo.jpg') }}" alt="logo devblog">
                        </figure>
                    </a>
                </div>
                <div class="navbar-menu">
                    <div class="navbar-start">
                        <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-100">Home</a>
                        <a href="#" class="navbar-item is-tab is-hidden-mobile">About</a>
                        <a href="#" class="navbar-item is-tab is-hidden-mobile">Contact</a>
                    </div>

                    <div class="navbar-end">
                        @if(Auth::guest())
                        <a href="{{ route('login') }}" class="navbar-item is-tab">Logowanie</a>
                        <a href="{{ route('register') }}" class="navbar-item is-tab m-r-20">Rejestracja</a>
                        @else
                        <div class="navbar-item is-tab has-dropdown is-hoverable">
                            <a class="navbar-link">
                                Hej głąbie
                            </a>
                            <div class="navbar-dropdown">
                            <a href="#" class="navbar-item">
                                <i class="fa fa-fw fa-user-circle-o m-r-10"></i>
                                Profile
                            </a>
                            <a href="#" class="navbar-item">
                                <i class="fa fa-fw fa-bell m-r-10"></i>
                                Notifications
                            </a>
                            <a href="#" class="navbar-item">
                                <i class="fa fa-fw fa-cog m-r-10"></i>
                                Settings
                            </a>
                                <hr class="navbar-divider">
                            <a href="#" class="navbar-item">
                                <i class="fa fa-fw fa-sign-out m-r-10"></i>
                                Logou
                            </a>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </nav>
        {{-- navigation end --}}
        <main>
            @yield('content')
        </main>
    </div>
</body>

</html>
