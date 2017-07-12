<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <!-- Loading Screen -->
    <div id="overlay" class="text-center">
      <i class="spinner fa fa-cog fa-spin fa-5x fa-fw" style="margin-top:150px;font-size:300px;"></i>
      <p>Loading..</p>
    </div>

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">BHINNEKA - FDS</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/"><i class="fa fa-home fa-fw" aria-hidden="true"></i>HOME</a></li>
            <li><a href="/compare">COMPARE</a></li>
            <li><a href="/import">IMPORT</a></li>
            <li><a href="/transactions">TRANSACTIONS</a></li>
            <li><a href="/config" data-toggle="modal" data-target="#configModal"><i class="fa fa-cog fa-1x fa-fw"></i></a></li>
          </ul>
        </div>
      </div>
    </nav>

    @yield('content')

    @include('inc.config')

    @include('inc.messages')
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
