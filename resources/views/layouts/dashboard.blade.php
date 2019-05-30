
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}{{ isset($title)?' - '.$title:'' }}</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body>
        <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{ route('frontend.categories.list') }}">
                {{ config('app.name', 'Laravel') }}
            </a>

            @section('_search')
                @include('frontend.search.form')
            @show

            <ul class="navbar-nav px-6">
                @guest
                    <li class="nav-item text-nowrap">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('messages.frontend.auth.login.title') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item text-nowrap">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('messages.frontend.auth.register.title') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ __('messages.frontend.auth.profile.title') }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                {{ __('messages.frontend.auth.profile.logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </nav>

        <div class="container-fluid">
            <div class="row">

                <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                    @include('_left_menu')
                </nav>

                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                    @section('title')
                        @include('_title')
                    @show
                    @if (Session::has('messages'))
                        @foreach (Session::get('messages') as $alert)
                            <div class="alert alert-{{ !empty($alert['type'])?$alert['type']:'info' }}" role="alert">
                                {{ $alert['message'] }}
                            </div>
                        @endforeach
                    @endif
                    @yield('content')
                </main>
        </div>
        </div>
    </body>
</html>
