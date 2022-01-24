<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body>
    @include('layouts.header')


    @yield('hero')

    <section class="body-content">
        @yield('content')
    </section>

    @include('layouts.footer')

</body>

</html>