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
        <h3>Gallery</h3>&nbsp;&nbsp;<span>Edit Gallery</span>
        <a href="{{ url('/') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

    <!-- start dashboard content -->



    <div class="row">
        @if ($gallery)

        <div class="col-2"></div>
        <div class="col-6">
            {!! Form::model($gallery, ['method'=>'PATCH', 'action'=> ['AdminGalleriesController@update', $gallery->id], 'files'=>true]) !!}

            <div style="width: 180px; height: 180px; overflow: hidden; margin:0 auto; position: relative; display: flex;" class="border border-secondary">
                <img class="action_field" width="auto" id="preview_img" src="{{ $gallery->photo ? $gallery->photo->file : '/images/Empty _Images.jpg' }}">
            </div>
            <div class="form-group">
                <small class="form-text text-muted">Image Aspect Ratio 1:1</small>
                {!! Form::label('photo_id', 'Image:') !!}
                {!! Form::file('photo_id', ['id' => 'imgInp'], null) !!}
            </div>
            <div class="form-group">
                {!! Form::label('desc','Gallery Description:') !!}
                {!! Form::text('desc', $gallery->desc, ['class'=>'form-control', 'placeholder'=>'Describe Image for SEO']) !!}
            </div>
            <div class="form-group">
                <a href="../" class="btn btn-warning">Cancel</a>
                {!! Form::submit('Update Gallery', ['class'=>'btn btn-primary float-right']) !!}
            </div>

            {!! Form::close() !!}
        </div>

        @endif
    </div>



    <!-- end dashboard content -->
</div>


@endsection
