<!-- Random User Page -->

@extends('layouts.master')

@section('title')
    Random Business Contact Generator
@stop

@section('content')

  	<h1 id="handicap_title">Welcome back {{$user->name}}!</h1>
  	   <p id="current_handicap">Your current handicap is </p>
       <div id="handicap">9.9</div>

       <h3 id="table_title">Round Data</h3>
     	<table class="round_table">
     		<tr>
     			<th id="round_head" class="round_head" name="round_head">Round#</th>
     			<th id="date_head" class="round_head" name="date_head">Date Played</th>
     			<th id="course_head" class="round_head" name="course_head">Course Name</th>
     			<th id="rating_head" class="round_head" name="rating_head">Course Rating</th>
     			<th id="slope_head" class="round_head" name="slope_head">Slope Rating</th>
     			<th id="score_head" class="round_head" name="score_head">18 Hole Score</th>
     		</tr>

     @if(sizeof($rounds)==0)
        You have no entered any rounds.
      @else
          @foreach($rounds as $round)

        		<tr id="rd1">
        			<td id="round_num" class="round_data" name="round_num">{{$round->id}}</td>
        			<td id="date" class="round_data" name="date">{{$round->date_played}}</td>
        			<td id="course_name" class="round_data" name="course_name">{{$round->course_name}}</td>
        			<td id="course_rating" class="round_data" name="course_rating">{{$round->course_rating}}</td>
        			<td id="slope_rating" class="round_data" name="slope_rating">{{$round->slope_rating}}</td>
        			<td id="score" class="round_data" name="score">{{$round->round_score}}</td>
        		</tr>
            @endforeach
        @endif
@stop
