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
        <h3>Policy</h3>&nbsp;&nbsp;<span>Create Policy</span>
        <a href="{{ url('../') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

    <!-- start dashboard content -->

    <div class="container">

        <h5 class="text-center text-success">Create New Policy</h5>
        {!! Form::open(['method'=>'POST', 'action'=>'AdminPolicysController@store', 'files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('name','Policy Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('title','Policy title:') !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('photo_id', 'Photo :') !!}
            {!! Form::file('photo_id', ['id' => 'imgInp'], null) !!}
        </div>
        <div class="form-group">
            {!! Form::label('desc','Write Policy:') !!}
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
