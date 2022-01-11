@extends('user.master')
@section('title')
List Room
@endsection
@section('content')
<div class="room-section text-center ptb-80 white_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title mb-75">
                    <h2>Our <span>room</span></h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered by injected humour.</p>
                </div>
            </div>
        </div>
        <div class="our-room-show">
            <div class="row">
                <div class="our-room-list owl-pagination">
                    <div class="single-room-sapce">
                        @foreach($rooms as $room)
                        <div class="col-md-4 col-sm-6 col-xs-12 col-sm-6 col-xs-12">
                            <div class="single-room mb-80">
                                <div class="room-img">
                                    <a href="#"><img src="{{asset('admin/upload/'.$room->image) }}" alt=""></a>
                                </div>
                                <div class="room-desc">
                                    <div class="room-name">
                                        <h3><a href="#">{{$room->number_room}}</a></h3>
                                    </div>
                                    <div class="room-rent">
                                        <h5>€ {{$room->total_money}} / <span>Night</span></h5>
                                    </div>
                                    <div class="room-book">
                                        <a href="#">Book now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--hotel team start-->
<div class="hotel-team white_bg">
    <div class="container">
       <div class="row">
            <div class="col-md-12">
                <div class="newsletter">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="newsletter-title">
                                <h2>SUBSCRIBE TO OUR NEWSLETTER</h2>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="newsletter-form">
                                <form id="mc-form" class="mc-form" >
                                    <input id="mc-email" type="email" autocomplete="off" placeholder="Enter Address..." />
                                    <button id="mc-submit" type="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!--hotel team end-->
@endsection