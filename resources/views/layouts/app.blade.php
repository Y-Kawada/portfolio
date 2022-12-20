<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- じゃんけん用 -->
    <script src="{{ asset('js/janken.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            document.getElementById("moveMenuIcon").addEventListener("change", () => {
                document.getElementById("openMenu").checked = document.getElementById("moveMenuIcon").checked;
            });
        });
    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fold.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">
                <input type="checkbox" class="moveMenuIcon" id="moveMenuIcon">
                <label for="moveMenuIcon" class="menuIconToggle">
                    <div class="spinner diagonal part-1"></div>
                    <div class="spinner horizontal"></div>
                    <div class="spinner diagonal part-2"></div>
                </label>
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Portfolio') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        
                    </ul>
                </div>
            </div>
        </nav>

        <input type="checkbox" class="openMenu" id="openMenu">
        <div id="Menu">
            <div id="sidebarMenu">
                <ul class="sidebarMenuInner">
                    <li><a href="/">{{__('プロフィール')}}</a></li>
                    <li class="subMenu"><label for="openSubMenu" class="openSubMenuLabel">{{__('作品')}}　▼</label>
                        <input type="checkbox" class="openSubMenu" id="openSubMenu">
                        <ul class="subMenuInner">
                            <li><a href="/timeline">{{__('timeline')}}</a></li>
                            <li><a href="/janken">{{__('じゃんけん')}}</a></li>
                            <li><a href="/contact">{{__('お問合せ')}}</a></li>
                            <li><a href="https://github.com/Y-Kawada">{{__('GitHub')}}</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <main class="py-4">
            <div class="container mt-3">
                @yield('content')
            </div>
        </main>
        <footer>
            <p>Copyright ©️ 2022 Yuka.K</p>
        </footer>
    </div>
</body>
</html>
