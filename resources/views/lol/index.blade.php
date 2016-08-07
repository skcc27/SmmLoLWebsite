@extends('layouts.master')

@section('title', 'SKLOL')

@section('prestylesheet')

    <link href='https://fonts.googleapis.com/css?family=Prompt:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic|Maitree:400,200,300,500,600,700&subset=thai,latin'
          rel='stylesheet'
          type='text/css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
@endsection

@section('stylesheet')

@endsection

@section('prescript')
    <script src='https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.10.1/lodash.min.js'></script>
@endsection

@section('script')
    <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
@endsection

@section('content')
    @include('lol.intro')
    {{--@include('lol.info')
    @include('lol.schedule')
    @include('lol.faq')
    @include('lol.fb')--}}
@endsection
