@extends('layouts.master')

@section('title')
    Delete Round
@stop


@section('content')

    <h1>Delete Round</h1>
    <div id="delete_form">
        <p class="p4">Are you sure you want to delete Round # <em>{{$round->id}}</em>?</p>

        <p>
            <a id='delete_button' href='/delete/{{$round->id}}'>Yes</a>
            <a id='delete_button' href='/handicap'>No</a>
        <p>
    </div>
@stop
