<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
		<style>
			table form { margin-bottom: 0; }
			form ul { margin-left: 0; list-style: none; }
			.error { color: red; font-style: italic; }
			
		</style>
	</head>

	<body>

		<div class="container">

			<h1>后台</h1>

			<div class='navbar navbar-inverse'>
  				<div class='nav-collapse' style="height: auto; width: 100%">
    				<ul class="nav">
      					<li class="active"><a href="{{ URL::route('*') }}">Menu-1</a></li>
      					<li><a href="{{ URL::route('controllers.index') }}">Menu-2</a></li>
      					<li><a href="{{ URL::route('home') }}">前台首页</a></li>
    				</ul>
  				</div>
			</div>			

			@if (Session::has('message'))
				<div class="flash alert">
					<p>{{ Session::get('message') }}</p>
				</div>
				@endif

    				

    		@yield('main')

  		</div>

	</body>

</html>
