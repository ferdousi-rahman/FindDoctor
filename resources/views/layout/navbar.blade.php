<html>
	<head>
		<title> Hello </title>
		<link rel="stylesheet" type="text/css" href="{{ asset('css/navbarstyle.css') }}">
		@yield('head')
	</head>
	<body>
		<div id="navbar">
			<nav>
				<img src="/img/cloud.png" width="12%" height="100%">
				<ul>
					<li><a href="/">Home</a></li>
					<li><a href="/doctors">Nearby Doctors</a></li>
					<li><a href="#">Nearby Hospitals</a></li>
					<li><a href="#">Login</a></li>
				</ul>
			</nav>
		</div>
		<div id="content">
			@yield('body')
		</div>
	</body>
</html>
