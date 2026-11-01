<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Олимпийские игры</title>
    <!-- Подключаем наш скомпилированный CSS -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>

    <nav class="navbar navbar-light bg-light mb-4">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('olympics.index') }}">
                <span class="logo-box me-2">O</span>
                <span class="brand-text">Олимпийские игры</span>
            </a>
            <a href="{{ route('olympics.create') }}" class="btn btn-primary">Добавить</a>
        </div>
    </nav>

    <main class="container">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @yield('content')
    </main>

    <footer class="footer mt-5 py-4">
        <div class="container d-flex justify-content-between align-items-center">
            <p class="mb-0">Усмонзода Имомали Сафевулло</p>
            <div>
                <a href="#" class="social-link">in</a>
                <a href="#" class="social-link">f</a>
                <a href="#" class="social-link">♥</a>
            </div>
        </div>
    </footer>

    <!-- Подключаем наш скомпилированный JS -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>