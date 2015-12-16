@extends('layouts.master')

@section('content')



    <h1 class="login">Login</h1>

    @if(count($errors) > 0)
        <ul class='errors'>
            @foreach ($errors->all() as $error)
                <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <div id="login_form">
        <form  method='POST' action='/login'>

            {!! csrf_field() !!}

            <div class='p4'>
                <label for='name'>Email</label>
                <input type='text' name='email' id='email' value='jamal@harvard.edu'>
            </div>

            <div class='p4'>
                <label for='name'>Password</label>
                <input type='password' name='password' id='password' value='helloworld'>
            </div>

            <div class='form-group'>
              <p class="p3">Remember Me: <input type='checkbox' name='remember' id='remember'></p>
            </div>

            <button id='login_button' type='submit' class='btn btn-primary'>Login</button>

        </form>
    </div>
    <p class="p3">Don't have an account? <a href='/register'>Register here...</a></p>
@stop
