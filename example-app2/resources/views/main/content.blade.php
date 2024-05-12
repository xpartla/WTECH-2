<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-3 main_container m-3 " style=" max-height: 75vh; background-image: url('{{ asset('images/man.jpg') }}');">
            <a class="index_link" href="{{ route('products.lol', ['id' => 0]) }}">
                <div class="content">
                    <h1>Muži</h1>
                </div>
            </a>
        </div>
        <div class="col-lg-3 main_container m-3 " style="max-height: 75vh; background-image: url('{{ asset('images/woman.jpg') }}');">
            <a class="index_link" href="{{ route('products.lol', ['id' => 1]) }}">
                <div class="content">
                    <h1>Ženy</h1>
                </div>
            </a>
        </div>
        <div class="col-lg-3 main_container m-3" style="max-height: 75vh; background-image: url('{{ asset('images/child.jpg') }}');">
            <a class="index_link" href="{{ route('products.lol', ['id' => 2]) }}">
                <div class="content">
                    <h1>Deti</h1>
                </div>
            </a>
        </div>
    </div>
</div>
