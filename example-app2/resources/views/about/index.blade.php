<!DOCTYPE html>
<html lang="en">
<head>
    @include('main.head')
    <title>About Us</title>
</head>
<body class="index-body">
@include('main.nav')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8 rounded-5" style="background-color: #F8F8F8">
            <h1 class="title_text">Style Harbor</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <h2 class="cart_mainText">Kto sme?</h2>
        <div class="card" style="border-radius: 20px">
            <p class="about_text mt-2"> Vítajte v e-shope Style Harbor, vášom jedinečnom mieste pre štýlové oblečenie, ktoré zdôrazní vašu osobnosť a výrazne vylepší váš šatník. Sme tu, aby sme vám priniesli najnovšie trendy v móde, bez kompromisu s kvalitou a pohodlím. Naším cieľom je poskytnúť vám široký výber oblečenia, ktoré vás bude tešiť a v ktorom sa budete cítiť sebavedomo každý deň.</p>
        </div>
    </div>
    <br>
    <div class="row">
        <h2 class="cart_mainText">Kde nás Nájdete?</h2>
        <div class="card"  style="border-radius: 20px">
            <p class="about_text mt-2">Vitajte v e-shope s oblečením Style Harbor! Nachádzame sa na adrese:</p>
            <p class="about_text">Style Harbor, s.r.o.</p>
            <p class="about_text">Ulica Módnosti 123</p>
            <p class="about_text">123 45 Módnostová</p>
            <p class="about_text">Slovenská republika</p>
        </div>
    </div>
    <br>
    <div class="row">
        <h2 class="cart_mainText">Obchodné podmienky</h2>
        <div class="card" style="border-radius: 20px">
            <div class="card-body">
                <a href="path/to/your/pdf/file.pdf" download>
                    <i style="color: goldenrod" class="fas fa-file-pdf fa-4x"></i>
                </a>
                <p>Naše obchodé podmienky na stiahnutie</p>
            </div>
        </div>
    </div>
</div>
@include('main.footer')
</body>
</html>
