<!DOCTYPE html>
<head>
    <title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Registration :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{asset('public/backend/css/bootstrap.min.css')}}" >
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{asset('public/backend/css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('public/backend/css/style-responsive.css')}}" rel="stylesheet"/>
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{asset('public/backend/css/font.css')}}" type="text/css"/>
    <link href="{{asset('public/backend/css/font-awesome.css')}}" rel="stylesheet">
    <!-- //font-awesome icons -->
    <script src="{{asset('public/backend/js/jquery2.0.3.min.js')}}"></script>
</head>
<body>
<div class="reg-w3">
    <div class="w3layouts-main">
        <h2>Đăng kí </h2>
        <form action="{{ route('admin.register') }}" method="post">
            @csrf
            <input type="text" class="ggg" name="name" placeholder="Nhập tên" value="{{ old('name') }}">
            @error('name')</form>
            <span style="color: red;">{{ $errors->first('name') }}</span>
            @enderror
            <input type="email" class="ggg" name="email" placeholder="Nhập email" value="{{ old('email') }}">
            @error('email')
            <span style="color: red;">{{ $errors->first('email') }}</span>
            @enderror
            <input type="password" class="ggg" name="password" placeholder="Nhập mật khẩu" value="{{ old('password') }}">
            @error('password')
            <span style="color: red;">{{ $errors->first('password') }}</span>
            @enderror
            <div class="clearfix"></div>
            <input type="submit" value="Đăng kí" name="register">
        </form>
        <p>OK<a href="{{ route('admin.login') }}">Đăng nhập</a></p>
    </div>
</div>
<script src="{{asset('public/backend/js/bootstrap.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('public/backend/js/scripts.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.nicescroll.js')}}"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="{{asset('public/backend/js/flot-chart/excanvas.min.js')}}"></script><![endif]-->
<script src="{{asset('public/backend/js/jquery.scrollTo.js')}}"></script>
</body>
</html>
