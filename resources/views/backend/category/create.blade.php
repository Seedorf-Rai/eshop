@extends('backend.app')
@section('content')
    <div class="container">
        <div class="card">
           <div class="card-header">
            <a href="/category" class="btn btn-primary">Show List</a>
           </div>
           <div class="card-body">
               <form action="/category" method="post" enctype="multipart/form-data">
                 @csrf
                 <div class="form-group">
                     <label for="name">Category Name <span class=" text-danger">*</span> </label>
                     <input id="name" class="form-control" type="text" name="name">
                 </div>
                 <div class="form-group d-block">
                     <label for="photo"><button class="btn btn-info">Image</button></label>
                     <input id="photo" class="form-control-file" type="file" name="photo" accept="image/*">
                 </div>
                 <button type="submit" class="btn btn-success">Save Category</button>
               </form>
           </div>
        </div>
        
    </div>
@endsection