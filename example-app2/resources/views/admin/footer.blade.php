<footer class="text-center text-sm-center text-white position-fixed" style="background-color: lightgrey">
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
                        <a href="{{ route('about.index') }}" class="text-white">O nás</a>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <a href="{{ route('about.index') }}" class="text-white">Obchodné podmienky</a>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <a href="{{ route('admin.index') }}" class="text-white">Admin</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
