@extends('admin.master')
@section('title')
Room
@endsection
@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Room</h1>
            <br>
            <a href="#" class="btn btn-success btn-xs">Add New</a>
          <hr>
            <ol class="breadcrumb mb-4">
               @if(session('success'))
                   <div class="alert alert-success">
                        {{session('success')}}
                   </div>
               @endif
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Room table
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NumBer Room</th>
                                <th>Floor</th>
                                <th>Total</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->created_at}}</td>
                                <td >
                                    <a href="{{route('admin.category.delete', $category->id)}}" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i> Delete</a>
                                </td>
                                <td>
                                    <a href="{{route('admin.category.edit', $category->id)}}" class="btn btn-success btn-xs"><i class="fas fa-edit"></i>Edit</a>
                                </td>
                            </tr>
                            @endforeach --}}
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </main>
    @include('admin.layout.footer');
</div>
@endsection