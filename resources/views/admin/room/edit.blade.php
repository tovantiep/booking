@extends('admin.master')
@section('title')
Create Room
@endsection
@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Room</h1>
            <ol class="breadcrumb mb-4">
            </ol>
            <div class="card mb-4">
                <div class="col-lg-12">
                    <form action="{{route('admin.room.update', $room->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0"> 
                                    <select class="form-control" name="category_id">
                                        @foreach($categories as $category )
                                        <option value="{{$category->id}}" @if($room->category_id == $category->id) selected @endif>{{$category->name}}</option>
                                        @endforeach 
                                    </select>
                                    <label for="inputFirstName">Category Name</label>
                                </div>
                               
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <select class="form-control" @if($room->branch) selected @endif name="branch">
                                        <option value="HN">Ha Noi</option>
                                        <option value="SG">Sai Gon</option>
                                    </select>
                                    <label>Branch</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input type="number" value="{{$room->people}}" class="form-control" name="people" />
                                    <label>People</label>
                                </div>
                                @error('people')
                                <div style="color:red ">
                                   <i>{{$message}}</i> 
                                </div>
                            @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" value="{{$room->floor}}" name="floor" />
                                    <label>Floor</label>
                                </div>
                                @error('floor')
                                <div style="color:red ">
                                   <i>{{$message}}</i> 
                                </div>
                            @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" value="{{$room->number_room}}" name="number_room"/>
                                    <label >Number Room</label>
                                </div>
                                @error('number_room')
                                <div style="color:red ">
                                   <i>{{$message}}</i> 
                                </div>
                            @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" value="{{$room->total_money}}" name="total_money"/>
                                    <label >Price</label>
                                </div>
                                @error('total_money')
                                <div style="color:red ">
                                   <i>{{$message}}</i> 
                                </div>
                            @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" name="image" type="file"/>
                                    <label>Image</label>
                                </div>
                                @error('image')
                                <div style="color:red ">
                                   <i>{{$message}}</i> 
                                </div>
                            @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" value="{{$room->description}}" name="description"/>
                                    <label >Description</label>
                                </div>
                                @error('description')
                                <div style="color:red ">
                                   <i>{{$message}}</i> 
                                </div>
                            @enderror
                            </div>
                           
                        </div>
                        <div class="mt-4 mb-0">
                            <button class="btn btn-primary btn-block" type="submit">Update Room</button>
                            <a href="{{route('admin.room.index')}}" class="btn btn-secondary btn-xs">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    @include('admin.layout.footer');
</div>
@endsection