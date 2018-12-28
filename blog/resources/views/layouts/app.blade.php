

@section('title', 'App page')
<!doctype html>
<html lang="en">
@include('helpers.head')
<body>

@include('helpers.menu')

@section('sidebar')
    this is template master sidebar
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>