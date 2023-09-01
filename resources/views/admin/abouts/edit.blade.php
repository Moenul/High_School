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
        <a href=""><i class="fas fa-home"></i>Home</a>
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
            {!! Form::file('photo_id', ['id' => 'imgInp'], null) !!}
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
            {!! Form::label('tagline','TagLine:') !!}
            {!! Form::text('tagline', $about->tagline, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('terms_condition','Terms Condition:') !!}
            {!! Form::textarea('terms_condition', $about->terms_condition, ['class'=>'form-control','rows'=>5]) !!}
        </div>
        <div class="form-group">
            {!! Form::label('privacy_policy','Privacy Policy:') !!}
            {!! Form::textarea('privacy_policy', $about->privacy_policy, ['class'=>'form-control','rows'=>5]) !!}
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
