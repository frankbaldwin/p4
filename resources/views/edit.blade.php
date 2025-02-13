@extends('layouts.master')

@section('title')
    Edit Round
@stop

@section('content')

    <h1>Edit Round</h1>

    @if(count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
    <div id="edit_form">
        <form method='POST' action='/edit'>

            <input type='hidden' value='{{ csrf_token() }}' name='_token'>
            <input type='hidden' name='id' value='{{$round->id}}'>

            <div class='p4'>
                <label>* Date Played (YYYY-MM-DD):</label>
                <input type='integer' id='date_played' name='date' value='{{$round->date_played}}'>
            </div>

            <div class='p4'>
                <label for='course_name'>* Course Name:</label>
                <input type='text' id='course_name' name="course_name" value='{{$round->course_name}}'>
            </div>

            <div class='p4'>
                <label for='course_rating'>* Course Rating</label>
                <input type='integer' id='course_rating' name="course_rating" value='{{$round->course_rating}}'>
            </div>

            <div class='p4'>
                <label for='slope_rating'>* Slope Rating:</label>
                <input type='integer' id='slope_rating' name="slope_rating" value='{{$round->slope_rating}}'>
            </div>

            <div class='p4'>
                <label for='round_score'>* 18 Hole Score:</label>
                <input type='integer' id='score' name='score' value='{{$round->round_score}}'>
            </div>

            <button id='edit_button'type="submit" class="btn btn-primary">Save changes</button>
        </form>
    </div>
@stop
