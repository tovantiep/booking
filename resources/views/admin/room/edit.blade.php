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
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" name="image[]" type="file" multiple/>
                                    <label>Image</label>
                                </div>
                                @error('image')
                                <div style="color:red ">
                                   <i>{{$message}}</i> 
                                </div>
                            @enderror
                            </div>
                        @php
                            $name_image = explode('|', $room->image);
                        @endphp 
                    <div class="col-md-6">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="background: grey">
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            </ol>
                            <div class="carousel-inner" align="center">
                                @foreach($name_image as $key => $value)
                                <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                                    <img src="{{asset('admin/upload/'.$value)}}"  height="150px" width="200px">
                                </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev" style="color:black;">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only" style="color: black">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                        </div>
                        <div class="mt-4 mb-0">
                            <button class="btn btn-primary btn-xs" type="submit">Update Room</button>
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