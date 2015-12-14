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

    <form method='POST' action='/create'>

        <input type='hidden' value='{{ csrf_token() }}' name='_token'>

        <fieldset>
            <label>* Date Played (MM/DD/YYYY):</label>
            <input
                type='text'
                id='date_played'
                name='date_played'
                value='{{ old('date_played','11/15/2015') }}'
            >
        </fieldset>

        <fieldset>
            <label for='course_name'>* Course Name:</label>
            <input
                type='text'
                id='course_name'
                name="course_name"
                value='{{ old('course_name','Summit Windmill') }}'
            >
        </fieldset>

        <fieldset>
            <label for='course_rating'>* Course Rating</label>
            <input
                type='integer'
                id='course_rating'
                name="course_rating"
                value='{{ old('course_rating','70.2') }}'
                >
        </fieldset>

        <fieldset>
            <label for='slope_rating'>Slope Rating:</label>
            <input
                type='integer'
                id='slope_rating'
                name="slope_rating"
                value='{{ old('slope_rating','146') }}'
                >
        </fieldset>

        <fieldset>
            <label for='18_hole_score'>* 18 Hole Score:</label>
            <input
                type='integer'
                id='18_hole_score'
                name='18_hole_score'
                value='{{ old('18_hole_score','85') }}'
                >
        </fieldset>

        <br>
        <button type="submit" class="btn btn-primary">Enter Round</button>
    </form>

@stop
