@extends('backend.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="/about" class="btn btn-primary">Back</a>
            </div>
            <div class="card-body">
                <form action="/about" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Title</label>
                    <input id="name" class="form-control" type="text" name="name">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" class="form-control" name="description" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection