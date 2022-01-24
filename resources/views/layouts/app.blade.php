<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body>
    @include('layouts.header', [
    'red' => (isset($red) ? $red : null),
    ])


    @yield('hero')
    @yield('page-title')

    <section class="body-content">
        @yield('content')
    </section>

    @include('layouts.footer')

</body>

</html>