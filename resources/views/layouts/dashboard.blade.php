<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <style>
        html, body {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
        }

        /* SIDEBAR */
        .sidebar {
            width: 220px;
            height: 100vh;
            background: linear-gradient(180deg, #455667, #34495e);
            color: white;
            padding: 20px;
            position: fixed;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
        }

        .sidebar a:hover {
            text-decoration: underline;
        }

        /* WRAPPER CONTENT */
        .wrapper {
            margin-left: 240px;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            width: 100%;
        }

        /* CONTENT */
        .content {
            flex: 1;
            padding: 20px;
        }

        /* FOOTER */
        footer {
            background: #2c3e50;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: auto;
        }

        /* NAVBAR */
        .navbar {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    {{-- SIDEBAR --}}
    <div class="sidebar">
        <h3>Side Bar</h3>
        <a href="/dashboard/profile">Profile</a>
        <a href="/dashboard/settings">Settings</a>
        <a href="/dashboard/logout">Logout</a>
    </div>

    {{-- WRAPPER --}}
    <div class="wrapper">

        {{-- NAVBAR --}}
        @include('partials.navbar')

        {{-- CONTENT --}}
        <div class="content">
            @yield('content')
        </div>

        {{-- FOOTER --}}
        @include('partials.footer')

    </div>

    {{-- SCRIPT --}}
    @stack('scripts')

</body>
</html>