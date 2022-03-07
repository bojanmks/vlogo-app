@extends("layouts.client")

@section("title")
    @parent | Restaurants
@endsection

@section("content")
    <div class="section-padding container">
        <div class="row">
            <div class="col-12 col-lg-3">
                <ul class="food-categories font-medium">
                    <li>
                        <a href="#" id="allCategories" class="active">All food</a>
                    </li>
                    <li>
                        <hr class="my-1"/>
                    </li>
                    @foreach($foodCategories as $fc)
                        <li>
                            <a href="#" class="food-category" data-id="{{ $fc->id }}" class="py-2">{{ $fc->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-12 col-lg-9">
                <form>
                    <div class="row">
                        <div class="col-12 col-lg-9 mt-3 mt-lg-0">
                            <input type="text" id="tbName" class="form-control font-small" autocomplete="off" placeholder="Restaurant name" @if(request()->has('keyword')) value="{{ request()->get("keyword") }}" @endif/>
                        </div>
                        <div class="col-12 col-lg-3  mt-3 mt-lg-0">
                            <select id="ddlSort" class="form-select font-small">
                                <option value="nameAsc">Name ascending</option>
                                <option value="nameDesc">Name descending</option>
                            </select>
                        </div>
                    </div>
                </form>
                <div class="mt-4 position-relative">
                    <div id="restaurantsWrapper" class="row pt-4">
                    </div>
                    <div id="restaurantsLoader" class="loader">
                        <div class="loader-image">
                            <img src="{{ asset("assets/images/loader.gif") }}" alt="Loader"/>
                        </div>
                    </div>
                </div>
                <div id="restaurantsPagination" class="mt-4 d-flex justify-content-center">
                </div>
            </div>
        </div>
    </div>
@endsection

@section("scripts")
    @parent
    <script src="{{ asset("assets/js/restaurants.min.js") }}"></script>
@endsection
