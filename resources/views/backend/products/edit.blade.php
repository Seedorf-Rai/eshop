@extends('backend.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="/product" class="btn btn-info">Show List</a>
            </div>
            <div class="card-body">
                <form action="/product/{{ $products->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input id="name" class="form-control" type="text" name="name" value="{{ $products->name }}">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input id="price" class="form-control" type="text" name="price" value="{{ $products->price }}">
                </div>
                <div class="form-group">
                    <label for="discount">Discount(%)</label>
                    <input id="discount" class="form-control" type="text" name="discount_percent" value="{{ $products->discount_percent }}">
                </div>
                <div class="form-group">
                    <label for="photo">Add Image</label>
                    <input id="photo" class="form-control-file" type="file" name="image" accept="image/*">
                </div>
                <div>
                    <img src="{{ asset($products->photo) }}" width="120" alt="">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" class="form-control" name="description" rows="3">{{ $products->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select id="category_id" class="form-control" name="category_id">
                       @foreach ($categories as $item)
                           <option value="{{ $item->id }}" {{ $item->id == $products->category_id ? 'selected':' ' }}>{{ $item->name }}</option>
                       @endforeach
                    </select>
                </div>
                 <button type="submit" class="btn btn-success">Update Record</button>
                </form>
            </div>
        </div>
    </div>
@endsection