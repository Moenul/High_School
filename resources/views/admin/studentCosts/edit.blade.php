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
        <h3>Student Cost</h3>&nbsp;&nbsp;<span>Edit Student Cost</span>
        <a href="{{ url('../') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

    <!-- start dashboard content -->

    <div class="container">
        @if ($studentCost)

        <div class="col-6">
            <h5 class="text-center text-success">Edit Cost</h5>
            {!! Form::model($studentCost, ['method'=>'PATCH', 'action'=> ['AdminStudentCostsController@update', $studentCost->id], 'files'=>true]) !!}
            <div class="form-group">
                {!! Form::label('class_id','Select Class:') !!}
                {!! Form::select('class_id', $classes, $studentCost->class_id, ['class' => 'form-control', 'required'=>'required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('session_fee','Session Fee:') !!}
                {!! Form::text('session_fee', $studentCost->session_fee, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('tuition_fee','Tuition Fee:') !!}
                {!! Form::text('tuition_fee', $studentCost->tuition_fee, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                <a href="{{ url('admin/studentCosts') }}" class="btn btn-warning">Cancel</a>
                {!! Form::submit('Update StudentCost', ['class'=>'btn btn-primary float-right']) !!}
            </div>

            {!! Form::close() !!}
        </div>

        @endif

    </div>
    <!-- end dashboard content -->

</div>


@endsection
