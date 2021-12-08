<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   @include('user.layout.style')
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  
    
    <!-- Pre Loader
	============================================ -->
	{{-- <div class="preloader">
		<div class="loading-center">
			<div class="loading-center-absolute">
				<div class="object object_one"></div>
				<div class="object object_two"></div>
				<div class="object object_three"></div>
			</div>
		</div>
	</div> --}}

    <div class="wrapper">
        <!--Header section start-->
        @include('user.layout.header')
        <!-- Header section end -->
        
       @yield('content')
        <!--hotel team end-->
        <!--Footer start -->
        @include('user.layout.footer')
        <!-- Footer end -->
    </div>
    @include('user.layout.script')
</body>

</html>