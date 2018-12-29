<!doctype html>
<html lang="en">

@section('title', 'Home')
@include('helpers.header')

<body>
<h1>Laravel educational project</h1>
<hr>
<h2>Navigation</h2>
@include('helpers.menu')
<hr>

@section('sidebar')

@show

<div class="container">
    @yield('content')
</div>

@include('helpers.footer')

</body>
</html>