<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">El Trenos Hermanos</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link @if (Route::is('table')) active @endif"
                            href="{{ route('table') }}">Treni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (Route::is('ticket')) active @endif"
                            href="{{ route('ticket') }}">Biglietti</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
