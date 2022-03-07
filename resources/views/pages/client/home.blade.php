@extends("layouts.client")

@section("title")
    Vlogo | Home
@endsection

@section("content")
    <div id="mainSlider" class="vh-100 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 d-none d-lg-flex justify-content-center">
                    <div id="homepageImage">
                        <img src="{{ asset("assets/images/homepage/homepage_burger.png") }}" alt="Image of a burger" class="img-fluid"/>
                    </div>
                </div>
                <div class="col-12 col-lg-6 text-center text-lg-start d-flex flex-column justify-content-center align-items-center align-items-lg-start">
                    <h1 class="font-xxl">Best food delivery service in the world</h1>
                    <form id="homepageForm" class="mt-4" onsubmit="return false;">
                        <div class="input-group shadow position-relative">
                            <span class="input-group-text font-small py-2 px-3 rounded-start"><i class="fa-solid fa-magnifying-glass"></i></span>
                            <input autocomplete="off" id="tbSearch" type="text" class="form-control font-small p-2 rounded-end" placeholder="Search for a specific restaurant"/>
                            <div id="searchResults" class="position-absolute top-100 left-0 w-100 rounded">
                                <ul>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="mainSliderWave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 350.88,-49.98 500.00,49.98 L500.00,0.00 L0.00,0.00 Z" style="stroke: none;"></path></svg></div>
    <div id="recommendedRestaurants" class="pb-5">
        <h2 class="font-xl text-center mb-5">Recommended by <span class="color-secondary">Vlogo</span></h2>
        <div class="container">
            <div class="row">
                @foreach($recommendedRestaurants as $r)
                    <x-restaurant :id="$r->id" :name="$r->name" :image="$r->image" :categories="$r->topCategories" />
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section("scripts")
    @parent
    <script src="{{ asset("assets/js/home.min.js") }}"></script>
@endsection
