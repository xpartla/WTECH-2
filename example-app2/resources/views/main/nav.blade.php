<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
    <div class="container-fluid">
        <a  class="navbar-brand" href="{{ route('main.index') }}">
            <i class="fa-solid fa-house navIconColor"></i>
        </a>
        <ul class="navbar-nav ms-auto d-flex flex-row">
            @guest
                <li class="nav-item me-3">
                    <a class="nav-link" href="{{ route('register') }}" >Registrácia</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="{{ route('login') }}" >Prihlásenie</a>
                </li>
            @else
                <li class="nav-item dropdown" id="navAll">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span><i class="fa-solid fa-user"></i></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item btn btn-danger">Odhlásiť</button>
                            </form>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('orders.index') }}">
                                @csrf
                                <button type="submit" class="dropdown-item btn btn-info">Objednávky</button>
                            </form>
                        </li>
                    </ul>
                </li>
            @endguest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cart.index') }}">
                        @auth
                            @if(auth()->user()->cart)
                                <span class="badge badge-pill bg-danger">{{ auth()->user()->cart->cartProducts->count() }}</span>
                            @endif
                        @endauth
                        <span><i class="fas fa-shopping-cart"></i></span>
                    </a>
                </li>
        </ul>
    </div>
</nav>
