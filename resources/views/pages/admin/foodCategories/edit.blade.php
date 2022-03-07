@extends('layouts.admin')

@section('contentHeader')
    <h1>Edit category</h1>
@endsection

@section('content')
    <form id="categoryForm" action="{{ route('admin.categories.update', ["category" => $category->id]) }}" method="POST" class="standard-form">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" id="name" placeholder="Name" value="{{ $category->name }}"/>
            <span class="error-message">Needs to start with a capital letter and each word has to be at least 3 characters long</span>
        </div>
        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" name="listed" id="listed" @if($category->listed) checked @endif/>
            <label class="form-check-label" for="listed">Listed</label>
        </div>
        <div class="text-center">
            <input id="btnSubmit" class="btn btn-primary" type="submit" value="Submit" />
        </div>
        @include('partials.messages')
    </form>
@endsection

@section('additionalScripts')
    <script src="{{ asset('assets/js/form-validation.min.js') }}"></script>
    <script src="{{ asset('assets/js/admin/categories.min.js') }}"></script>
@endsection
