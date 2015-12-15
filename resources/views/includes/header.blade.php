<!-- Header Blade -->

	<!--<div class ="logo">-->
	<div>
		<img class ="logo" src="images/logo.png" alt="logo" width="100%">
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
