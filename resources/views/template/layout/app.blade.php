<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('titulo')</title>
	<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/datepicker3.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/styles.css')}}" rel="stylesheet">
</head>
<body>
    @yield('conteudo')
    <script src="{{asset('assets/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</body>
