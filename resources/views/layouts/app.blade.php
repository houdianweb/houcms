<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ config('app.name', 'HouBBS') }}</title>
<meta name="keywords" content="{{ config('app.keywords', 'HouBBS前沿技术交流论坛') }}">
<meta name="description" content="{{ config('app.description', 'HouBBS前沿技术交流论坛') }}">
<meta name="csrf-token" content="{{ csrf_token() }}">    <!-- CSRF Token -->
<link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<!--[if lt IE 9]>
<script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
@include('common.header')
@include('common.nav')
@yield('content')
@include('common.footer')
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>