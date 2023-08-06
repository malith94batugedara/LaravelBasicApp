@extends('layouts.master')

@section('title','Admin Dashboard | Add Category')

@section('content')

<div class="container-fluid px-4">
  <div class="card mt-3">
        <div class="card-header">
             <h4>Add Category<a href="{{ route('admin.category') }}" class="btn btn-warning float-end">View Categories</a></h4>
        </div>
        <div class="card-body">
            @if($errors->any())
            <div class="alert alert-danger">
              @foreach ($errors->all() as $error )
                   <div>{{ $error }}</div>
              @endforeach
            </div>
            @endif
        <form action="{{ route('admin.add-category') }}" method="post" enctype="multipart/form-data">
            @csrf
           <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter Category Name"/>
           </div>
           <div class="mb-3">
            <label>Slug</label>
            <input type="text" name="slug" class="form-control" placeholder="Enter Category Slug"/>
           </div>
           <div class="mb-3">
            <label>Description</label>
            <textarea class="form-control" name="description" placeholder="Enter Description" rows="5"></textarea>
           </div>
           <div class="mb-3">
            <label>Image</label>
            <input type="file" name="image" class="form-control"/>
           </div>
           <h4>Meta Tags</h4><br/>
           <div class="mb-3">
            <label>Meta Title</label>
            <input type="text" name="meta_title" class="form-control" placeholder="Enter Meta Title"/>
           </div>
           <div class="mb-3">
            <label>Meta Description</label>
            <textarea class="form-control" name="meta_description" placeholder="Enter Meta Description" rows="5"></textarea>
           </div>
           <div class="mb-3">
            <label>Meta Keyword</label>
            <textarea class="form-control" name="meta_keyword" placeholder="Enter Meta Keyword" rows="5"></textarea>
           </div>
           <h4>Status</h4>
           <div class="row">
           <div class="col-md-3">
            <label>Navbar Status</label>
            <input type="checkbox" name="navbar_status"/>
           </div>
           <div class="col-md-3">
            <label>Status</label>
            <input type="checkbox" name="status"/>
           </div>
           <div class="col-md-6">
              <input type="submit" class="btn btn-primary" value="Save Category"/>
           </div>
           </div>
        </form>
        </div>
  </div>
</div>

@endsection