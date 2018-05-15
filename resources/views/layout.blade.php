<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet"
          href="css/lib/bootstrap.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
          crossorigin="anonymous">

    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <meta name="csrf_token" content="{{ csrf_token() }}"/>

    <link rel="shortcut icon" type="image/x-icon" href="images/icons/favicon.ico"/>
    <link rel="icon" type="image/x-icon" href="images/icons/favicon.ico"/>

    {!! HTML::style('layout') !!}
</head>
<body>

@yield('content')

<div id="scripts">
    <script src="js/lib/jquery.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
            integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
            crossorigin="anonymous">
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
            integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
            crossorigin="anonymous">
    </script>
</div>
</body>
</html>