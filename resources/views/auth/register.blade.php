@extends('layouts.master')

@section('content')



    <h1>Register</h1>

    @if(count($errors) > 0)
        <ul class='errors'>
            @foreach ($errors->all() as $error)
                <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <div id="register_form">
    <form method='POST' action='/register'>
        {!! csrf_field() !!}

        <div class="p4">
            <label for='name'>Name</label>
            <input type='text' name='name' id='name' value='{{ old('name') }}'>
        </div>

        <div class="p4">
            <label for='email'>Email</label>
            <input type='text' name='email' id='email' value='{{ old('email') }}'>
        </div>

        <div class="p4">
            <label for='password'>Password</label>
            <input type='password' name='password' id='password'>
        </div>

        <div class="p4">
            <label for='password_confirmation'>Confirm Password</label>
            <input type='password' name='password_confirmation' id='password_confirmation'>
        </div>

        <button id='register_button' type='submit' class='btn btn-primary'>Register</button>

    </form>
  </div>
  <p class="p3">Already have an account? <a href='/login'>Login here...</a></p>
@stop
