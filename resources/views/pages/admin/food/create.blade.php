@extends('layouts.admin')

@section('contentHeader')
    <h1>Add new food</h1>
@endsection

@section('content')
    <form id="foodForm" action="{{ route('admin.food.store') }}" method="POST" class="standard-form" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" id="name" placeholder="Name"/>
            <span class="font-small error-message">This field is required</span>
        </div>
        <div class="mb-3">
            <label for="image">Image (1:1 for best results)</label>
            <input class="form-control-file" type="file" name="image" id="image"/>
            <span class="font-small error-message">Image is required</span>
        </div>
        <div class="mb-3">
            <label for="restaurant">Restaurant</label>
            <select class="form-control" name="restaurant" id="restaurant">
                @foreach($restaurants as $r)
                    <option value="{{ $r->id }}">{{ $r->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="category">Category</label>
            <select class="form-control" name="category" id="category">
                @foreach($categories as $c)
                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="price">Price ($)</label>
            <input class="form-control" type="number" name="price" id="price" placeholder="Price"/>
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
        const edit = false;
    </script>
    <script src="{{ asset('assets/js/admin/food.min.js') }}"></script>
@endsection
