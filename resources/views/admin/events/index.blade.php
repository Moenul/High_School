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
        <h3>Event</h3>&nbsp;&nbsp;<span>Manage Events</span>
        <a href="{{ url('../') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

    <!-- start dashboard content -->
<div class="container">

    <div class="row">
    <div class="col-8">
        @if ($events->count())
        <table class="table table-dark table-hover mx-auto">
            <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Date</th>
                <th>Time</th>
                <th>Edit</th>
                <th style="width:80px; text-align:center;">Delete</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($events as $event)
                    @if (\Carbon\Carbon::parse($event->date)->format('d M Y') >= \Carbon\Carbon::today()->format('d M Y'))
                        <tr class="table-success text-dark">
                            <td>{{$event->id}}</td>
                            <td>{{$event->title}}</td>
                            <td>{{ \Carbon\Carbon::parse($event->date)->format('d M Y') }}</td>

                            <td>{{$event->time}}</td>
                            <td style="width:80px; text-align:center; font-size: 20px;"><a href="{{ Route('admin.events.edit', $event->id) }}"><i class="far fa-edit text-dark"></i></a></td>
                            <td>
                            {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminEventsController@destroy', $event->id]]) !!}
                                {{ Form::button('<i class="fas fa-trash-alt text-danger"></i>', ['type' => 'submit', 'class' => 'btn btn-lg'] )  }}
                            {!! Form::close() !!}
                            </td>
                        </tr>
                    @else
                        <tr class="table-warning text-dark">
                            <td>{{$event->id}}</td>
                            <td>{{$event->title}}</td>
                            <td>{{ \Carbon\Carbon::parse($event->date)->format('d M Y') }}</td>

                            <td>{{$event->time}}</td>
                            <td style="width:80px; text-align:center; font-size: 20px;"><a href="{{ Route('admin.events.edit', $event->id) }}"><i class="far fa-edit text-dark"></i></a></td>
                            <td>
                            {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminEventsController@destroy', $event->id]]) !!}
                                {{ Form::button('<i class="fas fa-trash-alt text-danger"></i>', ['type' => 'submit', 'class' => 'btn btn-lg'] )  }}
                            {!! Form::close() !!}
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
        {!! $events->links() !!}
        @endif

    </div>

    <div class="col-4">
        <a href="{{ Route('admin.events.create') }}" class="btn btn-success">Create New Event</a>
    </div>

    </div>


</div>

    <!-- start dashboard content -->

</div>


@endsection
