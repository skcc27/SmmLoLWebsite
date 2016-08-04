<!DOCTYPE html>
<html>
<head lang="{{config('app.locale')}}">
    <!-- Required by Bootstrap -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title and other metadata -->
    <title>@yield('title') - Samarnmitr LoL Competition</title>
@yield('metadata')
<!-- CSS -->
    <!-- TODO: Merge google font into sass -->
    @yield('prestylesheet')
    <link href="/css/app.css" rel="stylesheet" type="text/css">
    <link href="/css/all.css" rel="stylesheet" type="text/css">
    @yield('stylesheet')
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('headscript')
    @yield('head')

</head>
<body>
@section('content')
    <div class="container">
        <div class="content">
            <div class="title">Samarnmitr League of Legends Competition</div>
        </div>
    </div>
@show
<!-- JavaScript -->
@yield('prescript')
<script src="/js/app.js"></script>
<script src="/js/all.js"></script>
@yield('script')
</body>
</html>
