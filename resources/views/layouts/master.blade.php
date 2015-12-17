<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'MyGolf Handicap Calculator' --}}
        @yield('title','MyGolf Handicap Calculator')
    </title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <link href="/css/header.css" rel="stylesheet">

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')
</head>
<body>

      @if(\Session::has('flash_message'))
          <div class='flash_message'>
              {{ \Session::get('flash_message') }}
          </div>
      @endif



  	  <header class="row">
        <div>
          <img class ="logo" src="/images/logo.png" alt="logo" width="100%">
        </div>
        <nav class='nav_bar'>
      			<div class="main_nav">
      					<ul>
      							@if(Auth::check())
      									<li><a href='/'>HOME</a></li>
      									<li><a href="create">ENTER NEW ROUND</a></li>
      									<li><a href="handicap">MY HANDICAP</a></li>
      									<li><a href='/logout'>LOG OUT</a></li>
      							@else
      									<li><a href='/'>HOME</a></li>
      									<li><a href='/login'>LOGIN</a></li>
      									<li><a href='/register'>REGISTER</a></li>
      							@endif
      					</ul>
      			</div>
      	</nav>
  	  </header>


    	<div id="main" class="section">

    				@yield('content')

    	</div>


		<footer class="row">

			@include('includes.footer')

		</footer>


</body>
</html>
