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
        <h3>Mails</h3>&nbsp;&nbsp;<span>Manage Mails</span>
        <a href="{{ url('../') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

    <!-- start dashboard content -->
<div class="container">

    <div class="row">
    <div class="col-12">
        @if ($mails)
        <table class="table table-dark">
            <thead>
            <tr>
                <th>ID</th>
                <th>Subject</th>
                <th>Email</th>
                <th>Time</th>
                <th>View</th>
                <th style="width:80px; text-align:center;">Delete</th>
            </tr>
            </thead>

            <tbody>
                @foreach ($mails as $mail)
                <tr>
                    <td>{{$mail->id}}</td>
                    <td>{{$mail->subject}}</td>
                    <td>{{$mail->email}}</td>
                    <td>{{$mail->created_at->diffForHumans()}}</td>

                    <td><a class="btn btn-primary" href="{{ Route('admin.mails.show', $mail->id) }}">View</a></td>
                    <td>
                    {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminMailsController@destroy', $mail->id]]) !!}
                        {{ Form::button('<i class="fas fa-trash-alt text-danger"></i>', ['type' => 'submit', 'class' => 'btn btn-lg'] )  }}
                    {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $mails->links() !!}
        @endif
    </div>

    </div>


</div>

    <!-- start dashboard content -->

</div>


@endsection
