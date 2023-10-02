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
    <div class="col-8">
        {!! Form::model($about, ['method'=>'PATCH', 'action'=> ['AdminAboutsController@update', $about->id], 'files'=>true]) !!}

        <div class="form-group">
            {!! Form::label('institute_name','Institute Name:') !!}
            {!! Form::text('institute_name', $about->institute_name, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('tagline','TagLine:') !!}
            {!! Form::text('tagline', $about->tagline, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('institute_desc','Institute Description:') !!}
            {!! Form::textarea('institute_desc', $about->institute_desc, ['class'=>'form-control','rows'=>5]) !!}
        </div>

        <div class="row">
            <div class="col-6">
                <label for="">Logo:</label><br>
                <div class="mb-2 d-flex justify-content-center" style="height: 200px;">
                    <img class="action_field border border-secondary" id="preview_img" width="150px" height="150px" src="{{ $about->photo ? $about->photo->file : '/images/Empty_Images.jpg' }}">
                </div>
                <div class="form-group">
                    {!! Form::file('photo_id', ['class'=>'form-file-control  border', 'id' => 'imgInp'], null) !!}
                </div>
            </div>
            <div class="col-6">
                <label for="">Cover:</label><br>
                <div class="border border-secondary mb-2" style="width: 200px; height: 200px; overflow: hidden;">
                    <img class="second_action_field img-fluid" id="second_preview_img" width="100%" height="max-content" src="{{ $about->cover ? $about->cover->file : '/images/Empty_Images.jpg' }}">
                </div>
                <div class="form-group">
                    {!! Form::file('cover_id', ['class'=>'form-file-control border', 'id' => 'second_imgInp'], null) !!}
                </div>
            </div>
        </div>


        <div class="form-group">
            <a href="../" class="btn btn-warning">Cancel</a>
            {!! Form::submit('Update About Informations', ['class'=>'btn btn-primary float-right']) !!}
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
