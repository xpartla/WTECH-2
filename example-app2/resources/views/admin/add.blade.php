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
            <!--<div class="col-md-6">
                <div class="form-group">
                    <label for="category">Category</label>
                    <input type="text" class="form-control" id="category" placeholder="Category">
                </div>
            </div>-->
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Dostupné veľkosti</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="sizeXS" value="XS">
                        <label class="form-check-label" for="sizeXS">XS</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="sizeS" value="S">
                        <label class="form-check-label" for="sizeS">S</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="sizeM" value="M">
                        <label class="form-check-label" for="sizeM">M</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="sizeL" value="L">
                        <label class="form-check-label" for="sizeL">L</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="sizeXL" value="XL">
                        <label class="form-check-label" for="sizeXL">XL</label>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Dostupné Farby</label><br>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="colorBlack" value="Black">
                        <label class="form-check-label" for="colorBlack">Čierna</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="colorWhite" value="White">
                        <label class="form-check-label" for="colorWhite">Biela</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="colorGrey" value="Grey">
                        <label class="form-check-label" for="colorGrey">Šedá</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="colorGreen" value="Green">
                        <label class="form-check-label" for="colorGreen">Zelená</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="colorBlue" value="Blue">
                        <label class="form-check-label" for="colorBlue">Modrá</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="colorOrange" value="Orange">
                        <label class="form-check-label" for="colorOrange">Oranžová</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="colorBrown" value="Brown">
                        <label class="form-check-label" for="colorBrown">Hnedá</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="colorRed" value="Red">
                        <label class="form-check-label" for="colorRed">Červená</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="colorYellow" value="Yellow">
                        <label class="form-check-label" for="colorYellow">Žltá</label>
                    </div>

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
