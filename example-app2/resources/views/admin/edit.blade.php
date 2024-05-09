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
                        <h2 class="text-center text-white">Editing produktu</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Meno Produktu</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="price">Cena</label>
                                <input type="number" class="form-control" name="price" id="price" step="0.01" min="0" value="{{ $product->price }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select class="form-control" id="category" name="category_id">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" @if($product->category_id == $category->id) selected @endif>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Product Sizes -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="sizes">Sizes</label><br>
                                @foreach ($sizes as $size)
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="size{{ $size->id }}" name="sizes[]" value="{{ $size->id }}" @if($product->sizes->contains($size->id)) checked @endif>
                                        <label class="form-check-label" for="size{{ $size->id }}">{{ $size->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Product Colors -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="colors">Colors</label><br>
                                @foreach ($colors as $color)
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="color{{ $color->id }}" name="colors[]" value="{{ $color->id }}" @if($product->colors->contains($color->id)) checked @endif>
                                        <label class="form-check-label" for="color{{ $color->id }}">{{ $color->name }}</label>
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
                            <label for="existing-images">Existing Images</label>
                            <div id="existing-images">
                                @php
                                    $productImagesPath = public_path($product->image);
                                    $productImages = glob("$productImagesPath/*");
                                @endphp
                                @foreach ($productImages as $imagePath)
                                    <div class="existing-image">
                                        <img src="{{ str_replace(public_path(), '', $imagePath) }}" alt="Product Image" class="img-fluid existing-image">
                                        <input type="checkbox" name="remove_images[]" value="{{ basename($imagePath) }}">
                                        <label for="remove_images[]">Remove</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>


                    <!-- Add a section to upload new images -->
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="new-images">Add New Images</label>
                                <input type="file" class="form-control" id="new-images" name="new_images[]" multiple>
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
