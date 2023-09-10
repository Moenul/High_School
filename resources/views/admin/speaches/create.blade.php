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
        <h3>Speach</h3>&nbsp;&nbsp;<span>Create Speach</span>
        <a href="{{ url('../') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

    <!-- start dashboard content -->

    <div class="container">

        <h5 class="text-center text-success">Create New Speach</h5>
        {!! Form::open(['method'=>'POST', 'action'=>'AdminSpeachsController@store', 'files'=>true]) !!}
        <div class="form-group">
            <label for="person_type">Person Type :</label>
            {!! Form::select('person_type', ['Institute Head' => 'Institute Head', 'President' => 'President'], null, ['class' => 'form-control', 'required'=>'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('name','Person Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('title','Person title:') !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}
        </div>
        <div class="mb-2 justify-content-center">
            <img class="action_field border border-secondary" id="preview_img" width="200px" height="210px"  src="{{ '/images/DummyProfile.jpg' }}">
            <div class="form-group">
                {!! Form::label('photo_id', 'Image:') !!}
                {!! Form::file('photo_id', ['id' => 'imgInp'], null) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('desc','Write Speach:') !!}
            {!! Form::textarea('desc', null, ['class'=>'form-control ckeditor','rows'=>5]) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create', ['class'=>'btn btn-success  float-right']) !!}
        </div>

        {!! Form::close() !!}

    </div>
    <!-- end dashboard content -->

</div>


@endsection


@section('script')

<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>


@endsection
