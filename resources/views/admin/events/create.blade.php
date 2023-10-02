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
        <h3>Event</h3>&nbsp;&nbsp;<span>Create Event</span>
        <a href="{{ url('../') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

    <!-- start dashboard content -->

    <div class="container">

        <h5 class="text-center text-success">Create New Event</h5>
        {!! Form::open(['method'=>'POST', 'action'=>'AdminEventsController@store', 'files'=>true]) !!}
        @csrf
        <div class="form-group">
            {!! Form::label('title','Event Title:') !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('desc','Event Description:') !!}
            {!! Form::textarea('desc', null, ['class'=>'form-control','id'=>'editor','rows'=>5]) !!}
        </div>
        <div class="form-group col-md-3">
            {!! Form::label('date','Event Date:') !!}
            {!! Form::datetimeLocal('date', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('time','Event Time:') !!}
            {!! Form::text('time', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create', ['class'=>'btn btn-success  float-right']) !!}
        </div>

        {!! Form::close() !!}

    </div>
    <!-- end dashboard content -->

</div>


@endsection
