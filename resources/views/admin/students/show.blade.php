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
        <h3>Student</h3>&nbsp;&nbsp;<span>Manage Student</span>
        <a href="{{ url('../') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

    <!-- start dashboard content -->
<div class="container">

    @if ($student)
    <div class="row">
        <div class="col-6">
            <span class="d-block mb-1"><b>শিক্ষার্থীর নাম :</b>  {{$student->student_name}}</span>
            <span class="d-block mb-1"><b>শিক্ষার্থীর নাম ইংরেজি :</b>  {{$student->student_name_en}}</span>
            <span class="d-block mb-1"><b>জন্ম তারিখ :</b>  {{$student->student_DOB}}</span>
            <span class="d-block mb-1"><b>জন্ম নিবন্ধন নম্বর :</b>  {{$student->student_birth_reg}}</span>
            <span class="d-block mb-1"><b>শ্রেণী :</b>  {{$student->class->name}}</span>
            <span class="d-block mb-1"><b>শাখা :</b>  {{$student->section->name}}</span>
            <span class="d-block mb-1"><b>রোল :</b>  {{$student->student_roll}}</span>
            <span class="d-block mb-1"><b>লিঙ্গ :</b>  {{$student->student_gender}}</span>
        </div>
        <div class="col-4">
            <div class="mb-2 d-flex justify-content-center">
                <img class="action_field border border-secondary" width="210px" height="220px"  src="{{ $student->photo ? $student->photo->file : '/images/DummyProfile.jpg' }}">
            </div>
        </div>

        <div class="col-6">
            <h5 class="text-center mt-1">পিতার পরিচয় :</h5>
            <span class="d-block mb-1"><b>পিতার নাম :</b>  {{$student->fathers_name}}</span>
            <span class="d-block mb-1"><b>পিতার নাম ইংরেজি :</b>  {{$student->fathers_name_en}}</span>
            <span class="d-block mb-1"><b>জন্ম তারিখ :</b>  {{$student->fathers_DOB}}</span>
            <span class="d-block mb-1"><b>জন্ম নিবন্ধন নম্বর :</b>  {{$student->fathers_NID}}</span>
            <span class="d-block mb-1"><b>জাতীয় পরিচয়পত্র নম্বর :</b>  {{$student->fathers_birth_reg}}</span>
            <span class="d-block mb-1"><b>ফোন নম্বর :</b>  {{$student->fathers_phone}}</span>
            <span class="d-block mb-1"><b>পিতার পেশা :</b>  {{$student->fathers_profession}}</span>
        </div>
        <div class="col-6">
            <h5 class="text-center mt-1">মাতার পরিচয় :</h5>
            <span class="d-block mb-1"><b>মাতার নাম :</b>  {{$student->mothers_name}}</span>
            <span class="d-block mb-1"><b>মাতার নাম ইংরেজি :</b>  {{$student->mothers_name_en}}</span>
            <span class="d-block mb-1"><b>জন্ম তারিখ :</b>  {{$student->mothers_DOB}}</span>
            <span class="d-block mb-1"><b>জন্ম নিবন্ধন নম্বর :</b>  {{$student->mothers_NID}}</span>
            <span class="d-block mb-1"><b>জাতীয় পরিচয়পত্র নম্বর :</b>  {{$student->mothers_birth_reg}}</span>
            <span class="d-block mb-1"><b>ফোন নম্বর :</b>  {{$student->mothers_phone}}</span>
            <span class="d-block mb-1"><b>মাতার পেশা :</b>  {{$student->mothers_profession}}</span>
        </div>
        <div class="col-6">
            <h5 class="text-center mt-1">অভিভাবকের পরিচয় :</h5>
            <span class="d-block mb-1"><b>অভিভাবকের নাম :</b>  {{$student->guardian_name}}</span>
            <span class="d-block mb-1"><b>অভিভাবকের নাম ইংরেজি :</b>  {{$student->guardian_name_en}}</span>
            <span class="d-block mb-1"><b>জন্ম তারিখ :</b>  {{$student->guardian_DOB}}</span>
            <span class="d-block mb-1"><b>জন্ম নিবন্ধন নম্বর :</b>  {{$student->guardian_NID}}</span>
            <span class="d-block mb-1"><b>জাতীয় পরিচয়পত্র নম্বর :</b>  {{$student->guardian_birth_reg}}</span>
            <span class="d-block mb-1"><b>ফোন নম্বর :</b>  {{$student->guardian_phone}}</span>
            <span class="d-block mb-1"><b>শিক্ষার্থীর সাথে সম্পর্ক :</b>  {{$student->guardian_relation}}</span>
        </div>
        <div class="col-6">
            <h5 class="text-center mt-1">আনুষঙ্গিক তথ্য :</h5>
            <span class="d-block mb-1"><b>জাতীয়তা :</b>  {{$student->nationality}}</span>
            <span class="d-block mb-1"><b>ধর্ম :</b>  {{$student->religion}}</span>
            <span class="d-block mb-1"><b>শারীরিক অক্ষমতা :</b>  {{$student->physical_disability}}</span>
        </div>
        <div class="col-6">
            <h5 class="text-center mt-1">স্থায়ী ঠিকানা :</h5>
            <span class="d-block mb-1"><b>বিভাগ :</b>  {{$student->permanent_division}}</span>
            <span class="d-block mb-1"><b>জেলা :</b>  {{$student->permanent_district}}</span>
            <span class="d-block mb-1"><b>উপজেলা :</b>  {{$student->permanent_upazila}}</span>
            <span class="d-block mb-1"><b>ডাকঘর :</b>  {{$student->permanent_postOffice}}</span>
            <span class="d-block mb-1"><b>পোস্ট কোড :</b>  {{$student->permanent_postCode}}</span>
            <span class="d-block mb-1"><b>গ্রাম :</b>  {{$student->permanent_village}}</span>
        </div>
        <div class="col-6">
            <h5 class="text-center mt-1">বর্তমান ঠিকানা :</h5>
            <span class="d-block mb-1"><b>বিভাগ :</b>  {{$student->present_division}}</span>
            <span class="d-block mb-1"><b>জেলা :</b>  {{$student->present_district}}</span>
            <span class="d-block mb-1"><b>উপজেলা :</b>  {{$student->present_upazila}}</span>
            <span class="d-block mb-1"><b>ডাকঘর :</b>  {{$student->present_postOffice}}</span>
            <span class="d-block mb-1"><b>পোস্ট কোড :</b>  {{$student->present_postCode}}</span>
            <span class="d-block mb-1"><b>গ্রাম :</b>  {{$student->present_village}}</span>
        </div>
        <div class="col-8">
            <div class="row">
            <a href="{{ Route('admin.students.edit', $student->id) }}" class="btn btn-warning m-4">Edit Student Data</a>
            {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminStudentsController@destroy', $student->id]]) !!}
                {{ Form::button('Delete Student', ['type' => 'submit', 'class' => 'btn btn-danger m-4'] )  }}
            {!! Form::close() !!}
            </div>
        </div>
    </div>
    @endif

</div>

    <!-- start dashboard content -->

</div>


@endsection
