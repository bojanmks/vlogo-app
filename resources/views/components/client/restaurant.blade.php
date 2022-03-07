<div class="restaurantCol col-12 col-md-{{ $md }} col-lg-{{ $lg }} mb-4">
    <a href="{{ route("restaurants.show", ["restaurant" => $id]) }}">
        <div class="restaurantDiv rounded position-relative shadow" style="background-image: url({{ asset("assets/images/restaurants/" . $image) }});">
            <div class="restaurantText position-absolute top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">
                <h3 class="rounded font-large p-1 text-center fw-normal">{{ $name }}</h3>
                <ul class="d-flex">
                    @foreach($categories as $c)
                        <li class="font-small text-center p-1 rounded mx-1">{{ $c->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </a>
</div>
