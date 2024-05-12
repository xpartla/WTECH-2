<!DOCTYPE html>
<html lang="en">
<head>
    @include('cart.head')
    <title>Admin</title>
</head>
<body class="index-body">
@include('main.nav')
<div class="centered-form position-sticky mt-5 pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 user_card_modified mb-3" id="add_prod">
                <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <h2 class="text-center text-white">Edit {{ $product->name }}</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="price">Cena</label>
                                <input type="number" class="form-control" name="price" id="price" step="0.01" min="0" value="{{ $product->price }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="brand">Značka</label>
                                <select class="form-control" id="brand" name="brand_id">
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="category">Kategória</label>
                                <select class="form-control" id="category" name="category_id[]" multiple>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="subcategory">Podkategória</label>
                                <select class="form-control" id="subcategory" name="subcategory_id[]" multiple>
                                    @foreach ($subcategories as $subcategory)
                                        <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Product Sizes -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="sizes">Veľkosti</label><br>
                                @foreach ($sizes as $size)
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="size{{ $size->id }}" name="sizes[]" value="{{ $size->id }}">
                                        <label class="form-check-label" for="size{{ $size->id }}">{{ $size->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Product Colors -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="colors">Farby</label><br>
                                @foreach ($colors as $color)
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="color{{ $color->id }}" name="colors[]" value="{{ $color->id }}">
                                        <label class="form-check-label" for="color{{ $color->id }}">{{ $color->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="gender">Pohlavie</label><br>
                                @foreach ($genderOptions as $option)
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="{{ $option }}" name="gender" value="{{ $option }}" {{ $product->gender == $option ? 'checked' : '' }}>
                                        <label class="form-check-label" for="{{ $option }}">{{ ucfirst($option) }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <label for="description">Popis Produktu</label>
                            <textarea class="form-control" id="description" name="description">{{ $product->description }}</textarea>
                        </div>
                    </div>
                    <!-- Add a section to display existing images -->
                    <div class="row">
                        <div class="col">
                            <label for="existing-images">Obrázky</label>
                            <div id="existing-images">
                                @if ($product->image)
                                    @php
                                        $productImagesPath = public_path($product->image);
                                        $productImages = glob("$productImagesPath/*");
                                    @endphp
                                    @foreach ($productImages as $imagePath)
                                        <div class="existing-image">
                                            <img src="{{ str_replace(public_path(), '', $imagePath) }}" alt="Product Image" class="img-fluid existing-image">
                                            <input type="checkbox" name="remove_images[]" value="{{ basename($imagePath) }}">
                                            <label for="remove_images[]">Orstrániť</label>
                                        </div>
                                    @endforeach
                                @else
                                    <p>žiadne obrázky.</p>
                                @endif
                            </div>
                        </div>
                    </div>


                    <!-- Add a section to upload new images -->
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="image">Pridať obrázky</label>
                                <input type="file" class="form-control" id="image" name="image[]" multiple>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-primary float-right">Upraviť produkt</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('admin.footer')
</body>
</html>
