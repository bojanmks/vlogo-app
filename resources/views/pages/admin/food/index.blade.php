@extends('layouts.admin')

@section('additionalCss')
    @include('partials.datatables-css')
@endsection

@section('contentHeader')
    <h1>Food</h1>
@endsection

@section('content')
    <a href="{{ route('admin.food.create') }}" class="btn btn-primary">Add new food</a>
    @include('partials.messages')
    <div class="table-responsive">
        <table id="foodTable" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Restaurant</th>
                <th>Category</th>
                <th>Price</th>
                <th class="large-column">Created At</th>
                <th class="large-column">Updated At</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($food as $key=>$f)
                <tr>
                    <td>{{ $f->id }}</td>
                    <td>{{ $f->name }}</td>
                    <td>
                        <div class="food-image">
                            <img class="img-fluid rounded-circle" src="{{ asset('assets/images/food/' . $f->image) }}" alt="{{ $f->name }}"/>
                        </div>
                    </td>
                    <td>{{ $f->restaurant_name }}</td>
                    <td>{{ $f->category_name }}</td>
                    <td>${{ $f->price }}</td>
                    <td>{{ $f->created_at }}</td>
                    <td>{{ $f->updated_at ? : 'N/A' }}</td>
                    <td><a href="{{ route('admin.food.edit', ['food' => $f->id]) }}"><i class="fas fa-edit"></i></a></td>
                    <td>
                        <form action="{{ route('admin.food.destroy', ['food' => $f->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-link"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('additionalScripts')
    <script>
        const table = "foodTable";
    </script>
    @include('partials.datatables-scripts')
@endsection
