<div class="productsandcategory">
    <div class="leftmenu">
        <div class="subsubcategories">
            <div class="mobilesubcategory">
                <h5 class="spaced_subcategories marked" onclick="select_highlighted(this, 'spaced_subcategories')">Jar</h5>
                <h5 class="spaced_subcategories" onclick="select_highlighted(this, 'spaced_subcategories')">Leto</h5>
                <h5 class="spaced_subcategories" onclick="select_highlighted(this, 'spaced_subcategories')">Jeseň</h5>
                <h5 class="spaced_subcategories" onclick="select_highlighted(this, 'spaced_subcategories')">Zima</h5>
            </div>
        </div>

        <div class="filterswidth" style="padding-left: 20px;">
            <div class="mobilefilters">
                <div style="min-width: 280px;">
                    <div class="filters">
                        <h5 class="filtertexts">Veľkosť</h5>
                        <img src="{{URL::asset('images/arrow_down.png')}}" onclick="showCheckboxes('testing', this)" alt="arwdwn" width="20px" height="20px" class="arrowpadding">
                    </div>
                    <div id="testing">
                        <div id="XS" class="checkOLD" onclick="changeSize(this)">XS</div>
                        <div id="S" class="checkOLD" onclick="changeSize(this)">S</div>
                        <div id="M" class="checkOLD" onclick="changeSize(this)">M</div>
                        <div id="L" class="checkOLD" onclick="changeSize(this)">L</div>
                        <div id="XL" class="checkOLD" onclick="changeSize(this)">XL</div>
                    </div>
                </div>
                <div style="min-width: 280px;">
                    <div class="filters">
                        <h5 class="filtertexts">Farba</h5>
                        <img src="{{URL::asset('images/arrow_down.png')}}" onclick="showCheckboxes('testing1', this)" alt="arwdwn" width="20px" height="20px" class="arrowpadding">
                    </div>
                    <div id="testing1">
                        <div style="display: flex; margin-top: 5px;">
                            <div style="padding-left: 5px; display: flex; gap: 5px; width: 50%;">
                    <span class="dot" style="background-color: blue; color: blue" onclick="selectMarker('blue')">
                        <img src="{{URL::asset('images/white_mark.png')}}" alt="whtmrk" id="marker_blue" class="unselected" width="25px" height="25px" style="padding-bottom: 3px; padding-left: 3px;">
                    </span>
                                <h6 style="padding-top: 3px;">Modrá</h6>
                            </div>
                            <div style="padding-left: 5px; display: flex; gap: 5px; width: 50%;">
                    <span class="dot" style="background-color: red;" onclick="selectMarker('red')">
                        <img src="{{URL::asset('images/black_mark.png')}}" alt="blckmrk" id="marker_red" class="unselected" width="25px" height="25px" style="padding-bottom: 3px; padding-left: 3px;">
                    </span>
                                <h6 style="padding-top: 3px;">Červená</h6>
                            </div>
                        </div>
                        <div style="display: flex; margin-top: 5px;">
                            <div style="padding-left: 5px; display: flex; gap: 5px; width: 50%;">
                    <span class="dot" style="background-color: black;" onclick="selectMarker('black')">
                        <img src="{{URL::asset('images/white_mark.png')}}" alt="whtmrk" id="marker_black" class="unselected" width="25px" height="25px" style="padding-bottom: 3px; padding-left: 3px;">
                    </span>
                                <h6 style="padding-top: 3px;">Čierna</h6>
                            </div>
                            <div style="padding-left: 5px; display: flex; gap: 5px; width: 50%;">
                    <span class="dot" style="background-color: white;" onclick="selectMarker('white')">
                        <img src="{{URL::asset('images/black_mark.png')}}" alt="blckmrk" id="marker_white" class="unselected" width="25px" height="25px" style="padding-bottom: 3px; padding-left: 3px;">
                    </span>
                                <h6 style="padding-top: 3px;">Biela</h6>
                            </div>
                        </div>
                        <div style="display: flex; margin-top: 5px;">
                            <div style="padding-left: 5px; display: flex; gap: 5px; width: 50%;">
                    <span class="dot" style="background-color: #3f2802;" onclick="selectMarker('brown')">
                        <img src="{{URL::asset('images/white_mark.png')}}" alt="whtmrk" id="marker_brown" class="unselected" width="25px" height="25px" style="padding-bottom: 3px; padding-left: 3px;">
                    </span>
                                <h6 style="padding-top: 3px;">Hnedá</h6>
                            </div>
                            <div style="padding-left: 5px; display: flex; gap: 5px; width: 50%;">
                    <span class="dot" style="background-color: yellow;" onclick="selectMarker('yellow')">
                        <img src="{{URL::asset('images/black_mark.png')}}" alt="blckmrk" id="marker_yellow" class="unselected" width="25px" height="25px" style="padding-bottom: 3px; padding-left: 3px;">
                    </span>
                                <h6 style="padding-top: 3px;">Žltá</h6>
                            </div>
                        </div>
                        <div style="display: flex; margin-top: 5px;">
                            <div style="padding-left: 5px; display: flex; gap: 5px; width: 50%;">
                    <span class="dot" style="background-color: green;" onclick="selectMarker('green')">
                        <img src="{{URL::asset('images/white_mark.png')}}" alt="whtmrk" id="marker_green" class="unselected" width="25px" height="25px" style="padding-bottom: 3px; padding-left: 3px;">
                    </span>
                                <h6 style="padding-top: 3px;">Zelená</h6>
                            </div>
                            <div style="padding-left: 5px; display: flex; gap: 5px; width: 50%;">
                    <span class="dot" style="background-color: pink;" onclick="selectMarker('pink')">
                        <img src="{{URL::asset('images/black_mark.png')}}" alt="blckmrk" id="marker_pink" class="unselected" width="25px" height="25px" style="padding-bottom: 3px; padding-left: 3px;">
                    </span>
                                <h6 style="padding-top: 3px;">Ružová</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobilefilters">
                <div style="min-width: 280px;">
                    <div class="filters">
                        <h5 class="filtertexts">Značka</h5>
                        <img src="{{URL::asset('images/arrow_down.png')}}" onclick="showCheckboxes('testing2', this)" alt="arwdwn" width="20px" height="20px" class="arrowpadding">
                    </div>
                    <div id="testing2">
                        <table style="width: 100%;">
                            <tr>
                                <td class="brandOLD" id="nike" onclick="changeBrand(this)" style="width: 33.33%; text-align: center;">
                                    <img src="{{URL::asset('images/logo/nike.png')}}" alt="whtmrk" class="unselected" width="90px" height="50px">
                                </td>
                                <td class="brandOLD" id="adidas" onclick="changeBrand(this)" style="width: 33.33%; text-align: center;">
                                    <img src="{{URL::asset('images/logo/adidas.png')}}" alt="whtmrk" class="unselected" width="60px" height="45px">
                                </td>
                                <td class="brandOLD" id="calvin-klein" onclick="changeBrand(this)" style="width: 33.33%; text-align: center;">
                                    <img src="{{URL::asset('images/logo/calvin-klein.png')}}" alt="whtmrk" class="unselected" width="60px" height="50px">
                                </td>
                            </tr>
                            <tr>
                                <td class="brandOLD" id="puma" onclick="changeBrand(this)" style="width: 33.33%; text-align: center;">
                                    <img src="{{URL::asset('images/logo/puma.png')}}" alt="whtmrk" class="unselected" width="60px" height="50px">
                                </td>
                                <td class="brandOLD" id="converse" onclick="changeBrand(this)" style="width: 33.33%; text-align: center;">
                                    <img src="{{URL::asset('images/logo/converse.png')}}" alt="whtmrk" class="unselected" width="70px" height="50px";>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div style="min-width: 280px;">
                    <div class="filters">
                        <h5 class="filtertexts">Cena</h5>
                        <img src="{{URL::asset('images/arrow_down.png')}}" onclick="showCheckboxes('testing3', this)" alt="arwdwn" width="20px" height="20px" class="arrowpadding">
                    </div>
                    <div id="testing3" style="text-align: center; padding-top: 10px;">
                        <form style="width: 50%;">
                            <label for="minPrice">Od:</label>
                            <input type="text" id="minPrice" name="minPrice" style="width: 50%;">
                        </form>

                        <h3 class="pricedash">-</h3>

                        <form style="width: 50%;">
                            <label for="maxPrice">Do:</label>
                            <input type="text" id="maxPrice" name="maxPrice" style="width: 50%;">
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div id="productList" class="row row-cols-1 row-cols-md-3 g-4 productList">
        <!-- Product cards will be dynamically added here -->
    </div>
</div>
