@extends('layouts.admin')

@section('additionalCss')
    @include('partials.datatables-css')
@endsection

@section('contentHeader')
    <h1>Restaurants</h1>
@endsection

@section('content')
    <a href="{{ route('admin.restaurants.create') }}" class="btn btn-primary">Add new restaurant</a>
    @include('partials.messages')
    <div class="table-responsive">
        <table id="restaurantsTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Active</th>
                    <th class="large-column">Created At</th>
                    <th class="large-column">Updated At</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            @foreach($restaurants as $key=>$r)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $r->name }}</td>
                    <td>
                        <div class="restaurant-image">
                            <img class="img-fluid rounded" src="{{ asset('assets/images/restaurants/' . $r->image) }}" alt="{{ $r->name }}"/>
                        </div>
                    </td>
                    <td>{{ $r->active }}</td>
                    <td>{{ $r->created_at }}</td>
                    <td>{{ $r->updated_at ? : 'N/A' }}</td>
                    <td><a href="{{ route('admin.restaurants.edit', ["restaurant" => $r->id]) }}"><i class="fas fa-edit"></i></a></td>
                    <td>
                        <form action="{{ route('admin.restaurants.destroy', ["restaurant" => $r->id]) }}" method="POST">
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
        const table = "restaurantsTable";
    </script>
    @include('partials.datatables-scripts')
@endsection
