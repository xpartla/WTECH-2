@foreach ($groupedProducts as $product)
    <div class="row pt-3 bg-body-tertiary rounded-5 m-3 position-relative">
        <div class="col-lg-2 col-md-4 col-sm-4">
            @php
                // Construct full image URL
                $imagePath = asset($product->product->image); // Get full URL to the image directory
                $imageFiles = glob(public_path($product->product->image . '/*')); // Get list of image files in directory
                $firstImage = count($imageFiles) > 0 ? asset($product->product->image . '/' . basename($imageFiles[0])) : null; // Get URL of first image
            @endphp
            @if ($firstImage)
                <img class="mb-3 img-fluid cart_images rounded-4" src="{{ $firstImage }}" alt="{{ $product->product->name }}">
            @endif
        </div>
        <div class="col cart_text">
            <p class="cart_mainText">{{ $product->product->name }}</p>
            <p>Veľkosť: {{ $product->size }}</p>
        </div>
        <div class="col text-end position-absolute bottom-0 end-0">
            <div class="d-flex flex-column align-items-end">
                <div class="d-flex align-items-center mb-2">
                    <form class="pe-2" method="POST" action="{{ route('cart.update', ['id' => $product->id]) }}">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="action" value="add"> <!-- Hidden field to specify action -->
                        <button type="submit" class="btn btn-sm btn-outline-primary">+</button>
                    </form>
                    <span>{{ $product->count }}</span>
                    <form class="ps-2" method="POST" action="{{ route('cart.update', ['id' => $product->id]) }}">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="action" value="remove"> <!-- Hidden field to specify action -->
                        <button type="submit" class="btn btn-sm btn-outline-primary">-</button>
                    </form>
                    <form class="ps-2" method="POST" action="{{ route('cart.update', ['id' => $product->id]) }}">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="action" value="remove_all"> <!-- Hidden field to specify action -->
                        <button type="submit" class="btn btn-sm btn-outline-danger"><i class="fa-solid fa-trash"></i></button>
                    </form>

                </div>
            </div>
        </div>
        <div class="col text-end">
            <p>Cena: {{ $product->product->totalPrice }} €</p>
        </div>
</div>
@endforeach
