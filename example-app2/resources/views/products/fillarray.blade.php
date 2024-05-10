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

        filePaths = {!! $filePathsJson !!};
        firstFilePath = ((filePaths["{{ $product['id'] }}"][0]).split("public/"))[1]

         single_record = {
                id: '{{ $product['id'] }}',
                name: '{{ $product['name'] }}',
                price: {{ $product['price'] }},
                size: final_sizes,
                color: final_colors,
                dateAdded: '{{ $product['created_at'] }}',
                imageUrl: firstFilePath,
                gender: ['muži'],
                category: final_categories,
                subcategory: ['nové', 'obľúbené', 'tenisky'],
                brand: 'calvin-klein'
            };
        all_records.push(single_record);
    @endforeach
    // Printing the passed directory elements
    fillarray(all_records);

    // Initial rendering of products
    renderProducts(products);

</script>
