<!DOCTYPE html>
<html lang="en">
<head>
    @include('cart.head')
    <title>Shopping Cart</title>
</head>
<body class="index-body">
    @include('main.nav')
    @include('main.title')

<div class="container">
    <div class="row">
        <div class="col-12 col-md-8">
            <div class="row m-3">
                <div class="col">
                    <h2>Zhrnutie nákupu</h2>
                </div>
                <div class="col text-end">
                    <h2>Cena</h2>
                </div>
            </div>
            @include('cart.cart-item-1')
        </div>

        @include('cart.checkout')
    </div>
</div>
@include('main.footer')
</body>
</html>
