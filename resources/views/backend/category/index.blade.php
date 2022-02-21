@extends('backend.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
               <a href="/category/create" class="btn btn-primary">Add Category</a>
            </div>
            <div class="card-body">
                <table class="table" id="datatable">
                   <thead>
                    <tr>
                        <th>SN</th>
                        <th>Photo</th>
                        <th>Category</th>
                        <th>Actions</th>
                    </tr>
                   </thead>
                   
                  
                   <tbody>
                    @foreach ($categories as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td><img src="{{ asset($item->photo) }}" width="30" alt=""></td>
                        <td>{{ $item->name }}</td>
                        <td>
                            <a href="/category/{{ $item->id }}/edit" class="btn btn-info">Edit</a>
                            <a href="/category/{{ $item->id }}" class="btn btn-success">Show</a>
                        </td>
                    </tr>
                    @endforeach
                   </tbody>
                   
                </table>
                <a href="/category" class="btn btn-primary">Top</a>

            </div>
        </div>
    </div>
@endsection




