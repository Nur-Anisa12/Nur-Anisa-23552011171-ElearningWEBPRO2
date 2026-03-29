
<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

<!-- NAVBAR -->
<nav class="nav-florist" id="mainNav">
    <!-- Brand -->
    <a href="#" class="nav-brand">
        <img src="{{ asset('images/logo-2.png') }}" alt="Nuralisse Logo" class="nav-logo" />
        <div class="nav-brand__text">
            <span class="nav-brand__main">Nuralisse</span>
            <span class="nav-brand__sub">Florist</span>
        </div>
    </a>

    <!-- Desktop Links -->
    <ul class="nav-links">
        <li><a href="#" class="active">Home</a></li>
        <li><a href="#katalog">Katalog</a></li>
        <li><a href="#">Tentang Kami</a></li>
    </ul>

    <!-- Desktop CTA -->
    <a href="#" class="nav-cta">
        <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path
                d="M3 5h2l3.6 7.59L7.25 14A2 2 0 009 17h12v-2H9.42a.25.25 0 01-.24-.31L10 13h7.55a2 2 0 001.76-1.03L21 7H6.21" />
            <circle cx="9" cy="21" r="1" />
            <circle cx="20" cy="21" r="1" />
        </svg>
        Pesan Disini
    </a>

    <!-- Mobile Hamburger -->
    <button class="nav-hamburger" id="hamburger" aria-label="Menu">
        <span></span><span></span><span></span>
    </button>
</nav>

<!-- Mobile Drawer -->
<div class="nav-drawer" id="navDrawer">
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#katalog">Katalog</a></li>
        <li><a href="#">Tentang Kami</a></li>
    </ul>
    <a href="#" class="drawer-cta">Pesan Disini</a>
</div>

<script src="{{ asset('js/navbar.js') }}" defer></script>