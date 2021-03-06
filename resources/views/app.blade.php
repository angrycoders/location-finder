<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>JKUAT Location Module</title>
		<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
		<link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">
		<link href="{{ asset('/css/bootstrap-theme.css') }}" rel="stylesheet">
		<link href="{{ asset('/css/nav.css') }}" rel="stylesheet">
		<link href="{{ asset('/css/style.css') }}" rel="stylesheet">
		<link href="{{ asset('/css/jquery-ui.css') }}" rel="stylesheet">
		<link href="{{ asset('/css/jquery-ui.structure.css') }}" rel="stylesheet">
		<link href="{{ asset('/css/jquery-ui.theme.css') }}" rel="stylesheet">

		<!-- Fonts -->
		<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
			<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
			<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
			<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->
		</head>
		<body>
		<div class="row clearfix">
			<nav class="navbar navbar-default navbar-fixed-top top_bar" style="background-color: #116611;" >
				<div class="container">
					<div class="navbar-header">
						<img class= "logo  pull-left" src="{{ url('img/logo-jkuat.jpg') }}">
						
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
						
						<a class="navbar-brand" href="#" style="margin-left: 5px;">Jomo Kenyatta University of Agriculture and Technology</a>
					</div>
					<div class="collapse navbar-collapse" style="color:white">

						<ul style="color:white" class="nav navbar-nav">							
							<li><a href="{{ url('/home') }}">Home</a></li>
							<li><a href="{{ url('/about') }}">About</a></li>
							<li><a href="{{ url('/contact') }}">Contact Us</a></li>
							<li class="dropdown">
								<a href="" class="dropdown-toggle" style= "color: #777777; background-color: none;" data-toggle="dropdown">Services<b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">Location Finder</a></li>
									<li><a href="#">Help Services</a></li>
									<li><a href="#">NoticeBoard</a></li>
								</ul>
							</li>							
						</ul>

						<ul class="nav navbar-nav navbar-right">
							@if (Auth::guest())
							<li><a href="{{ url('/auth/login') }}">Login</a></li>
							<li><a href="{{ url('/auth/register') }}">Register</a></li>
							@else
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" style= "color: #777777; background-color: none;" data-toggle="dropdown" role="button" aria-expanded="true">{{ Auth::user()->name }} <span class="caret" style= "color: #777777;"></span></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
									</ul>
								</li>
							@endif
						</ul>

					</div><!--/.nav-collapse -->
				</div>
			</nav>
			</div>
				<!-- <nav class="navbar navbar-default">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle Navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">JKUAT</a>
						</div>
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a href="{{ url('/home') }}">Home</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								@if (Auth::guest())
								<li><a href="{{ url('/auth/login') }}">Login</a></li>
								<li><a href="{{ url('/auth/register') }}">Register</a></li>
								@else
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
									</ul>
								</li>
								@endif
							</ul>
						</div>
					</div>
				</nav> -->
							@yield('content')
			<hr />
			<div class="container-fluid">
				<div class="row clearfix">
					<div class="col-md-12 column" id="footer">
						 <address> <strong>Jomo Kenyatta University of Technology</strong><br> P.O. Box 11<br> Juja, Kiambu<br> <abbr title="Phone">P:</abbr> 0710981830</address>
					</div>
				</div>
			</div>
				<!-- Scripts -->
				<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
				<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
				<script type="text/javascript" src="./js/jquery.min.js"></script>
				<script type="text/javascript" src="./js/bootstrap.min.js"></script>
				<script type="text/javascript" src="./js/jquery-ui.js"></script>
				<script type="text/javascript" src="./js/scripts.js"></script>
			</body>
		</html>