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
            <a href="{{route('admin.room.create')}}" class="btn btn-success btn-xs">Add New</a>
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
                                <th>Room Type</th>
                                <th>Views</th>
                                <th>Rating</th>
                                <th>Branch</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rooms as $room)
                            <tr>
                                <td>{{$room->id}}</td>
                                <td>{{$room->number_room}}</td>
                                <td>{{$room->floor}}</td>
                                <td>{{$room->category->name}}</td>
                                <td>{{$room->view_account}}</td>
                                <td>{{$room->rating}}</td>
                                <td>{{$room->branch}}</td>
                                <td><img src="{{asset('admin/upload/'.$room->image) }}" height="180" width="250" ></td>
                                <td>{{$room->total_money}}</td>
                                <td>{{$room->status == 0 ? "Còn trống" : "Đang cho thuê"}}</td>
                                <td >
                                    <a href="{{route('admin.room.delete', $room->id)}}" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i> Delete</a>
                                </td>
                                <td>
                                    <a href="{{route('admin.room.edit', $room->id)}}" class="btn btn-success btn-xs"><i class="fas fa-edit"></i>Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </main>
    @include('admin.layout.footer');
</div>
@endsection