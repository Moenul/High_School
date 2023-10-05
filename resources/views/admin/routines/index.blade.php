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
        <h3>Routine</h3>&nbsp;&nbsp;<span>Manage Routines</span>
        <a href="{{ url('../') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

    <!-- start dashboard content -->
<div class="container">

    <div class="row">
    <div class="col-8">

        <table class="table table-dark">
            <thead>
            <tr>
                <th>Class</th>
                <th>Desc</th>
                <th>Edit</th>
                <th style="width:80px; text-align:center;">Delete</th>
            </tr>
            </thead>
            <tbody>
                @if ($routines->count())
                    @foreach ($routines as $routine)
                        <tr>
                            <td>{{$routine->class->name}}</td>
                            <td>
                                {!! Str::limit(strip_tags($routine->routine), 30, ' ...') !!}
                            </td>
                            <td style="width:80px; text-align:center; font-size: 20px;"><a href="{{ Route('admin.routines.edit', $routine->id) }}"><i class="far fa-edit text-warning"></i></a></td>
                            <td>
                            {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminRoutinesController@destroy', $routine->id]]) !!}
                                {{ Form::button('<i class="fas fa-trash-alt text-danger"></i>', ['type' => 'submit', 'class' => 'btn btn-lg'] )  }}
                            {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>


    </div>

    <div class="col-4">
        <a href="{{ Route('admin.routines.create') }}" class="btn btn-success">Create New Routine</a>
    </div>

    </div>



</div>

    <!-- start dashboard content -->

</div>


@endsection
