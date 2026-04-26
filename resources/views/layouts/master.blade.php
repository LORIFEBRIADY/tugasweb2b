<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        @include('partials.navbar')
    </header>
    <h1>Website Lori Laravel</h1>
    <h2></h2>
    <main>
        @yield('content')
    </main>
    <footer>
        @include('partials.footer')
    </footer>
</body>
@stack('scripts')
</html>