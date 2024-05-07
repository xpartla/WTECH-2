<!doctype HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/be3419b194.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="products.css">
    <title>Home</title>
</head>
<body class="index-body">
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
    <div class="container-fluid">
        <a  class="navbar-brand" href="index.html">
            <i class="fa-solid fa-house navIconColor"></i>
        </a>
        <ul class="navbar-nav ms-auto d-flex flex-row">
            <li class="nav-item me-3">
                <a class="nav-link" href="#">
                    <span><i class="fa-solid fa-heart"></i></span>
                </a>
            </li>
            <li class="nav-item dropdown" id="navAll">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span><i class="fa-solid fa-user"></i></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="signup.html">Signup</a></li>
                    <li><a class="dropdown-item" href="login.html">Login</a></li>
                    <li><a class="dropdown-item" href="#" style="background-color: red; color: white;">Logout</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cart.html">
                    <span class="badge badge-pill bg-danger">0</span>
                    <span><i class="fas fa-shopping-cart"></i></span>
                </a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8 rounded-5" style="background-color: #F8F8F8">
            <h1 class="title_text">Style Harbor</h1>
        </div>
    </div>
</div>

<div class="categories">
    <div style="display: flex; width: 90%">
        <h5 class="spaced_headings" onclick="select_highlighted(this, 'spaced_headings')" style="text-decoration: underline; font-weight: bold; color: black;">Muži</h5>
        <h5 class="spaced_headings" onclick="select_highlighted(this, 'spaced_headings')">Ženy</h5>
        <h5 class="spaced_headings" onclick="select_highlighted(this, 'spaced_headings')">Deti</h5>
    </div>
    <div style="margin-right: 2%; margin-top: -10px;">
        <div class="input-group rounded" style="width: 150px;">
            <input type="search" id="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
        </div>
    </div>
</div>
<hr style="margin-left: 10px; margin-right: 10px; margin-top: -1px; border: 1px solid black">

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

<div class="productsandcategory">
    <div class="leftmenu">
        <div class="subsubcategories">
            <div class="mobilesubcategory">
                <h5 class="spaced_subcategories" style="font-weight: bold; text-decoration: underline; color: black;" onclick="select_highlighted(this, 'spaced_subcategories')">Novinky</h5>
                <h5 class="spaced_subcategories" onclick="select_highlighted(this, 'spaced_subcategories')">Obľúbené</h5>
            </div>
            <div class="mobilesubcategory">
                <h5 class="spaced_subcategories" onclick="select_highlighted(this, 'spaced_subcategories')">Výpredaj</h5>
                <h5 class="spaced_subcategories" onclick="select_highlighted(this, 'spaced_subcategories')">Tenisky</h5>
            </div>
            <div class="mobilesubcategory">
                <h5 class="spaced_subcategories" onclick="select_highlighted(this, 'spaced_subcategories')">Čižmy</h5>
                <h5 class="spaced_subcategories" onclick="select_highlighted(this, 'spaced_subcategories')">Sandále</h5>
            </div>
        </div>

        <div class="filterswidth" style="padding-left: 20px;">
            <div class="mobilefilters">
                <div style="min-width: 280px;">
                    <div class="filters">
                        <h5 class="filtertexts">Veľkosť</h5>
                        <img src="src/arrow_down.png" onclick="showCheckboxes('testing', this)" alt="arwdwn" width="20px" height="20px" class="arrowpadding">
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
                        <img src="src/arrow_down.png" onclick="showCheckboxes('testing1', this)" alt="arwdwn" width="20px" height="20px" class="arrowpadding">
                    </div>
                    <div id="testing1">
                        <div style="display: flex; margin-top: 5px;">
                            <div style="padding-left: 5px; display: flex; gap: 5px; width: 50%;">
                    <span class="dot" style="background-color: blue; color: blue" onclick="selectMarker('blue')">
                        <img src="src/white_mark.png" alt="whtmrk" id="marker_blue" class="unselected" width="25px" height="25px" style="padding-bottom: 3px; padding-left: 3px;">
                    </span>
                                <h6 style="padding-top: 3px;">Modrá</h6>
                            </div>
                            <div style="padding-left: 5px; display: flex; gap: 5px; width: 50%;">
                    <span class="dot" style="background-color: red;" onclick="selectMarker('red')">
                        <img src="src/black_mark.png" alt="blckmrk" id="marker_red" class="unselected" width="25px" height="25px" style="padding-bottom: 3px; padding-left: 3px;">
                    </span>
                                <h6 style="padding-top: 3px;">Červená</h6>
                            </div>
                        </div>
                        <div style="display: flex; margin-top: 5px;">
                            <div style="padding-left: 5px; display: flex; gap: 5px; width: 50%;">
                    <span class="dot" style="background-color: black;" onclick="selectMarker('black')">
                        <img src="src/white_mark.png" alt="whtmrk" id="marker_black" class="unselected" width="25px" height="25px" style="padding-bottom: 3px; padding-left: 3px;">
                    </span>
                                <h6 style="padding-top: 3px;">Čierna</h6>
                            </div>
                            <div style="padding-left: 5px; display: flex; gap: 5px; width: 50%;">
                    <span class="dot" style="background-color: white;" onclick="selectMarker('white')">
                        <img src="src/black_mark.png" alt="blckmrk" id="marker_white" class="unselected" width="25px" height="25px" style="padding-bottom: 3px; padding-left: 3px;">
                    </span>
                                <h6 style="padding-top: 3px;">Biela</h6>
                            </div>
                        </div>
                        <div style="display: flex; margin-top: 5px;">
                            <div style="padding-left: 5px; display: flex; gap: 5px; width: 50%;">
                    <span class="dot" style="background-color: #3f2802;" onclick="selectMarker('brown')">
                        <img src="src/white_mark.png" alt="whtmrk" id="marker_brown" class="unselected" width="25px" height="25px" style="padding-bottom: 3px; padding-left: 3px;">
                    </span>
                                <h6 style="padding-top: 3px;">Hnedá</h6>
                            </div>
                            <div style="padding-left: 5px; display: flex; gap: 5px; width: 50%;">
                    <span class="dot" style="background-color: yellow;" onclick="selectMarker('yellow')">
                        <img src="src/black_mark.png" alt="blckmrk" id="marker_yellow" class="unselected" width="25px" height="25px" style="padding-bottom: 3px; padding-left: 3px;">
                    </span>
                                <h6 style="padding-top: 3px;">Žltá</h6>
                            </div>
                        </div>
                        <div style="display: flex; margin-top: 5px;">
                            <div style="padding-left: 5px; display: flex; gap: 5px; width: 50%;">
                    <span class="dot" style="background-color: green;" onclick="selectMarker('green')">
                        <img src="src/white_mark.png" alt="whtmrk" id="marker_green" class="unselected" width="25px" height="25px" style="padding-bottom: 3px; padding-left: 3px;">
                    </span>
                                <h6 style="padding-top: 3px;">Zelená</h6>
                            </div>
                            <div style="padding-left: 5px; display: flex; gap: 5px; width: 50%;">
                    <span class="dot" style="background-color: pink;" onclick="selectMarker('pink')">
                        <img src="src/black_mark.png" alt="blckmrk" id="marker_pink" class="unselected" width="25px" height="25px" style="padding-bottom: 3px; padding-left: 3px;">
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
                        <img src="src/arrow_down.png" onclick="showCheckboxes('testing2', this)" alt="arwdwn" width="20px" height="20px" class="arrowpadding">
                    </div>
                    <div id="testing2">
                        <table style="width: 100%;">
                            <tr>
                                <td class="brandOLD" id="nike" onclick="changeBrand(this)" style="width: 33.33%; text-align: center;">
                                    <img src="src/logo/nike.png" alt="whtmrk" class="unselected" width="90px" height="50px">
                                </td>
                                <td class="brandOLD" id="adidas" onclick="changeBrand(this)" style="width: 33.33%; text-align: center;">
                                    <img src="src/logo/adidas.png" alt="whtmrk" class="unselected" width="60px" height="45px">
                                </td>
                                <td class="brandOLD" id="calvin-klein" onclick="changeBrand(this)" style="width: 33.33%; text-align: center;">
                                    <img src="src/logo/calvin-klein.png" alt="whtmrk" class="unselected" width="60px" height="50px">
                                </td>
                            </tr>
                            <tr>
                                <td class="brandOLD" id="puma" onclick="changeBrand(this)" style="width: 33.33%; text-align: center;">
                                    <img src="src/logo/puma.png" alt="whtmrk" class="unselected" width="60px" height="50px">
                                </td>
                                <td class="brandOLD" id="converse" onclick="changeBrand(this)" style="width: 33.33%; text-align: center;">
                                    <img src="src/logo/converse.png" alt="whtmrk" class="unselected" width="70px" height="50px";>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div style="min-width: 280px;">
                    <div class="filters">
                        <h5 class="filtertexts">Cena</h5>
                        <img src="src/arrow_down.png" onclick="showCheckboxes('testing3', this)" alt="arwdwn" width="20px" height="20px" class="arrowpadding">
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

<div style="text-align: right; display: flex; gap: 6px; float: right; margin-right: 50px;">
    <h6 style="transform: rotate(180deg); cursor: pointer;">&#10148</h6>
    <h6 class="pagination" onclick="select_highlighted(this, 'pagination')" style="font-weight: bold; color: black; text-decoration: underline;">1</h6>
    <h6 class="pagination" onclick="select_highlighted(this, 'pagination')">2</h6>
    <h6 class="pagination" onclick="select_highlighted(this, 'pagination')">3</h6>
    <h6 style="color: #808080;">...</h6>
    <h6 class="pagination" onclick="select_highlighted(this, 'pagination')">15</h6>
    <h6 style="cursor: pointer;">&#10148</h6>
</div>

<footer class="text-center text-sm-center text-white position-sticky" style="background-color: lightgrey; margin-top: 50px;">
    <div class="container pb-2">
        <div class="col">
            <button class="btn btn-link text-white d-block d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseContent" aria-expanded="false" aria-controls="collapseContent">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse d-md-block" id="collapseContent">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <a class="text-white" href="#">© 2024 Copyright: Style Harbor</a>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <a href="about.html" class="text-white">O nás</a>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <a href="about.html" class="text-white">Obchodné podmienky</a>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <a href="admin.html" class="text-white">Admin</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="products.js"></script>
</body>
</html>
