@extends('layouts.master')

@section('title')
    Delete Round
@stop


@section('content')

    <h1>Delete Round</h1>

    <p>
        Are you sure you want to delete Round # <em>{{$round->id}}</em>?
    </p>

    <p>
        <a href='/delete/{{$round->id}}'>Yes...</a>
    </p>

@stop
