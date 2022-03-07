@extends("layouts.client")

@section("title")
    Vlogo | {{ $restaurant->name }}
@endsection

@section("content")
    <div class="section-padding container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb font-small">
                <li class="breadcrumb-item"><a class="color-primary" href="{{ route("restaurants.index") }}">Restaurants</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $restaurant->name }}</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-12 col-xl-3 order-2 order-xl-1">
                <ul class="food-categories font-medium">
                    <li>
                        <a href="#" id="allCategories" class="active">All food</a>
                    </li>
                    <li>
                        <hr class="my-1"/>
                    </li>
                    @foreach($restaurant->categories as $fc)
                        <li>
                            <a href="#" class="food-category" data-id="{{ $fc->id }}" class="py-2">{{ $fc->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-12 col-xl-6 mt-4 mt-xl-0 order-3 order-xl-2">
                <form>
                    <input type="hidden" id="idRestaurant" value="{{ $restaurant->id }}"/>
                    <div class="row">
                        <div class="col-12 col-lg-9 mt-3 mt-lg-0">
                            <input type="text" id="tbName" class="form-control font-small" autocomplete="off" placeholder="Search by name"/>
                        </div>
                        <div class="col-12 col-lg-3  mt-3 mt-lg-0">
                            <select id="ddlSort" class="form-select font-small">
                                <option value="nameAsc">Name ascending</option>
                                <option value="nameDesc">Name descending</option>
                                <option value="priceAsc">Price low > high</option>
                                <option value="priceDesc">Price high > low</option>
                            </select>
                        </div>
                    </div>
                </form>
                <div class="mt-4 position-relative">
                    <div id="foodWrapper" class="row pt-4">
                    </div>
                    <div id="foodLoader" class="loader">
                        <div class="loader-image">
                            <img src="{{ asset("assets/images/loader.gif") }}" alt="Loader"/>
                        </div>
                    </div>
                </div>
                <div id="foodPagination" class="mt-4 d-flex justify-content-center">
                </div>
            </div>
            <div class="col-12 col-xl-3 mt-4 mt-xl-0 order-1 order-xl-3 mb-4 mb-xl-0 border-start-0">
                <form action="{{ route('orders.store') }}" method="POST" id="orderForm" class="p-3 border rounded">
                    @csrf
                    <input type="hidden" name="restaurantId" value="{{ $restaurant->id }}"/>
                    <h3 class="font-medium text-center">Your order</h3>
                    <div class="mb-3">
                        <label for="address" class="form-label">Delivery address</label>
                        <input type="text" class="form-control font-small" id="address" name="address" placeholder="Delivery address"/>
                        <span class="error-message font-small">(Street Name) (Home Number)/[Apartment Number]</span>
                    </div>
                    <div class="mb-3">
                        <div id="orderItems">
                            <ul>
                            </ul>
                        </div>
                    </div>
                    <div class="text-center">
                        <input type="submit" value="Place order" id="btnOrder" class="btn btn-primary"/>
                    </div>
                    @include('partials.messages')
                </form>
            </div>
        </div>
    </div>
@endsection

@section("scripts")
    @parent
    <script src="{{ asset('assets/js/form-validation.min.js') }}"></script>
    <script src="{{ asset("assets/js/food.min.js") }}"></script>
@endsection
