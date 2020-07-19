<!doctype html>
<html lang="">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <title>@yield('title', '')</title>
        <meta name="description" content="@yield('description', '')" /> 

        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>@yield('title', '')</title>

        <meta name="description" content="@yield('description', '')" />
        <meta name="keywords" content="@yield('keywords', '')" />

        <meta property="og:type" content="website" />
        <meta content="@yield('og:title', '')" property="og:title" />
        <meta content="@yield('og:image', '')" property="og:image" />
        <meta content="@yield('og:description', '')" property="og:description" />
        <meta content="@yield('og:url', url()->current())" property="og:url" />

        
        @yield('styles')
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}" /> 
    </head>

    <body>
        @include('shared.header')
        @yield('content')
        @include('shared.footer') 

        @include('shared.collbackModal') 
        
        <script src="{{ mix('/js/app.js') }}"></script>
        @yield('scripts')
    </body>
</html>