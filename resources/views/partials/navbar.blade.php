<style>
    .navbar {
        background: linear-gradient(90deg, #2c3e50, #3498db);
        padding: 16px 30px;
        display: flex;
        justify-content: space-between;
        color: white
    }
    .navbar .menu a {
        color: rgb(245, 213, 213);
        text-decoration: none;
        margin: 0 10px;
    }
    .navbar .menu a:hover {
        background-color: rgba(68, 65, 65, 0.2);
    }
    .navbar .menu a.active {
        background-color: white;
    }
</style>

<nav class="navbar">
    <div class="logo">Dashboard Lori</div>

    <div class="menu">
        <a href="/home" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
        <a href="/about" class="{{ request()->is('about') ? 'active' : '' }}">Tentang</a>
        <a href="/contact" class="{{ request()->is('contact') ? 'active' : '' }}">Kontak</a>
    </div>
</nav>


