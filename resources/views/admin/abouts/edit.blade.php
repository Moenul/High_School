@extends('layouts.admin')

@section('navigation')
    @include('includes.admin_navigation')
@endsection


@section('side_nav')
    @include('includes.admin_sidenav')
@endsection




@section('content')



<div class="content_section">
    <!-- start header -->
    <div class="header">
        <h3>Contact</h3>&nbsp;&nbsp;<span>Manage Contact Info</span>
        <a href="{{ url('../') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

 <!-- start dashboard content -->

 <div class="row">
    @if ($about)

    <div class="col-2"></div>
    <div class="col-6">
        <label for="">Logo:</label>
        {!! Form::model($about, ['method'=>'PATCH', 'action'=> ['AdminAboutsController@update', $about->id], 'files'=>true]) !!}

        <div class="mb-2 d-flex justify-content-center">
            <img class="action_field border border-secondary" id="preview_img" width="150px" height="150px" src="{{ $about->photo ? $about->photo->file : '/images/Empty_Images.jpg' }}">
        </div>
        <div class="form-group">
            {!! Form::label('photo_id', 'Image:') !!}
            {!! Form::file('photo_id', ['class'=>'form-file-control  border', 'id' => 'imgInp'], null) !!}
        </div>
        <div class="form-group">
            {!! Form::label('institute_name','Institute Name:') !!}
            {!! Form::text('institute_name', $about->institute_name, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('institute_desc','Institute Description:') !!}
            {!! Form::textarea('institute_desc', $about->institute_desc, ['class'=>'form-control','rows'=>5]) !!}
        </div>
        <div class="form-group">
            {!! Form::label('cover_id', 'Cover:') !!}
            {!! Form::file('cover_id', ['class'=>'form-file-control  border'], null) !!}
        </div>

        <div class="mb-2 d-flex justify-content-center">
            <img class="second_action_field border border-secondary img-fluid" id="second_preview_img" width="1110px" height="60px" src="{{ $about->nav ? $about->nav->file : '/images/Empty_Images_Landscape.jpg' }}">
        </div>
        <div class="form-group">
            {!! Form::label('nav_id', 'Top Nav Image:') !!}
            {!! Form::file('nav_id', ['class'=>'form-file-control  border', 'id' => 'second_imgInp'], null) !!}
            <span class="d-block text-danger">Image size must be 1110px * 60px for Better Results </span>
        </div>

        <div class="form-group">
            {!! Form::label('tagline','TagLine:') !!}
            {!! Form::text('tagline', $about->tagline, ['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::submit('Update Abouts', ['class'=>'btn btn-primary float-right']) !!}
        </div>

        {!! Form::close() !!}
    </div>

    @endif
</div>


<!-- end dashboard content -->


</div>


@endsection


@section('script')

<script>


// Before Upload Preview Image

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#second_preview_img').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]); // convert to base64 string
        $('.second_action_field').show();
    }
}

$("#second_imgInp").change(function() {
    readURL(this);
});

// --------




</script>

@endsection
