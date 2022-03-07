<div class="foodCol col-12 col-md-{{ $md }} col-lg-{{ $lg }} mb-4">
    <div class="foodDiv d-flex align-items-center justify-content-between align-items-center">
        <div class="food-image d-flex align-items-center">
            <img class="img-fluid rounded-circle" src="{{ asset("assets/images/food/" . $image) }}" alt="{{ $name }}"/>
        </div>
        <div class="food-text">
            <h3 class="font-medium">{{ $name }}</h3>
            <span class="font-small">${{ $price }}</span>
            <br/>
            <a data-id="{{ $id }}" class="add-food color-primary d-flex align-items-center" href="#"><i class="fas fa-plus me-1"></i>Add to order</a>
        </div>
    </div>
</div>
