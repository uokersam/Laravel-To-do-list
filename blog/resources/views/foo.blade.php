<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
{{--<link rel="stylesheet" href="css/app.css">--}}
<!-- Styles -->
    <style></style>
</head>
<body>
<?php
//$fooFromGet = $_GET['someinput'];
//echo $fooFromGet;
?>
<div class="foo">foo!</div>
<form action="/foo" method="get">
    @csrf
    <input type="text" placeholder="input some" name="someinput">
    <button>Submit btn</button>
</form>
</body>
</html>
