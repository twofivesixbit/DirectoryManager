<!doctype html>
<html>
	<head>
		<title>Directory Manager</title>
		<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<meta name="csrf-token" content="{{ csrf_token() }}">
	</head>
	<body class="text-base bg-white font-sans text-black leading-loose">
		<div id="app">
			@include('partials.navbar')
			<div class="container mx-auto">
				@yield('content')
			</div>
		</div>
		<form class="hidden" id="logout-form" method="post" action="{{ route('logout') }}">
			@csrf
		</form>
		<script src="/js/app.js"></script>
	</body>
</html>