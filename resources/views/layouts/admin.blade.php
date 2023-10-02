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


    @include('includes.flash-message')


<div class="mainSection">


    @yield('side_nav')


    @yield('content')


</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('js/admin.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@ckeditor/ckeditor5-alignment@39.0.2/src/index.min.js"></script>
<script>

	ClassicEditor
		.create( document.querySelector( '#editor' ) ,{
            ckfinder: {
                uploadUrl: "{{route('ckeditor.upload').'?_token='.csrf_token()}}",
            }
        }).catch( error => {
			console.error( error );
		} );
</script>

@yield('script')

</body>
</html>
