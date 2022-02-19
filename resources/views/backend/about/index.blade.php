@extends('backend.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="/about/create" class="btn btn-success">Add About_us</a>
            </div>
            <div class="card-body">
                <table class="table">
                  <tr>
                    <th>SN</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Actions</th>
                  </tr>
                  @foreach ($abouts as $item)
                      <tr>
                          <td>{{ $item->id }}</td>
                          <td>{{ $item->name }}</td>
                          <td>{!! $item->description !!}</td>
                          <td>
                              <a href="/about/{{ $item->id }}/edit" class="btn btn-info">Edit</a>
                          </td>
                      </tr>
                  @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection