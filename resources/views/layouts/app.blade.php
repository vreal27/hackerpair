<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>Welcome to HackerPair</title>
</head>
<body> 
	<div>
		@yield('content')
	</div>

	<div>
		@section('advertisment')
			<p>
				Score some HackerPair swag in our store!
			</p>
		@show
	</div>
	


</body>
</html>