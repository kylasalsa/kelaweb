<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ $title ?? 'Portofolio Kyla' }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <header class="header">
        <h1>{{ $name }}</h1>
        <p>{{ $title }}</p>
        <img src="/images/kyla.jpg" alt="Kyla Salsabillah" class="avatar">
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>© {{ date('Y') }} Kyla Salsabillah — dibuat dengan Laravel ♥</p>
    </footer>
</body>
</html>
