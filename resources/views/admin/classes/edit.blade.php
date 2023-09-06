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
        <h3>Class</h3>&nbsp;&nbsp;<span>Edit Class</span>
        <a href="{{ url('../') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

    <!-- start dashboard content -->

    <div class="container">
        @if ($class)

        <div class="col-4 m-0">
            {!! Form::model($class, ['method'=>'PATCH', 'action'=> ['AdminClassesController@update', $class->id], 'files'=>true]) !!}
            <div class="form-group">
                {!! Form::label('name','Class Name:') !!}
                {!! Form::text('name', $class->name, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                <a href="{{ url('admin/classes') }}" class="btn btn-warning">Cancel</a>
                {!! Form::submit('Update Class', ['class'=>'btn btn-primary float-right']) !!}
            </div>
            {!! Form::close() !!}
        </div>

        @endif

    </div>
    <!-- end dashboard content -->

</div>


@endsection
