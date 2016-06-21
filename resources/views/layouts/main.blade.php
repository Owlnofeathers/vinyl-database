<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adam's Vinyl Collection</title>

    <link href="/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ elixir("css/all.css") }}">
    <link href="https://fonts.googleapis.com/css?family=Oswald|Ubuntu" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

@include('layouts.header')

@include('partials.status')

@yield('content')

@include('layouts.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script src="/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="{{ elixir("js/all.js") }}"></script>

@yield('scripts')

</body>
</html>