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
        <h3>Routine</h3>&nbsp;&nbsp;<span>Create Routine</span>
        <a href="{{ url('../') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

    <!-- start dashboard content -->

    <div class="container">

        <h5 class="text-center text-success">Create New Routine</h5>
        {!! Form::open(['method'=>'POST', 'action'=>'AdminRoutinesController@store', 'files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('class_id','Select Class:') !!}
            {!! Form::select('class_id', $classes, null, ['class' => 'form-control', 'required'=>'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('routine','Make Routine:') !!}
            {!! Form::textarea('routine', null, ['class'=>'form-control ckeditor','rows'=>5]) !!}
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
