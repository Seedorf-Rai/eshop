@extends('backend.app')
@section('content')
    <div class="contaiiner">
        <div class="card">
            <div class="card-header">
                <a href="/product/create" class="btn btn-primary">Add Products</a>
            </div>
            <div class="card-body">
                <table class="table" id="datatable">
                   <tr>
                       <th>SN</th>
                       <th>Image</th>
                       <th>Products Name</th>
                       <th>Price</th>
                       <th>Discount(%)</th>
                       <th>Selling Price</th>
                       <th>Action</th>
                   </tr>
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
                </table>
            </div>
        </div>
    </div>
@endsection