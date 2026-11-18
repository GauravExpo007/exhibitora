<header class="site-header" id="siteHeader">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-5 py-4 lg:px-8">
        <a href="{{ route('home') }}" class="brand-mark" aria-label="Exhibitora home">EXHIBITORA<span>.</span></a>
        <button class="menu-toggle" type="button" aria-label="Toggle navigation" aria-expanded="false" data-menu-toggle><span></span><span></span><span></span></button>
        <nav class="main-nav" data-menu>
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
            <a href="{{ route('services.index') }}" class="{{ request()->routeIs('services.*') ? 'active' : '' }}">Services</a>
            <a href="{{ route('contact') }}" class="nav-cta">Let's talk <span>↗</span></a>
        </nav>
    </div>
</header>
