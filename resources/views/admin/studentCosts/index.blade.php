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
        <h3>Student Cost</h3>&nbsp;&nbsp;<span>Manage Student Cost</span>
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
                <th>Class</th>
                <th>Sessoin Fee</th>
                <th>Tuition Fee</th>
                <th>Edit</th>
                <th style="width:80px; text-align:center;">Delete</th>
            </tr>
            </thead>

            <tbody>
                @foreach ($studentCosts as $studentCost)
                <tr>
                    <td>{{$studentCost->class->name}}</td>
                    <td>{{$studentCost->session_fee}}</td>
                    <td>{{$studentCost->tuition_fee}}</td>

                    <td style="width:80px; text-align:center; font-size: 20px;"><a href="{{ Route('admin.studentCosts.edit', $studentCost->id) }}"><i class="far fa-edit text-warning"></i></a></td>
                    <td>
                    {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminStudentCostsController@destroy', $studentCost->id]]) !!}
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
        <h5 class="text-center text-success">Create New Cost</h5>
        {!! Form::open(['method'=>'POST', 'action'=>'AdminStudentCostsController@store', 'files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('class_id','Select Class:') !!}
            {!! Form::select('class_id', $classes, null, ['class' => 'form-control', 'required'=>'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('session_fee','Session Fee:') !!}
            {!! Form::text('session_fee', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('tuition_fee','Tuition Fee:') !!}
            {!! Form::text('tuition_fee', null, ['class'=>'form-control']) !!}
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
