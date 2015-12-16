@extends('layouts.master')

@section('title')
    Welcome to MyGolf Handicap
@stop

@section('content')

    <div class="bg">
        <h1>Welcome to MyGolf Handicap Calculator</h1>
            <p>Based on the USGA handicap system, this free app will help you to compute your
            18-hole handicap index for scores posted from multiple golf courses (of 3,000 yards or more in length).</p>
            <p>Using this calculator will not provide you with an "official" USGA Handicap.
            You need a membership in a qualifying organization for that. However, the resulting number is correct.</p>
    <div>
    <p>To get started</p>
    <p><a class="welcome_button" href='/login'>log in</a> or <a class="welcome_button" href='/register'>register</a></p>
@stop
