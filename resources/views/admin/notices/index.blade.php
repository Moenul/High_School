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
        <h3>Notice</h3>&nbsp;&nbsp;<span>Manage Notices</span>
        <a href="{{ url('../') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

    <!-- start dashboard content -->
<div class="container">

    <div class="row">
    <div class="col-8">
        @if ($notices->count())
        <table class="table table-dark table-hover mx-auto">
            <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Date</th>
                <th>PDF</th>
                <th>Edit</th>
                <th style="width:80px; text-align:center;">Delete</th>
            </tr>
            </thead>

            <tbody>
                @foreach ($notices as $notice)
                <tr class="table-success text-dark">
                    <td>{{$notice->id}}</td>
                    <td>{{$notice->title}}</td>
                    <td>{{ \Carbon\Carbon::parse($notice->created_at)->format('d M Y') }}</td>

                    <td><a href="{{ $notice->pdf->file }}">View PDF</a></td>

                    <td style="width:80px; text-align:center; font-size: 20px;"><a href="{{ Route('admin.notices.edit', $notice->id) }}"><i class="far fa-edit text-dark"></i></a></td>
                    <td>
                    {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminNoticesController@destroy', $notice->id]]) !!}
                        {{ Form::button('<i class="fas fa-trash-alt text-danger"></i>', ['type' => 'submit', 'class' => 'btn btn-lg'] )  }}
                    {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $notices->links() !!}
        @endif


    </div>

    <div class="col-4">
        <h5 class="text-center text-success">Create New Notice</h5>
        {!! Form::open(['method'=>'POST', 'action'=>'AdminNoticesController@store', 'files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('title','Notice Title:') !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('pdf_id', 'Notice PDF:') !!}
            {!! Form::file('pdf_id', null) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Submit', ['class'=>'btn btn-success  float-right']) !!}
        </div>

        {!! Form::close() !!}
    </div>

    </div>


</div>

    <!-- start dashboard content -->

</div>


@endsection
