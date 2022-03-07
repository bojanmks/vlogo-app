@extends('layouts.admin')

@section('contentHeader')
    <h1>Edit restaurant</h1>
@endsection

@section('content')
    <form id="restaurantForm" action="{{ route('admin.restaurants.update', ["restaurant" => $restaurant->id]) }}" method="POST" class="standard-form" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" id="name" placeholder="Name" value="{{ $restaurant->name }}"/>
            <span class="font-small error-message">This field is required</span>
        </div>
        <div class="mb-3">
            <label for="image">Image (Leave empty if unchanged)</label>
            <input class="form-control-file" type="file" name="image" id="image"/>
            <span class="font-small error-message">Image is required</span>
        </div>
        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" name="recommended" id="recommended" @if($restaurant->recommended) checked @endif/>
            <label class="form-check-label" for="recommended">Recommended</label>
        </div>
        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" name="active" id="active" @if($restaurant->active) checked @endif/>
            <label class="form-check-label" for="active">Active</label>
        </div>
        <div class="text-center">
            <input id="btnSubmit" class="btn btn-primary" type="submit" value="Submit" />
        </div>
        @include('partials.messages')
    </form>
@endsection

@section('additionalScripts')
    <script src="{{ asset('assets/js/form-validation.min.js') }}"></script>
    <script>
        const edit = true;
    </script>
    <script src="{{ asset('assets/js/admin/restaurants.min.js') }}"></script>
@endsection
