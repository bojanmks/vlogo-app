@extends('layouts.admin')

@section('additionalCss')
    @include('partials.datatables-css')
@endsection

@section('contentHeader')
    <h1>Food categories</h1>
@endsection

@section('content')
    <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">Add new category</a>
    @include('partials.messages')
    <div class="table-responsive">
        <table id="categoriesTable" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Listed</th>
                <th class="large-column">Created At</th>
                <th class="large-column">Updated At</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $key=>$c)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $c->name }}</td>
                    <td>{{ $c->listed }}</td>
                    <td>{{ $c->created_at }}</td>
                    <td>{{ $c->updated_at ? : 'N/A' }}</td>
                    <td><a href="{{ route('admin.categories.edit', ["category" => $c->id]) }}"><i class="fas fa-edit"></i></a></td>
                    <td>
                        <form action="{{ route('admin.categories.destroy', ["category" => $c->id]) }}" method="POST">
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
        const table = "categoriesTable";
    </script>
    @include('partials.datatables-scripts')
@endsection
