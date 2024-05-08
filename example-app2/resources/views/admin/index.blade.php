<!DOCTYPE html>
<html lang="en">
<head>
    @include('cart.head')
    <title>Admin</title>
</head>
<body class="index-body">
@include('main.nav')
<div class="centered-form">
    <div class="container">
        <div class="row justify-content-center">
            @include('admin.add')
        </div>
    </div>
</div>
@include('admin.products')
@include('main.footer')
</body>
</html>
