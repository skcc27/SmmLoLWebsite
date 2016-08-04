@extends('layouts.master')

@section('title', 'Welcome')

@section('stylesheet')
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.amber-orange.min.css"/>
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/boon" type="text/css"/>
@endsection

@section('script')
    <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
@endsection

@section('content')
    <overlay></overlay>
    <div class="text title main">Sammarnmitr League of Legends Competition</div>
    <div class="text content main">
        @include('index_intro')
    </div>
    <div class="button text main">
        <a href="https://smmlol.tk/team/register">
            <button id="register" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Register
            </button>
        </a>
        <button id="more_info" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">More info
        </button>
    </div>
    <div class="sponsor left">Sponserd by
        <img src="/img/sponsor1.png" alt="Garena">
        <img src="/img/sponsor2.png" alt="Suabkularb Wittayalai School">
        <img src="/img/sponsor3.png" alt="SK Com Club">
        <img src="/img/sponsor4.png" alt="Samarnmitr">
    </div>
    <div class="image main"></div>
    <overlay class="form-overlay"></overlay>
    <div class="container">
        @include('index_form')
    </div>
@endsection
