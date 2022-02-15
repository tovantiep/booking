<div class="header-section">
    <div class="bg-opacity"></div>
    <div class="top-header sticky-header">
        <div class="top-header-inner">
            <div class="container">
                <div class="mgea-full-width">
                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="logo mt-15">
                                <a href="index.html"><img src="/user/images/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-10 col-sm-10 hidden-xs">
                            <div class="header-top ptb-10">
                                <div class="adresses">
                                    <div class="phone">
                                        <p>call <span>:0833260400 </span></p>
                                    </div>
                                    <div class="email">
                                        <p>Email: <span>tovantiep2604@gmail.com</span></p>
                                    </div>
                                </div>
                                <div class="social-links">
                                @if (Auth::check())
                                <a title="Register or Login" href="">{{Auth::User()->name}}</a>
                                <a href="{{route('user.auth.logout')}}"><i class="mdi mdi-logout"></i>Logout</a>
                                @else
                                <a href="{{route('auth.login')}}"><i class="mdi mdi-login"></i>Login</a>
                                @endif
                                   
                                </div>
                            </div>
                            <div class="menu mt-25">
                                <div class="menu-list hidden-sm hidden-xs">
                                    <nav>
                                        <ul>
                                            <li><a href="{{route('user.home')}}">home</a></li>
                                            <li><a href="">About</a></li>
                                            <li><a href="">Gallery</a></li>
                                            <li><a href="#">pages<i class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown_menu">
                                                    <li><a href="">404</a></li>
                                                    <li><a href="">Booking Information</a></li>
                                                    <li><a href="">Personal Information</a></li>
                                                    <li><a href="">Parment Information</a></li>
                                                    <li><a href="">Booking Done</a></li>
                                                    <li><a href="">Room booking</a></li>
                                                    <li><a href="">News</a></li>
                                                    <li><a href="">Gallery</a></li>
                                                     <li><a href="">Staff</a></li>
                                                    <li><a href="">Room</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact-us.html">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="search-bar-icon">
                                   <a class="search-open" href="#"><i class="fa fa-search"></i></a>               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
         <!-- Mobile menu start -->
        <div class="mobile-menu-area hidden-lg hidden-md">
            <div class="container">
                <div class="col-md-12">
                    <nav id="dropdown">
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li><a href="about-us.html">About</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="#">pages</a>
                            <ul>
                                <li><a href="404.html">404</a></li>
                                <li><a href="booking-information.html">Booking Information</a></li>
                                <li><a href="personal-information.html">Personal Information</a></li>
                                <li><a href="payment-information.html">Parment Information</a></li>
                                <li><a href="booking-done.html">Booking Done</a></li>
                                <li><a href="room-booking.html">Room booking</a></li>
                                <li><a href="news.html">News</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="staff.html">Staff</a></li>
                                <li><a href="our-room.html">Room</a></li>
                            </ul>
                        </li>
                        <li><a href="contact-us.html">contact</a></li>
                    </ul>
                </nav>
                </div>
            </div>
        </div>
        <!-- Mobile menu end -->
    </div>
    <!--Welcome secton-->
    <div class="welcome-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-5">
                    <div class="booking-box">
                        <div class="booking-title">
                            <h3>Book A Room</h3>
                            <p>There are many vars of passageson't look even slightly believable.</p>
                        </div>
                        <div class="booking-form">
                            <form action="#">
                                <div class="b-date arrive mb-15">
                                    <input class="date-picker" type="text" placeholder="Arrive Date">
                                    <i class="mdi mdi-calendar-text"></i>
                                </div>
                                <div class="b-date departure mb-15">
                                    <input class="date-picker" type="text" placeholder="Departure Date">
                                    <i class="mdi mdi-calendar-text"></i>
                                </div>
                                <div class="select-book mb-15">
                                    <select name="book" class="select-booking">
                                        <option value="" selected>Adult</option>
                                        <option value="1">Teen</option>
                                        <option value="1">old</option>
                                    </select>
                                </div>
                                <div class="select-book  mb-30">
                                    <select name="book" class="select-booking">
                                        <option value="" selected>Room</option>
                                        <option value="1">Roome 101</option>
                                        <option value="1">Roome 102</option>
                                    </select>
                                </div>
                                <div class="submit-form">
                                    <button type="submit">Check Availability</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-7">
                    <div class="welcome-text">
                        <h2>
                        <span>WELCOME TO</span> <span class="coloring">Chondo Hotel</span>
                        </h2>
                        <h1 class="cd-headline clip">
                            <span>THE PERFECT</span>
                            <span class="cd-words-wrapper coloring">
                                <b class="is-visible"> LOCATION</b>
                                <b>Room</b>
                                <b>places</b>
                            </span>
                        </h1>
                        <p class="welcome-desc">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                        <div class="explore">
                            <a href="#">EXPLORE IT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- searchbar Start -->
<div class="search-bar animated slideOutUp">
    <div class="table">
        <div class="table-cell">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="search-form-wrap">
                            <button class="close-search"><i class="mdi mdi-close"></i></button>
                            <form action="#">
                                <input type="text" placeholder="Search here..." value=""/>
                                <button class="search-button" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- search bar End -->