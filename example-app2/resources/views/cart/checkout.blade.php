
    <div class="col-12 col-md-4 bg-body-tertiary rounded-5">
        <form action="{{ route('checkout') }}" method="POST">
            @csrf
        <div class="row">
            <div class="col ps-lg-5 pt-5">
                <i class="fa-solid fa-cube" style="font-size: 34px;"></i>
                <p class="d-inline ps-lg-4" style="font-size: 26px">Spôsob doručenia</p>
            </div>
        </div>
            <input type="hidden" name="delivery_type" id="delivery-type-input" value="">
            <input type="hidden" name="payment_type" id="payment-type-input" value="">
            <input type="hidden" name="total_price" id="total-price-input" value="{{ $totalPrice }}">
        <div class="row">
            <div class="col-12 ps-3 pe-3 pt-3">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle w-100 d-none d-sm-block" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Doručenie
                    </button>
                    <button class="btn btn-secondary dropdown-toggle w-100 d-block d-sm-none" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-truck"></i>
                    </button>
                    <ul id="delivery-options" class="dropdown-menu">
                        <li><a class="dropdown-item" href="#" data-price="0" data-type="Vyzdvihnutie na predajni">Vyzdvihnutie na predajni</a></li>
                        <li><a class="dropdown-item" href="#" data-price="3" data-type="Doručenie Packeta">Doručenie Packeta</a></li>
                        <li><a class="dropdown-item" href="#" data-price="5" data-type="Doručenie kuriérom">Doručenie kuriérom</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col">
                <h4 class="cart_secondaryText">Celková cena:</h4>
            </div>
            <div class="col text-lg-end">
                <h4 style="color: darkgray">{{ number_format($totalPrice, 2) }}€</h4>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h4 class="cart_secondaryText">Doručenie:</h4>
            </div>
            <div class="col text-lg-end">
                <h4 id="delivery-price" style="color: darkgray">0.00€</h4>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h4 class="cart_mainText">Spolu:</h4>
            </div>
            <div class="col text-lg-end">
                <h4 id="total-price" style="color: darkgray">{{ number_format($totalPrice, 2) }}€</h4>
            </div>
        </div>
        <div class="row pt-4">
            <div class="col">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle w-100 d-none d-sm-block" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Spôsob platby
                    </button>
                    <button class="btn btn-primary dropdown-toggle w-100 d-block d-sm-none" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-credit-card"></i>
                    </button>
                    <ul class="dropdown-menu" id="payment-options">
                        <li><a class="dropdown-item" href="#" data-type="Platba Kartou">Platba Kartou</a></li>
                        <li><a class="dropdown-item" href="#" data-type="Apple Pay">Apple Pay</a></li>
                        <li><a class="dropdown-item" href="#" data-type="Dobierka">Dobierka</a></li>

                    </ul>
                </div>
            </div>
        </div>


        <div class="centered-form overflow-auto">
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstName">Meno</label>
                                <input type="text" class="form-control" id="firstName" placeholder="" name="name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lastName">Priezvisko</label>
                                <input type="text" class="form-control" id="lastName" placeholder="" name="surname">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mail">E-mail</label>
                        <input type="email" class="form-control" id="mail" aria-describedby="emailHelp" name="email">
                    </div>
                    <div class="form-group">
                        <label for="tel">Telefónne číslo</label>
                        <input type="text" class="form-control" id="tel" aria-describedby="tel" pattern="[0-9]+" placeholder="" name="phone_number">
                    </div>
                    <div class="form-group">
                        <label for="country">Krajina</label>
                        <input type="text" class="form-control" id="country" aria-describedby="country" placeholder="" name="country">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" placeholder="" name="address">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Zip">PSČ</label>
                                <input type="text" class="form-control" id="Zip" placeholder="" name="postal_code">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="City">Mesto</label>
                                <input type="text" class="form-control" id="City" placeholder="" name="city">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-lg w-100 btn-outline-dark">Prejst k pokladni</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>

