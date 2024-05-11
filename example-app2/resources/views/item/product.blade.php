<div class="parent">
    <div class="firstchild">
        <div class="centering" style="display: flex;">
            <img src="" id ="the_picture" alt="picture" height="auto" width="100%">
        </div>
        <div class="centering" style="background-color: white; padding-bottom: 10px; display: flex; width: 100%; text-align: center;">

            <div id="leftarrow" style="width: 33.33%; background-color: #ffdc68; margin-left: 5%; text-align: center; padding-top: 5px; border-radius: 10px">
                <h6 style="transform: rotate(180deg); cursor: pointer; padding: 0;">&#10148</h6>
            </div>
            <div style="width: 33.33%; text-align: center;">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
            <div id="rightarrow" style="width: 33.33%; background-color: #ffdc68; margin-right: 5%; text-align: center; padding-top: 5px; border-radius: 10px;">
                <h6 style="cursor: pointer; padding: 0;">&#10148</h6>
            </div>

        </div>
    </div>
    <div class="secondchild">
        <div class="justify" style="display: flex; gap: 20px;">
            <div style="width: 90px; height: 50px;">
                <img src="" id ="the_logo" alt="picture" height="auto" width="100%" style="padding-top: 5px;">
                <script type="text/javascript">
                    document.getElementById("the_logo").src = '/images/logo/' + '{{$product->brands}}'.split('&quot;:&quot;')[1].split("&")[0] + '.png';
                </script>
            </div>
            <div>
                <h1>{{ $product['name'] }}</h1>
                <h6 style="color: #939393; padding-left: 5px">{{ $product['description'] }}</h6>
            </div>
        </div>
        <div class="block">
            <h2>{{ $product['price'] }} €</h2>
            <p style="color: #939393; margin-top: 10px; margin-left: 10px; font-size: 15px;">vrátane DPH</p>
        </div>
        <div class="centering" style="margin-top: 20px;">
            <h2>Farba:</h2>
            <div id="colors" class="justify"  style="display: flex; width: 100%; gap: 5%; border-radius: 10px; padding-top: 5px; padding-bottom: 5px;">
                <script type="text/javascript">
                    const reverse_mapping ={
                        'modrá': 'blue',
                        'červená': 'red',
                        'čierna': 'black',
                        'biela': 'white',
                        'hnedá': 'brown',
                        'žltá': 'yellow',
                        'zelená': 'green',
                        'ružová': 'pink'
                    }
                    @foreach($product->colors as $color)
                        productList = document.getElementById('colors');
                        productCard = document.createElement('div');
                        renamed_color = reverse_mapping['{{ $color->name }}']
                        productCard.innerHTML = `
                             <span class="circle" style="background-color: ${renamed_color };color:${renamed_color }" onclick="selectX('${renamed_color }')">
                                <img src="{{URL::asset('images/white_x.png')}}" id="${renamed_color }" class="colors" alt="picture" height="18px" width="20px" style="margin-top: 2px">
                             </span>
                        `;
                        productList.appendChild(productCard);
                    @endforeach
                </script>
            </div>
        </div>
        <div style="margin-top: 20px;">
            <h2>Veľkosť:</h2>
            <div id="sizes" class="sizes">
                <script type="text/javascript">
                    @foreach($product->sizes as $size)
                        productList = document.getElementById('sizes');
                        productCard = document.createElement('div');
                        productCard.innerHTML = `
                                 <div id="{{ $size->name }}" class="checkOLD" onclick="changeSize(this)">{{ $size->name }}</div>
                            `;
                        productList.appendChild(productCard);
                    @endforeach
                </script>
            </div>
        </div>
        <div style="margin-top: 20px; text-align: center">
            <button class="button">Pridať do košíka</button>
        </div>
    </div>
</div>
