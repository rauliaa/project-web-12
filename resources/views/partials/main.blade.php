
@section('content')
    <!-- Bagian Resep Teratas Halaman -->
    <section class="page-top-recipe">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-2">
                    <div class="pt-recipe-item large-item">
                        <div class="pt-recipe-img set-bg" data-setbg="{{ asset('img/recipe-3.jpg') }}">
                            <i class="fa fa-plus"></i>
                        </div>
                        <div class="pt-recipe-text">
                            <span>10 Maret 2019</span>
                            <h3>Cannellini Aglio e Olio dengan Salmon</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 order-lg-1">
                    <div class="pt-recipe-item">
                        <div class="pt-recipe-img set-bg" data-setbg="{{ asset('img/recipe-1.jpg') }}">
                            <i class="fa fa-plus"></i>
                        </div>
                        <div class="pt-recipe-text">
                            <h4>Raw Vegan Carrot Cake Bites dengan Avocado</h4>
                        </div>
                    </div>
                    <div class="pt-recipe-item">
                        <div class="pt-recipe-img set-bg" data-setbg="{{ asset('img/recipe-2.jpg') }}">
                            <i class="fa fa-plus"></i>
                        </div>
                        <div class="pt-recipe-text">
                            <h4>Sup Lasagna Satu Wadah untuk Malam Minggu</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 order-lg-3">
                    <div class="pt-recipe-item">
                        <div class="pt-recipe-img set-bg" data-setbg="{{ asset('img/recipe-4.jpg') }}">
                            <i class="fa fa-plus"></i>
                        </div>
                        <div class="pt-recipe-text">
                            <h4>Beef Burger dengan Kentang Goreng dan Salad</h4>
                        </div>
                    </div>
                    <div class="pt-recipe-item">
                        <div class="pt-recipe-img set-bg" data-setbg="{{ asset('img/recipe-5.jpg') }}">
                            <i class="fa fa-plus"></i>
                        </div>
                        <div class="pt-recipe-text">
                            <h4>Lasagna Italia Klasik dengan Daging Sapi</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Bagian Resep Teratas Akhir -->
@endsection
