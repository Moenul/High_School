<!doctype html>
	<html lang="en" style="scroll-behavior: smooth; overflow-y: scroll;"></html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    @yield('style')
	<link rel="stylesheet" href="{{asset('css/main.css')}}">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<title>Madrasah</title>
	<link rel="shortcut icon" type="image/png" href="images/Madrasah.png">
</head>
<body>


@yield('navigation')



@yield('header_content')



@yield('content')



@yield('footer')

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="{{asset('js/scripts.js')}}"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

@yield('script')

<!-- Setup and start animation! -->
<script>


</script>

</body>
</html>
