@extends('layouts.admin')

@section('contentHeader')
    <h1>Edit food</h1>
@endsection

@section('content')
    <form id="foodForm" action="{{ route('admin.food.update', ['food' => $food->id]) }}" method="POST" class="standard-form" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" id="name" placeholder="Name" value="{{ $food->name }}"/>
            <span class="font-small error-message">This field is required</span>
        </div>
        <div class="mb-3">
            <label for="image">Image (1:1 for best results, Leave empty if unchanged)</label>
            <input class="form-control-file" type="file" name="image" id="image"/>
            <span class="font-small error-message">Image is required</span>
        </div>
        <div class="mb-3">
            <label for="restaurant">Restaurant</label>
            <select class="form-control" name="restaurant" id="restaurant">
                @foreach($restaurants as $r)
                    <option @if($r->id == $food->restaurant_id) selected @endif value="{{ $r->id }}">{{ $r->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="category">Category</label>
            <select class="form-control" name="category" id="category">
                @foreach($categories as $c)
                    <option @if($c->id == $food->category_id) selected @endif value="{{ $c->id }}">{{ $c->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="price">Price ($)</label>
            <input class="form-control" type="number" name="price" id="price" placeholder="Price" step=".01" value="{{ $food->price }}"/>
            <span class="font-small error-message">This field is required</span>
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
    <script src="{{ asset('assets/js/admin/food.min.js') }}"></script>
@endsection
