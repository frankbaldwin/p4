<!-- Lorem Ipsum Page -->

@extends('layouts.master')

@section('title')
    Round Data
@stop

@section('content')
    <h1>Enter Round Data</h1>

		<form class="round" name="input" action="/round_input" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<p class="p2">DATE: <input class="input3" type="date" name="date" size="20" value="YYYYMMDD" required /></p>
    	<p class="p2">COURSE NAME: <input class="input2" type="text" name="course_name" /></p>
			<p class="p2">COURSE RATING: <input class="input2" type="number" name="course_rating" required /></p>
			<p class="p2">SLOPE RATING: <input class="input2" type="number" name="slope_rating" required /></p>
			<p class="p2">18 HOLE SCORE: <input class="input2" type="number" name="score" min="50" max="360"required /></p>
			<input id="enter" type="submit" value="Enter">
		</form>

@stop
