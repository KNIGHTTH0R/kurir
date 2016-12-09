<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>{{ $title }}</title>

        <!-- css -->
        @section('vendorcss')
            <link href="{{ elixir('css/vendor.css') }}" rel="stylesheet">
            <link href="{{ elixir('css/' . $route_name . '.css') }}" rel="stylesheet">
        @show

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="{{ $route_name }}">
        <!-- css -->
        @section('navbar')
            @include('layout.navbar')
        @show

        <div class="container">
            @yield('content')
        </div>

        <!-- js -->
        @section('vendorjs')
            <script type="text/javascript" src="{{ elixir('js/vendor.js') }}"></script>
            <script type="text/javascript" src="{{ elixir('js/' . $route_name . '.js') }}"></script>
        @show
    </body>
</html>