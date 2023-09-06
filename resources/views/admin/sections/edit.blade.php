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
        <h3>Section</h3>&nbsp;&nbsp;<span>Edit Section</span>
        <a href="{{ url('../') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

    <!-- start dashboard content -->

    <div class="container">
        @if ($section)

        <div class="col-4 m-0">
            {!! Form::model($section, ['method'=>'PATCH', 'action'=> ['AdminSectionsController@update', $section->id], 'files'=>true]) !!}
            <div class="form-group">
                {!! Form::label('name','Section Name:') !!}
                {!! Form::text('name', $section->name, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                <a href="{{ url('admin/sections') }}" class="btn btn-warning">Cancel</a>
                {!! Form::submit('Update Section', ['class'=>'btn btn-primary float-right']) !!}
            </div>
            {!! Form::close() !!}
        </div>

        @endif

    </div>
    <!-- end dashboard content -->

</div>


@endsection
