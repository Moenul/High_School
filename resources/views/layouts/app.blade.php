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




<div class="scroll_to_top" onclick="topFunction()" id="myBtn">
	<iconify-icon icon="icon-park-outline:to-top"></iconify-icon>
</div>
<div class="footer">
	<div class="container">
		<div class="row footer_condition">
			<div class="col-md-6"><a href=""> <i class="fas fa-bullhorn"></i> Terms & Conditions</a></div>
			<div class="col-md-6"><a href=""> <i class="fas fa-user-secret"></i> Privacy Policy</a></div>
			<div class="col-md-12 copyright">&copy; All Rights Reserved</div>
			<div class="col-md-12 credit">Design and Develoed credit gose to <a href="http://" target="_blank">MOENUL ISLAM</a></div>
		</div>
	</div>
</div>
<!-- end footer -->

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
