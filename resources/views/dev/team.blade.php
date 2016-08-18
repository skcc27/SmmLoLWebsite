@extends('layouts.minimal')

@section('title')
    {{$team->name}}
@endsection

@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <h1>Team Info
                <small>{{$team->name}}</small>
            </h1>
        </div>
        <h3>Basic information</h3>
        <dl>
            <dt>Name</dt>
            <dd>{{$team->name}}</dd>
            <dt>Tag</dt>
            <dd>{{$team->tag}}</dd>
            <dt>Email</dt>
            <dd>{{$team->email or '-'}}</dd>
            <dt>Created at</dt>
            <dd>{{$team->created_at}}</dd>
            <dt>Updated at</dt>
            <dd>{{$team->updated_at}}</dd>
        </dl>
        <h3>Contestants</h3>
        <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>First name</th>
                <th>Last name</th>
                <th>SK</th>
                <th>Summoner name</th>
                <th>Phone</th>
                <th>Facebook</th>
            </tr>
            </thead>
            <tbody>
            @foreach($contestants as $index => $c)
                <tr>
                    <th>{{$index+1}}</th>
                    <td>{{$c->first_name}}</td>
                    <td>{{$c->last_name}}</td>
                    <td>{{$c->batch}}</td>
                    <td>{{$c->summoner_name}}</td>
                    <td>{{$c->phone or '-'}}</td>
                    <td>{{$c->facebook or '-'}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>
@endsection
