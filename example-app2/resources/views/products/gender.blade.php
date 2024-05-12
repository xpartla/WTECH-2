<div class="categories">
    <div style="display: flex; width: 90%">
        <h5 class="spaced_headings" onclick="select_highlighted(this, 'spaced_headings')">Muži</h5>
        <h5 class="spaced_headings" onclick="select_highlighted(this, 'spaced_headings')">Ženy</h5>
        <h5 class="spaced_headings" onclick="select_highlighted(this, 'spaced_headings')">Deti</h5>
    </div>
    <script type="text/javascript">
        options = document.getElementsByClassName("spaced_headings");
        for (let i = 0; i < options.length; i++) {
            if (i === {{ $id }}) options[i].classList.add("marked");
        }
    </script>
    <div style="margin-right: 2%; margin-top: -10px;">
        <div class="input-group rounded" style="width: 150px;">
            <input type="search" id="search" class="form-control rounded" onkeyup="filterProducts()" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
        </div>
    </div>
</div>
<hr style="margin-left: 10px; margin-right: 10px; margin-top: -1px; border: 1px solid black">
