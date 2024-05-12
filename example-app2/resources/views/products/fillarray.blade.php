<script type="text/javascript">
    all_records = [];
    @foreach($products as $product)
        final_colors = []
        @foreach($product->colors as $color)
            final_colors.push('{{ $color->name }}')
        @endforeach
        final_sizes = []
        @foreach($product->sizes as $size)
            final_sizes.push('{{ $size->name }}')
        @endforeach
        final_categories = []
        @foreach($product->categories as $category)
            final_categories.push('{{ $category->name }}')
        @endforeach
        final_subcategories = []
        @foreach($product->subcategories as $subcategory)
            final_subcategories.push('{{ $subcategory->name }}')
        @endforeach
        final_brands = []
        @foreach($product->brands as $brand)
            final_brands.push('{{ $brand->name }}')
        @endforeach

        filePaths = {!! $filePathsJson !!};
        firstFilePath = '/' + ((filePaths["{{ $product['id'] }}"][0]).split("public/"))[1]


         single_record = {
                id: '{{ $product['id'] }}',
                name: '{{ $product['name'] }}',
                price: {{ $product['price'] }},
                size: final_sizes,
                color: final_colors,
                dateAdded: '{{ $product['created_at'] }}',
                imageUrl: firstFilePath,
                gender: '{{ $product['gender'] }}',
                category: final_categories,
                subcategory: final_subcategories,
                brand: '{{$product->brands}}'.split('&quot;:&quot;')[1].split("&")[0]
            };
        console.log(firstFilePath);
        all_records.push(single_record);
    @endforeach
    // Printing the passed directory elements
    fillarray(all_records);

    // Initial rendering of products
    renderProducts(products);

</script>
