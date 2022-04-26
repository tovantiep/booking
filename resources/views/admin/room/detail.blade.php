@extends('admin.master')
@section('title')
Detail room
@endsection
@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container">
            <div class="container-fluid px-4">
                <h1 class="mt-4">Detail Room</h1>
                <ol class="breadcrumb mb-4">
                </ol>
                    @foreach($categories as $category) 
                            @if($room->category_id == $category->id)
                            <h5>Loại phòng: {{$category->name}}</h5>
                            @endif
                    @endforeach
                        <i>Số người: {{$room->people}}</i> <br>
                        <i>Tầng: {{$room->floor}}</i><br>
                        <i>Số phòng: {{$room->number_room}}</i><br>
                        <i>Lượt thuê: {{$room->view_account}}</i><br>
                        <i>Mô tả: {{$room->description}}</i> <br>
                        <i>Giá tiền: ${{$room->total_money}}</i><br>
                        <i>Đánh giá: {{$room->rating}} sao</i><br>
                        @if($room->status == 0)
                        <i>Trạng thái: Có sẵn</i>
                    @else
                        <i>Trạng thái: Đang cho thuê</i>
                    @endif
                    <hr>
                    @php
                        $name_image = explode('|', $room->image);
                    @endphp         
                    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="background: grey">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        </ol>
                        <div class="carousel-inner" align="center">
                            @foreach($name_image as $key => $value)
                            <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                                <img src="{{asset('admin/upload/'.$value)}}"  height="400px" width="600px">
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
            <br>
            <a href="{{route('admin.room.index')}}" class="btn btn-secondary btn-xs">Back</a>
        </div>  
    </main>
    @include('admin.layout.footer');
</div>
@endsection