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
            <a href="#" class="btn btn-success btn-xs">Thêm</a>
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
                    Category table
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Stt</th>
                                <th>Category</th>
                                <th>Branch</th>
                                <th>People</th>
                                <th>Floor</th>
                                <th>Room Number</th>
                                <th>Bookings</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Actual Total</th>
                                <th>Total Money</th>
                                <th>Payment Method</th>
                                <th>Rate</th>
                                <th>Status</th>
                                <th>Action</th>  
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </main>
    @include('admin.layout.footer');
</div>
@endsection