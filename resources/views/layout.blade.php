<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<title>
		@if (isset($title))
			$title
		@else
			{{ config('app.name', 'Laravel') }}
		@endif
	</title>

	<meta name="viewport"
		  content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<meta name="csrf_token" content="{{ csrf_token() }}"/>

	<link rel="shortcut icon" type="image/x-icon" href="images/icons/favicon.ico"/>
	<link rel="icon" type="image/x-icon" href="images/icons/favicon.ico"/>

	{!! \App\Http\Helpers\HTML::style('lib/bootstrap') !!}
	{!! \App\Http\Helpers\HTML::style('layout') !!}
</head>
<body>

@include('templates.navigation')

<div class="container" id="content">
	@if (!isset($banner) || !$banner)
		@include('templates.banner', ['banner' => \App\Http\Helpers\HTML::getRandomBanner()])
	@endif

	@yield('content')
</div>

@include('templates.footer')

<div id="scripts">
	{!! \App\Http\Helpers\HTML::script('lib/jquery') !!}

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
			integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
			crossorigin="anonymous">
	</script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
			integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
			crossorigin="anonymous">
	</script>

	{!! \App\Http\Helpers\HTML::script('app') !!}
</div>
</body>
</html>