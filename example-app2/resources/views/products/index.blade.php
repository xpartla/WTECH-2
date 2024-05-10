
<html lang="en">
<head>
    @include('main.head')
    <title>Home</title>
</head>

<body class="index-body">

@include('main.nav')

@include('main.title')

@include('products.categories')

@include('products.subcategories')

@include('products.productsandcategories')

@include('products.paging')

@include('main.footer')

@include('products.logic')

@include('products.fillarray')

</body>
</html>
