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
            @php
                $totalPrice = 0;
            @endphp

            @foreach ($groupedProducts as $product)
                @php
                    $totalPrice += $product->product->totalPrice;
                @endphp
            @endforeach
            @include('cart.cart-item-1')

        </div>

        @include('cart.checkout', ['totalPrice' => $totalPrice])
    </div>
</div>
@include('main.footer')

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var deliveryDropdown = document.getElementById('delivery-options');
        var paymentDropdown = document.getElementById('payment-options');
        var totalPriceDisplay = document.getElementById('total-price');
        var totalPriceInput = document.getElementById('total-price-input');
        var priceDisplay = document.getElementById('delivery-price');

        var finalPrice = document.getElementById('total-price');

        var deliveryTypeInput = document.getElementById('delivery-type-input');
        var paymentTypeInput = document.getElementById('payment-type-input');

        var totalPrice = <?php echo json_encode($totalPrice); ?>; // Get the initial total price

        // Event listener for delivery dropdown
        deliveryDropdown.addEventListener('click', function(event) {
            var selectedOption = event.target;
            if (selectedOption.tagName === 'A') {
                var selectedPrice = selectedOption.getAttribute('data-price');
                var selectedType = selectedOption.getAttribute('data-type');

                if (selectedPrice !== null) {
                    priceDisplay.textContent = selectedPrice + '.00€';
                    totalPriceDisplay.textContent = (parseFloat(totalPrice) + parseFloat(selectedPrice)).toFixed(2) + '€';
                    totalPriceInput.value = (parseFloat(totalPrice) + parseFloat(selectedPrice)).toFixed(2);
                }

                deliveryTypeInput.value = selectedType;
            }
            console.log(finalPrice);
        });

        // Event listener for payment dropdown
        paymentDropdown.addEventListener('click', function(event) {
            var selectedOption = event.target;
            if (selectedOption.tagName === 'A') {
                paymentTypeInput.value = selectedOption.getAttribute('data-type');
            }
        });
    });
</script>


</body>
</html>
