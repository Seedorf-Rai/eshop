@extends('backend.app')
@section('content')
    <div class="container">
        <div class="card">
           <div class="card-header">
            <a href="/category" class="btn btn-primary">Show List</a>
           </div>
           <div class="card-body">
               <form action="/category/{{ $category->id }}" method="post" enctype="multipart/form-data">
                 @csrf
                 @method('put')
                 <div class="form-group">
                     <label for="name">Category Name <span class=" text-danger">*</span> </label>
                     <input id="name" class="form-control" type="text" name="name" value="{{ $category->name }}">
                 </div>
                 <div class="form-group d-block">
                     <label for="photo"><button class="btn btn-info">Image</button></label>
                     <input id="photo" class="form-control-file" type="file" name="photo" accept="image/*">
                 </div>
                 <div>
                     <img src="{{ asset($category->photo) }}" width="120" alt="">
                 </div>
                 <button type="submit" class="btn btn-success">Update Category</button>
               </form>
           </div>
        </div>
        
    </div>
@endsection