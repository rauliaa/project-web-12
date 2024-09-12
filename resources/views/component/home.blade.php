@extends('index')

@section('content')
    <!-- Content for the Home Page -->
    <div class="hero-section set-bg" data-setbg="{{ asset('yummy2-master/img/hero-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8">
                    <div class="hero-text">
                        <h2>Welcome to Yummy Recipes</h2>
                        <p>Discover delicious recipes and cooking tips that you will love.</p>
                        <a href="#" class="site-btn">Explore Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Other sections specific to the Home Page -->
    <section class="featured-recipe spad">
        <div class="section-title">
            <h5>Featured Recipes</h5>
        </div>
        <div class="container">
            <div class="row">
                <!-- Loop through featured recipes -->
                @foreach($featuredRecipes as $recipe)
                    <div class="col-lg-4 col-md-6">
                        <div class="featured-recipe-item">
                            <div class="featured-recipe-img set-bg" data-setbg="{{ asset('yummy2-master/img/' . $recipe->image) }}">
                                <i class="fa fa-plus"></i>
                            </div>
                            <div class="featured-recipe-text">
                                <h4>{{ $recipe->title }}</h4>
                                <p>{{ $recipe->description }}</p>
                                <a href="#" class="site-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
