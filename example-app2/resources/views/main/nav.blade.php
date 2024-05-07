<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
    <div class="container-fluid">
        <a  class="navbar-brand" href="{{ route('main.index') }}">
            <i class="fa-solid fa-house navIconColor"></i>
        </a>
        <ul class="navbar-nav ms-auto d-flex flex-row">
            <li class="nav-item me-3">
                <a class="nav-link" href="#">
                    <span><i class="fa-solid fa-heart"></i></span>
                </a>
            </li>
            @guest
                <li class="nav-item me-3">
                    <a class="nav-link" href="{{ route('register') }}" >Signup</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="{{ route('login') }}" >Login</a>
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
                                <button type="submit" class="dropdown-item" style="background-color: red; color: white;">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            @endguest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('cart.index') }}">
                    <span class="badge badge-pill bg-danger">0</span>
                    <span><i class="fas fa-shopping-cart"></i></span>
                </a>
            </li>
        </ul>
    </div>
</nav>
