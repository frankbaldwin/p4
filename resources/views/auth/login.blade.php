@extends('layouts.master')

@section('content')



    <h1>Login</h1>

    @if(count($errors) > 0)
        <ul class='errors'>
            @foreach ($errors->all() as $error)
                <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form class="round" method='POST' action='/login'>

        {!! csrf_field() !!}

        <div class='form-group'>
            <p class="p2">EMAIL:<input type='text' name='email' id='email' value='{{ old('email') }}'></p>
            <p class="p2">PASSWORD:<input type='password' name='password' id='password' value='{{ old('password') }}'></p>
        </div>

        <div class='form-group'>
          <p class="p3">REMEMBER ME: <input type='checkbox' name='remember' id='remember'></p>
        <!--  <label for='remember' class='checkboxLabel'>Remember me</label> -->
        </div>

        <p class="p2"><button type='submit' class='btn btn-primary'>Login</button></p>

    </form>

    <p class="p3">Don't have an account? <a href='/register'>Register here...</a></p>
@stop
