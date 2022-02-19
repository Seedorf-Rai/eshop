@extends('backend.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="/category" class="btn btn-primary">Show List</a>
            </div>
            <div class="card-body">
                <table class="table" id="datatable">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Image</th>
                            <th>Products Name</th>
                            <th>Price</th>
                            <th>Discount(%)</th>
                            <th>Selling Price</th>
                            <th>Action</th>
                        </tr>
                       
                    </thead>
                   <tbody>
                    @foreach ($products as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td><img src="{{ asset($item->photo) }}" width="80" alt=""></td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->discount_percent }}</td>
                        <td>{{ $item->selling_price }}</td>
                        <td>
                            <a href="/product/{{ $item->id }}/edit" class="btn btn-info">Edit</a>
                        </td>
                    </tr>
                @endforeach
                   </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection