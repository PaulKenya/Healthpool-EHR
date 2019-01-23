<!DOCTYPE HTML>

<html>
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <title>Healthpool EHR</title>
		<link rel="stylesheet" href="{{asset('assets/accounts/css/main.css')}}" />
		<!-- <link rel="stylesheet" href="assets/accounts/css/font-awesome.min.css" /> -->
		<link rel="stylesheet" href="{{asset('assets/accounts/css/glovia.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/accounts/css/skins/default.css')}}" />
		<noscript><link rel="stylesheet" href="{{asset('assets/accounts/js/noscript.css')}}" /></noscript>
		<link href="{{asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

	</head>
	<style>

		.cloud {

			font-size: 45px;
			vertical-align: middle;
			color: white;
		}
	</style>
	<body>
		<div id="wrapper" class="gredient-bg">
			<header id="header">
				<div class="logo">
					<i class="cloud fa fa-fw fa-cloud"></i>
				</div>
				<div class="content">
					<div class="inner">
						<h1 style="color: white;">HEALTHPOOL</h1>
						<p style="color: white;">Kenyas first EHR. Sign up as a user or institution .Login if already have an account .</p>
					</div>
				</div>
				<nav>
					<ul>
						<li><a style="color: white;" href="{{ route('institution') }}">Institutions</a></li>
						<li><a style="color: white;" href="{{route('login')}}">Staff</a></li>
						<li><a style="color: white;" href="{{route('patient_login')}}">Patients </a></li>
						<li><a style="color: white;" href="{{route('login')}}">Admins</a></li>
						<li><a style="color: white;" href="{{route('login')}}">contact</a></li>
				        
						<!--<li><a href="#elements">Elements</a></li>-->
					</ul>
				</nav>
			</header>

			

		<!-- Footer -->
			<footer id="footer">
				<p style="color: white;" class="copyright"> Copyright &copy; <a style="color:white;" href="">Allaite informatics</a></p>
			</footer>
		</div>

		<!-- BG -->
		<div id="bg"></div>

		<!-- Scripts -->
		<script src="{{asset('assets/accounts/js/jquery.min.js')}}"></script>
		<script src="{{asset('assets/accounts/js/skel.min.js')}}"></script>
		<script src="{{asset('assets/accounts/js/util.js')}}"></script>
		<script src="{{asset('assets/accounts/js/util.js')}}"></script>
	</body>
</html>
