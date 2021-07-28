<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}} | Demo</title>
    @include('base.shared.common_css')
</head>

<body>
    <div id="preloader">


    </div>
    <div id="body-wrapper">
        @include('base.shared.header')
        @yield('content')
        @include('base.shared.footer')
    </div>
    @include('base.shared.common_js')
</body>

</html>
