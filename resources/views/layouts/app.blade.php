<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style type="text/css">
        #app{
            background-image:url(@yield('background-image'));
        }
    </style>
    @yield('css')
</head>
<body>
<div id="app">
    @include('partials.menu')
    <main class="py-4">
        <section class="main-content">
            <div class="container">
                @if(!in_array(request()->path(), ['login' ,'register', ' password/email', 'password/reset']))
                    @if(session()->has('error'))
                        <div class="alert alert-danger my-5">
                            {{session()->get('error')}}
                        </div>
                    @elseif(session()->has('success'))
                        <div class="alert alert-success my-5">
                            {!! session()->get('success') !!}
                        </div>
                    @endif
                @endif
                    @yield('content')
            </div><!-- /.container -->
        </section><!-- /.section -->
    </main>
</div>
<script src="{{ asset('js/app.js') }}"></script>
@yield('script')
</body>
</html>
