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
        <h3>Policy</h3>&nbsp;&nbsp;<span>Manage Policy Info</span>
        <a href="{{ url('../') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

 <!-- start dashboard content -->

 <div class="row">
    @if ($policy)

    <div class="col-12">
        {!! Form::model($policy, ['method'=>'PATCH', 'action'=> ['AdminPolicysController@update', $policy->id], 'files'=>true]) !!}

        <div class="form-group">
            {!! Form::label('name','Policy Name:') !!}
            {!! Form::text('name', $policy->name, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('title','Policy title:') !!}
            {!! Form::text('title', $policy->title, ['class'=>'form-control']) !!}
        </div>

        <div class="mb-2 d-flex justify-content-center">
            <img class="action_field border border-secondary" id="preview_img" width="150px" height="150px" src="{{ $policy->photo ? $policy->photo->file : '/images/Empty_Images.jpg' }}">
        </div>
        <div class="form-group">
            {!! Form::label('photo_id', 'Image:') !!}
            {!! Form::file('photo_id', ['id' => 'imgInp'], null) !!}
        </div>

        <div class="form-group">
            {!! Form::label('desc','Policy Description:') !!}
            {!! Form::textarea('desc', $policy->desc, ['class'=>'form-control','id'=>'editor','rows'=>5]) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Update Policy', ['class'=>'btn btn-primary float-right']) !!}
        </div>

        {!! Form::close() !!}
    </div>

    @endif
</div>


<!-- end dashboard content -->


</div>


@endsection
