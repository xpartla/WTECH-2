<div class="flexorno">
    <div style="width: 100%;">
        <div style="display: flex; width: 100%; text-align: center;">

            <div class="subcategories" style="width: 90%;">
                <div class="mobilecategory">
                    <h5 class="spaced_categories" onclick="select_highlighted(this, 'spaced_categories')">Doplnky</h5>
                    <h5 class="spaced_categories" onclick="select_highlighted(this, 'spaced_categories')">Oblečenie</h5>
                </div>
                <div class="mobilecategory">
                    <h5 class="spaced_categories" onclick="select_highlighted(this, 'spaced_categories')" style="font-weight: bold; text-decoration: underline; color: black;">Obuv</h5>
                    <h5 class="spaced_categories" onclick="select_highlighted(this, 'spaced_categories')">Šport</h5>
                </div>
            </div>

            <div class="dropdown">
                <button id="sort" class="sort" style="min-width: 150px;">Dátum: najnovšie &#x21c5;</button>
                <div class="dropdown-content">
                    <a onclick="selectOption('Dátum: najnovšie &#x21c5;')">Dátum: najnovšie</a>
                    <a onclick="selectOption('Dátum: najstaršie &#x21c5;')">Dátum: najstaršie</a>
                    <a onclick="selectOption('Cena: najnižšia &#x21c5;')">Cena: najnižšia</a>
                    <a onclick="selectOption('Cena: najvyššia &#x21c5;')">Cena: najvyššia</a>
                </div>
            </div>

        </div>
        <div style="position: relative; z-index: -1;">
            <hr style="margin-left: 10px; margin-right: 10px; margin-top: -1px; border: 1px solid black; position: relative; z-index: -1;">
        </div>
    </div>
</div>
