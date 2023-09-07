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
        <h3>Routine</h3>&nbsp;&nbsp;<span>Edite Routine</span>
        <a href="{{ url('../') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

    <!-- start dashboard content -->

    <div class="container">

        <h5 class="text-center text-success">Edit Routine</h5>
        {!! Form::model($routine, ['method'=>'PATCH', 'action'=> ['AdminRoutinesController@update', $routine->id], 'files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('class_id','Select Class:') !!}
            {!! Form::select('class_id', $classes, $routine->class_id, ['class' => 'form-control', 'required'=>'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('routine','Make Routine:') !!}
            {!! Form::textarea('routine', $routine->routine, ['class'=>'form-control ckeditor','rows'=>5]) !!}
        </div>

        <div class="form-group">
            <a href="{{ url('admin/routines') }}" class="btn btn-warning">Cancel</a>
            {!! Form::submit('Update Routine', ['class'=>'btn btn-primary float-right']) !!}
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
