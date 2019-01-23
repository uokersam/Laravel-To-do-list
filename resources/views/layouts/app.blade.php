<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('helpers.head')

<body>
<div id="app">

    @include('helpers.header')

    <main class="py-4">
        @yield('content')
    </main>

    @yield('sidebar')

    @include('helpers.footer')
</div>

</body>
</html>
