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
        <h3>Instructor</h3>&nbsp;&nbsp;<span>Edit Instructor</span>
        <a href="{{ url('../') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

    <!-- start dashboard content -->

    <div class="container">
        @if ($instructor)

        <div class="col-6 m-0">
            {!! Form::model($instructor, ['method'=>'PATCH', 'action'=> ['AdminInstructorsController@update', $instructor->id], 'files'=>true]) !!}
            <div class="mb-2 d-flex justify-content-center">
                <img  class="action_field border border-secondary" id="preview_img"  width="120px" height="128px" src="{{ $instructor->photo ? $instructor->photo->file : '/images/DummyProfile.jpg' }}">
            </div>
            <div class="form-group">
                {!! Form::label('photo_id', 'Image:') !!}
                {!! Form::file('photo_id', ['id' => 'imgInp'], null) !!}
            </div>
            <div class="form-group">
                {!! Form::label('name','Name:') !!}
                {!! Form::text('name', $instructor->name, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('title','Title:') !!}
                {!! Form::text('title', $instructor->title, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('qualification','Qualification:') !!}
                {!! Form::text('qualification', $instructor->qualification, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('phone','Phone No.:') !!}
                {!! Form::text('phone', $instructor->phone, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Update Instructor', ['class'=>'btn btn-primary float-right']) !!}
            </div>
            {!! Form::close() !!}
        </div>

        @endif

    </div>
    <!-- end dashboard content -->

</div>


@endsection
