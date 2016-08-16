@extends('layouts.minimal')

@section('title','Team list')

@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <h1>Team list
                <small>currently {{$teamCount}}</small>
            </h1>
        </div>
        <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Tag</th>
                <th>Name</th>
                <th>Email</th>
                <th>Date</th>
            </tr>
            </thead>
            <tbody>
            @foreach($teams as $index => $team)
                <tr>
                    <th scope="row">{{$index+1}}</th>
                    <td>{{$team->tag}}</td>
                    <td><a href="/dev/team/{{$team->id}}?token={{$token}}">{{$team->name}}</a></td>
                    <td>{{$team->email or '-'}}</td>
                    <td>{{$team->created_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>
@endsection
