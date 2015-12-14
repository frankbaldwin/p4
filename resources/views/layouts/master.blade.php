<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'MyGolf Handicap Calculator' --}}
        @yield('title','MyGolf Handicap Calculator')
    </title>
    @include('includes.head')
</head>
<body>

      @if(\Session::has('flash_message'))
          <div class='flash_message'>
              {{ \Session::get('flash_message') }}
          </div>
      @endif

	<div class="container">

  	  <header class="row">
  			  @include('includes.header')
  	  </header>


    	<div id="main" class="section">

    				@yield('content')

    	</div>

  </div>
		<footer class="row">

			@include('includes.footer')

		</footer>


</body>
</html>
