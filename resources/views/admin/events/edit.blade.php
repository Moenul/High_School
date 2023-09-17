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
        <h3>Event</h3>&nbsp;&nbsp;<span>Edit Event</span>
        <a href="{{ url('../') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

    <!-- start dashboard content -->

    <div class="container">
        @if ($event)

        <div class="col-12">
            {!! Form::model($event, ['method'=>'PATCH', 'action'=> ['AdminEventsController@update', $event->id], 'files'=>true]) !!}
            <div class="form-group">
                {!! Form::label('title','Event Title:') !!}
                {!! Form::text('title', $event->title, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('desc','Event Description:') !!}
                {!! Form::textarea('desc', $event->desc, ['class'=>'form-control','id'=>'editor','rows'=>5]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('date','Event Date:') !!}
                {!! Form::date('date', $event->date, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('time','Event Time:') !!}
                {!! Form::text('time', $event->time, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                <a href="{{ url('admin/events') }}" class="btn btn-warning">Cancel</a>
                {!! Form::submit('Update Event', ['class'=>'btn btn-primary float-right']) !!}
            </div>
            {!! Form::close() !!}
        </div>

        @endif

    </div>
    <!-- end dashboard content -->

</div>


@endsection
