<div class="col-md-6 user_card_modified mb-3" id="add_prod">
    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <h2 class="text-center text-white">Pridanie produktu</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Meno Produktu</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="price">Cena</label>
                    <input type="number" class="form-control" name="price" id="price" step="0.01" min="0" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" id="category" name="category_id">
                        <option value="">Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
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
                            <input class="form-check-input" type="checkbox" id="size{{ $size->id }}" name="sizes[]" value="{{ $size->id }}">
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
                            <input class="form-check-input" type="checkbox" id="color{{ $color->id }}" name="colors[]" value="{{ $color->id }}">
                            <label class="form-check-label" for="color{{ $color->id }}">{{ $color->name }}</label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <label for="description">Popis Produktu</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary float-right">Pridať produkt</button>
            </div>
        </div>
    </form>
</div>
