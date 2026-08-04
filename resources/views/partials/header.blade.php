<header class="sticky-top">
    <nav class="navbar navbar-expand-lg custom-navbar shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <span class="navbar-brand-accent">Comics</span> Shop
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    {{-- Evidenzio il link della pagina in cui mi trovo --}}
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('fumetti') ? 'active' : '' }}" href="{{ route('fumetti') }}">Fumetti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('il-progetto') ? 'active' : '' }}" href="{{ route('il-progetto') }}">Il Progetto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contatti') ? 'active' : '' }}" href="{{ route('contatti') }}">Contatti</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
