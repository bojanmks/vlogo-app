@extends('layouts.admin')

@section('additionalCss')
    @include('partials.datatables-css')
@endsection

@section('contentHeader')
    <h1>Orders</h1>
@endsection

@section('content')
    @include('partials.messages')
    <div class="table-responsive">
        <table id="ordersTable" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Restaurant</th>
                <th>Address</th>
                <th>Total Price</th>
                <th class="large-column">Created At</th>
                <th>Details</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $key=>$o)
                <tr>
                    <td>{{ $o->id }}</td>
                    <td>{{ $o->username }}</td>
                    <td>{{ $o->restaurant_name }}</td>
                    <td>{{ $o->address }}</td>
                    <td>${{ $o->total_price }}</td>
                    <td>{{ $o->created_at }}</td>
                    <td>
                        <a href="{{ route('admin.orders.details', ['id' => $o->id]) }}">
                            <i class="fas fa-receipt"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('additionalScripts')
    <script>
        const table = "ordersTable";
    </script>
    @include('partials.datatables-scripts')
@endsection
