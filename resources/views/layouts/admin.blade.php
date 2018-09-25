<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script>
            window.Laravel = {
                csrfToken: "{{ csrf_token() }}"
            };
        </script>
    </head>
    <body class="bg-light">
        <div id="app">
            <nav class="navbar navbar-expand-lg fixed-top navbar-dark navbar-laravel bg-dark">
                <a class="navbar-brand mr-auto mr-lg-0" href="{{ url('/admin') }}">
                  {{ config('app.name', 'Laravel') }}
                </a>
                <div id="menu-button">
                    <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas" v-on:click="isOpen">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-collapse offcanvas-collapse" id="navbarSupportedContent" v-bind:class="{ open: value }">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('/admin') }}">TOP</a>
                            </li>
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('admin/users') }}">ユーザー管理</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('admin/jobs') }}">案件管理</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
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
            <router-view name="menu"></router-view>
            <main role="main" class="container">
                <router-view></router-view>
            </main>
        </div>
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}"></script>
        <footer>
<!-- nanika kakimasu -->
        </footer>
    </body>
</html>
