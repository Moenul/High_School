<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    @yield('style')
	<link rel="stylesheet" href="{{asset('css/admin.css')}}">
<title>Admin Pannel</title>
</head>
<body>


    @yield('navigation')




<div class="mainSection">


    @yield('side_nav')


    @yield('content')


</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('js/admin.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

@yield('script')

</body>
</html>
