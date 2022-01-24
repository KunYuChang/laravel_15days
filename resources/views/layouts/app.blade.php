<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>

    <!-- /指到根目錄(public folder) -->
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js" charset="utf-8"></script>
</head>

<body>
    <header>
        <h2>頭</h2>
    </header>

    @yield('hero')

    <section class="body-content">
        @yield('content')
    </section>

    <footer>
        <h2>尾</h2>
    </footer>
</body>

</html>