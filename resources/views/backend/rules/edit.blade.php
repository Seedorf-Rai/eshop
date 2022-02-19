@extends('backend.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="/rules" class="btn btn-primary">Back</a>
            </div>
            <div class="card-body">
                <form action="/rules/{{ $rules->id }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="name">Title</label>
                    <input id="name" class="form-control" type="text" name="name" value="{{ $rules->name }}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" class="form-control" name="description" rows="3">{{ $rules->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection