@extends('layouts.master')

@section('title','Admin Dashboard | View Categories')

@section('content')

<div class="container-fluid px-4">
  <div class="card mt-3">
        <div class="card-header">
             <h4>View Categories<a href="{{ route('admin.add-category') }}" class="btn btn-primary float-end">Add Category</a></h4>
        </div>
        <div class="card-body">
            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
            @endif
             <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                           <td>{{$category->id}}</td>
                           <td>{{$category->name}}</td>
                           <td><img src="{{ asset('uploads/category/'.$category->image) }}" height="50px" width="50px" alt="Category Image"/></td>
                           <td>{{ $category->status == 1 ? 'Hidden' : 'Shown'; }}</td>
                           <td>
                              <a href="" class="btn btn-success">Edit</a>
                              <a href="" class="btn btn-danger">Delete</a>
                           </td>
                        </tr>
                    @endforeach
                    </tbody>
             </table>
        </div>
  </div>
</div>

@endsection