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
        <h3>Sections</h3>&nbsp;&nbsp;<span>Manage Sections</span>
        <a href="{{ url('../') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

    <!-- start dashboard content -->
<div class="container">

    <div class="row">
    <div class="col-6">
        <table class="table table-dark">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Edit</th>
                <th style="width:80px; text-align:center;">Delete</th>
            </tr>
            </thead>

            <tbody>
                @foreach ($sections as $section)
                <tr>
                    <td>{{$section->id}}</td>
                    <td>{{$section->name}}</td>

                    <td style="width:80px; text-align:center; font-size: 20px;"><a href="{{ Route('admin.sections.edit', $section->id) }}"><i class="far fa-edit text-warning"></i></a></td>
                    <td>
                    {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminSectionsController@destroy', $section->id]]) !!}
                        {{ Form::button('<i class="fas fa-trash-alt text-danger"></i>', ['type' => 'submit', 'class' => 'btn btn-lg'] )  }}
                    {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>
    <div class="col-2"></div>

    <div class="col-4">
        <h5 class="text-center text-success">Create New Section</h5>
        {!! Form::open(['method'=>'POST', 'action'=>'AdminSectionsController@store', 'files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('name','Section Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
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
