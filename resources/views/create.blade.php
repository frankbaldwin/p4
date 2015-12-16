@extends('layouts.master')

@section('title')
    Enter a New Round
@stop


@section('content')

    <h1>Add a new round</h1>

    @if(count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
    <div id="create_form">
        <form method='POST' action='/create'>

            <input type='hidden' value='{{ csrf_token() }}' name='_token'>

            <div class='p4'>
                <label>* Date Played (YYYY-MM-DD):</label>
                <input type='integer' id='date_played'name='date' value='{{ old('date_played','2015-11-15') }}'>
            </div>

            <div class='p4'>
                <label for='course_name'>* Course Name:</label>
                <input type='text' id='course_name' name="course_name" value='{{ old('course_name','Summit Windmill') }}'>
            </div>

            <div class='p4'>
                <label for='course_rating'>* Course Rating</label>
                <input type='integer' id='course_rating' name="course_rating" value='{{ old('course_rating','70.2') }}'>
            </div>

            <div class='p4'>
                <label for='slope_rating'>Slope Rating:</label>
                <input type='integer' id='slope_rating' alt=""name="slope_rating" value='{{ old('slope_rating','146') }}'>
            </div>

            <div class='p4'>
                <label for='18_hole_score'>* 18 Hole Score:</label>
                <input type='integer' id='score' name='score' value='{{ old('round_score','85') }}'>
            </div>

            <button id='login_button' type="submit" class="btn btn-primary">Enter Round</button>
        </form>
    </div>
@stop
