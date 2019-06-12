<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/welcome.css') }}" rel="stylesheet"> 
  <title>Welcome to HackerPair</title>
</head>
<body> 
	<div id="app">
		<div id="NavLinks">
			@yield('Nav')
		</div>
		<div id="WelcomeBanner" class=jumbotron>
			@yield('Welcome')
		</div>

		<div>
			@section('advertisment')
				<p>Score some HackerPair swag in our store!</p>
			@show
		</div>
	</div>

	


</body>
</html>