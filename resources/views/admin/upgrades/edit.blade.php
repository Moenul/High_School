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
        <h3>Upgrade Student</h3>&nbsp;&nbsp;<span>Manage Upgrade</span>
        <a href="{{ url('../') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

    <!-- start dashboard content -->
<div class="container">


    @if ($student)

    <div class="form_section">
        {!! Form::model($student, ['method'=>'PATCH', 'action'=> ['AdminStudentsController@update', $student->id], 'files'=>true]) !!}
        <div class="personal_info info_bar">
            <div class="row">
                <div class="col-8">
                    <div class="row">
                        <div class="form-group col-md-6">
                            {!! Form::label('student_name','শিক্ষার্থীর নাম :') !!}
                            <span class="d-block">{{$student->student_name}}</span>
                        </div>
                        <div class="form-group col-md-6">
                            {!! Form::label('student_name_en','শিক্ষার্থীর নাম ইংরেজি :') !!}
                            <span class="d-block">{{$student->student_name_en}}</span>
                        </div>
                        <div class="form-group col-md-6">
                            {!! Form::label('student_DOB','জন্ম তারিখ :') !!}
                            <span class="d-block">{{$student->student_DOB}}</span>
                        </div>
                        <div class="form-group col-md-6">
                            {!! Form::label('student_birth_reg','জন্ম নিবন্ধন নম্বর :') !!}
                            <span class="d-block">{{$student->student_birth_reg}}</span>
                        </div>
                        <div class="form-group col-md-6">
                            {!! Form::label('student_birth_reg','লিঙ্গ :') !!}
                            <span class="d-block">{{$student->student_gender}}</span>
                        </div>
                        <div class="form-group col-md-6">
                            {!! Form::label('student_birth_reg','পিতার নাম :') !!}
                            <span class="d-block">{{$student->fathers_name}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-2 d-flex justify-content-center">
                        <img class="border border-secondary" width="130px" height="140px" src="{{ $student->photo ? $student->photo->file : '/images/DummyProfile.jpg' }}">
                    </div>
                </div>
            </div>
        </div>


        <div class="additional_info info_bar">
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="name">অধ্যয়নরত শ্রেণি :</label>
                    {!! Form::select('class_id', $classes, $student->class_id, ['class' => 'form-control', 'required'=>'required']) !!}
                </div>
                <div class="form-group col-md-4">
                    {!! Form::label('student_section','শাখা :') !!}
                    {!! Form::select('student_section', [null => ' প্রযোজ্য নয়'] + $sections, $student->student_section, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-md-4">
                    {!! Form::label('student_roll','রোল :') !!}
                    {!! Form::text('student_roll', $student->student_roll, ['class'=>'form-control', 'placeholder'=>'রোল', 'required'=>'required']) !!}
                </div>
            </div>
        </div>

        <div class="form-group float-right">
            {!! Form::submit('Update Student', ['class'=>' m-4 btn btn-success submit_form_active']) !!}
        </div>

        {!! Form::close() !!}
    </div>

    @endif

</div>

    <!-- start dashboard content -->

</div>


@endsection
