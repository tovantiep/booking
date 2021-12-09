<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title')</title>
        @include('admin.layout.style')
    </head>
    <body class="sb-nav-fixed">
       @include('admin.layout.header')
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                @include('admin.layout.menu')
            </div>
           @yield('content')
        </div>
        @include('admin.layout.script')
    </body>
</html>
