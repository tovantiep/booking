@extends('admin.master')
@section('title')
Create Category
@endsection
@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Category</h1>
            <ol class="breadcrumb mb-4">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </ol>
            <div class="card mb-4">
                <div class="col-lg-12">
                    <form action="{{route('admin.category.update', $category->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <h6 for="">Category Name</h6>     
                        </div>
                        <br>
                        <div class="form-group">   
                            <input class="form-control" value="{{$category->name}}" name="name" type="text">
                        </div>
                        <br>
                        <div class="form-group">
                            <h6 for="">Category Image</h6>     
                        </div>
                        <div class="form-group">   
                            <input class="" name="image" type="file">
                        </div>
                        <br>
                        <button class="btn btn-success" type="submit">Update</button>
                        <a href="{{route('admin.category.index')}}" class="btn btn-secondary btn-xs">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </main>
    @include('admin.layout.footer');
</div>
@endsection