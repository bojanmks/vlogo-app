@extends('layouts.admin')

@section('additionalCss')
    @include('partials.datatables-css')
@endsection

@section('contentHeader')
    <h1>Order details</h1>
@endsection

@section('content')
    @include('partials.messages')
    <div class="table-responsive">
        <table id="detailsTable" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Food</th>
                <th>Image</th>
                <th class="large-column">Price at the time</th>
                <th>Amount</th>
                <th class="large-column">Created At</th>
            </tr>
            </thead>
            <tbody>
            @foreach($details as $key=>$d)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $d->name }}</td>
                    <td>
                        <div class="food-image">
                            <img class="img-fluid rounded-circle" src="{{ asset('assets/images/food/' . $d->image) }}" alt="{{ $d->name }}"/>
                        </div>
                    </td>
                    <td>${{ $d->price_at_the_time }}</td>
                    <td>x{{ $d->amount }}</td>
                    <td>{{ $d->created_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('additionalScripts')
    <script>
        const table = "detailsTable";
    </script>
    @include('partials.datatables-scripts')
@endsection
