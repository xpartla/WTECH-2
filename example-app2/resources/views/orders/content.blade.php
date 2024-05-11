<div class="container">
    <h1 class="mt-5 mb-4">Objednávky</h1>
    @if ($orders->isEmpty())
        <p>Zatiaľ nemáte žiadnu objednávku.</p>
    @else
        <ul class="list-group">
            @foreach ($orders as $order)
                <li class="list-group-item mb-4">
                    <h5 class="mb-3">ID objednávky: {{ $order->id }}</h5>
                    <p><strong>Meno:</strong> {{ $order->name }} {{ $order->surname }}</p>
                    <p><strong>Doručenie:</strong> {{ $order->delivery_type }}</p>
                    <p><strong>Typ platby:</strong> {{ $order->payment_type }}</p>
                    <p><strong>Stav:</strong> {{ $order->status }}</p>
                    <p><strong>Cena:</strong> {{ $order->total_price }}</p>
                    <p><strong>Email:</strong> {{ $order->email }}</p>
                    <p><strong>Telfónne číslo:</strong> {{ $order->phone_number }}</p>
                    <p><strong>Krajina:</strong> {{ $order->country }}</p>
                    <p><strong>Adresa:</strong> {{ $order->address }}</p>
                    <p><strong>PSČ:</strong> {{ $order->postal_code }}</p>
                    <p><strong>Mesto:</strong> {{ $order->city }}</p>

                    <h6 class="mt-3">Produkty:</h6>
                    <ul class="list-group list-group-flush">
                        @foreach ($order->orderProducts as $orderProduct)
                            <li class="list-group-item">
                                <p><strong>ID Produktu:</strong> {{ $orderProduct->product_id }}</p>
                                <p><strong>Veľkosť:</strong> {{ $orderProduct->size }}</p>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
    @endif
</div>
