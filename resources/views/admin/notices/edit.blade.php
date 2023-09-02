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
        <h3>Notice</h3>&nbsp;&nbsp;<span>Edit Notice</span>
        <a href="{{ url('../') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

    <!-- start dashboard content -->

    <div class="container">
        @if ($notice)

        <div class="col-4 m-0">
            {!! Form::model($notice, ['method'=>'PATCH', 'action'=> ['AdminNoticesController@update', $notice->id], 'files'=>true]) !!}
            <div class="form-group">
                {!! Form::label('title','Notice Title:') !!}
                {!! Form::text('title', $notice->title, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('pdf_id', 'Notice PDF:') !!}
                {!! Form::file('pdf_id', null ) !!}
            </div>

            <div class="form-group">
                <a href="{{ url('admin/notices') }}" class="btn btn-warning">Cancel</a>
                {!! Form::submit('Update Notice', ['class'=>'btn btn-primary float-right']) !!}
            </div>
            {!! Form::close() !!}
        </div>

        @endif

    </div>
    <!-- end dashboard content -->

</div>


@endsection
