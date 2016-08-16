<!DOCTYPE html>
<html lang="{{config('app.locale')}}">
<head>
    <!-- Required by Bootstrap -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title and other metadata -->
    <title>@yield('title') - Samarnmitr LoL Competition</title>
    <link href="/css/minimal.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('head')
</head>
<body class="@yield('body.class')">
@section('content')
    <div class="container">
        <h2>Hello World!</h2>
    </div>
@show
<!-- JavaScript -->
@yield('prescript')
<script src="/js/app.js"></script>
<script src="/js/all.js"></script>
@yield('script')
</body>
</html>
