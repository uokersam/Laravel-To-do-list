<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('helpers.head')

<body>
@include('helpers.header')

<div id="app">
    @include('helpers.menu')

    <main class="py-4">
        @yield('content')
    </main>
</div>

@yield('sidebar')

@include('helpers.footer')

</body>
</html>
