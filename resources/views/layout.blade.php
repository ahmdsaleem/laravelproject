<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/main.css" rel="stylesheet" type="text/css" />




    <title>Laravel</title>
</head>
<body>

<div class="container">
    @yield('content')
</div>

<script src="js/jquery-3.3.1.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>
</body>
</html>
