<!doctype html>
	<html lang="en" style="scroll-behavior: smooth; overflow-y: scroll;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Author: Sarail Sadar High School (SSHS), Service: Higher Secondary Educational Institutions, Degree: SSC, Address: 34C6+C2C, Haluyapara, Sarail Thana Rd, Sarail, Brahmanbaria, Bangladesh, Institute EIIN Code: 103497, Established: 1993">
    <meta name="keywords" content="Sarail Sadar High School, High School, EIIN Code: 103497, Institute, Gov High School, SSHS">
    <meta name="author" content="Sarail Sadar High School (SSHS)">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/main.css')}}">
    @yield('style')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    @yield('title')
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
</head>
<body>


@yield('navigation')

@yield('flash-message')

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
<script type="text/javascript">


</script>

</body>
</html>
