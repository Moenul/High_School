@extends('layouts.admin')

@section('style')
<style>

.container{
    position: relative;
    border: 1px solid #cfcfcf;
    padding: 15px;
}
.container .section_title{
    font-size: 20px;
    padding-left: 25px;
}
.container .section_info{
    border: 1px solid #cfcfcf;
    padding: 10px;
    position: relative;
    margin-bottom: 40px;
}
.container .section_info p{
    margin: 8px 0px;
}
.container .section_info .student_photo{
    width: 130px;
    height: 135px;
    overflow: hidden;
    position: absolute;
    top: 10px;
    right: 10px;
    border: 1px solid #e3e3e3;
}
.container .section_info .collaps{
    width: 48%;
    display: inline-block;
    margin: 0px 0px;
}

.container .address_info .collaps{
    width: 30%;
    margin: 8px 0px;
}



</style>
@endsection

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

    <div class="section_title">শিক্ষার্থীর পরিচয়</div>
    <div class="section_info">
        <p> <span class="title">শিক্ষার্থীর নাম বাংলায় :</span> <span class="details">{{$student->student_name}}</span></p>
        <p> <span class="title">শিক্ষার্থীর নাম ইংরেজি :</span> <span class="details">{{$student->student_name_en}}</span></p>
        <p  class="collaps"> <span class="title">জন্ম নিবন্ধন নম্বর :</span> <span class="details">{{$student->student_birth_reg}}</span></p>
        <p class="collaps"> <span class="title">জন্ম তারিখ :</span> <span class="details">{{$student->student_DOB}}</span></p>
        <p class="collaps"> <span class="title">শ্রেণী :</span> <span class="details">{{$student->class->name}}</span></p>
        <p class="collaps"> <span class="title">শাখা :</span> <span class="details">{{$student->section->name}}</span></p>
        <p class="collaps"> <span class="title">রোল :</span> <span class="details">{{$student->student_roll}}</span></p>
        <p class="collaps"> <span class="title">লিঙ্গ :</span> <span class="details">{{$student->student_gender}}</span></p>

        <div class="student_photo">
            <img width="100%" height="100%" src="{{ $student->photo ? $student->photo->file : '/images/DummyProfile.jpg' }}">
        </div>
    </div>

    <div class="section_title">পিতার পরিচয়</div>
    <div class="section_info fathers_info">
        <p> <span class="title">পিতার নাম বাংলায় :</span> <span class="details">{{$student->fathers_name}}</span></p>
        <p> <span class="title">পিতার নাম ইংরেজি :</span> <span class="details">{{$student->fathers_name_en}}</span></p>
        <p class="collaps"> <span class="title">জন্ম নিবন্ধন নম্বর :</span> <span class="details">{{$student->fathers_birth_reg}}</span></p>
        <p class="collaps"> <span class="title">জাতীয় পরিচয়পত্র নম্বর :</span> <span class="details">{{$student->fathers_NID}}</span></p>
        <p class="collaps"> <span class="title">জন্ম তারিখ :</span> <span class="details">{{$student->fathers_DOB}}</span></p>
        <p class="collaps"> <span class="title">ফোন নম্বর :</span> <span class="details">{{$student->fathers_phone}}</span></p>
        <p class="collaps"> <span class="title">পিতার পেশা :</span> <span class="details">{{$student->fathers_profession}}</span></p>
    </div>


    <div class="section_title">মাতার পরিচয়</div>
    <div class="section_info fathers_info">
        <p> <span class="title">মাতার নাম বাংলায় :</span> <span class="details">{{$student->mothers_name}}</span></p>
        <p> <span class="title">মাতার নাম ইংরেজি :</span> <span class="details">{{$student->mothers_name_en}}</span></p>
        <p class="collaps"> <span class="title">জন্ম নিবন্ধন নম্বর :</span> <span class="details">{{$student->mothers_birth_reg}}</span></p>
        <p class="collaps"> <span class="title">জাতীয় পরিচয়পত্র নম্বর :</span> <span class="details">{{$student->mothers_NID}}</span></p>
        <p class="collaps"> <span class="title">জন্ম তারিখ :</span> <span class="details">{{$student->mothers_DOB}}</span></p>
        <p class="collaps"> <span class="title">ফোন নম্বর :</span> <span class="details">{{$student->mothers_phone}}</span></p>
        <p class="collaps"> <span class="title">মাতার পেশা :</span> <span class="details">{{$student->mothers_profession}}</span></p>
    </div>


    <div class="section_title">অভিভাবকের পরিচয়</div>
    <div class="section_info fathers_info">
        <p> <span class="title">অভিভাবকের নাম বাংলায় :</span> <span class="details">{{$student->guardian_name}}</span></p>
        <p> <span class="title">অভিভাবকের নাম ইংরেজি :</span> <span class="details">{{$student->guardian_name_en}}</span></p>
        <p class="collaps"> <span class="title">জন্ম নিবন্ধন নম্বর :</span> <span class="details">{{$student->guardian_birth_reg}}</span></p>
        <p class="collaps"> <span class="title">জাতীয় পরিচয়পত্র নম্বর :</span> <span class="details">{{$student->guardian_NID}}</span></p>
        <p class="collaps"> <span class="title">জন্ম তারিখ :</span> <span class="details">{{$student->guardian_DOB}}</span></p>
        <p class="collaps"> <span class="title">ফোন নম্বর :</span> <span class="details">{{$student->guardian_phone}}</span></p>
        <p> <span class="title">শিক্ষার্থীর সাথে সম্পর্ক :</span> <span class="details">{{$student->guardian_relation}}</span></p>
    </div>

    <hr>

    <div class="section_title">আনুষঙ্গিক তথ্য</div>
    <div class="section_info address_info">
        <p class="collaps"> <span class="title">জাতীয়তা :</span> <span class="details">{{$student->nationality}}</span></p>
        <p class="collaps"> <span class="title">ধর্ম :</span> <span class="details">{{$student->religion}}</span></p>
        <p  class="collaps"> <span class="title">শারীরিক অক্ষমতা :</span> <span class="details">{{$student->physical_disability}}</span></p>
    </div>

    <div class="section_title">স্থায়ী ঠিকানা</div>
    <div class="section_info address_info">
        <p class="collaps"> <span class="title">বিভাগ :</span> <span class="details">{{$student->permanent_division}}</span></p>
        <p class="collaps"> <span class="title">জেলা :</span> <span class="details">{{$student->permanent_district}}</span></p>
        <p class="collaps"> <span class="title">উপজেলা :</span> <span class="details">{{$student->permanent_upazila}}</span></p>
        <p class="collaps"> <span class="title">ডাকঘর :</span> <span class="details">{{$student->permanent_postOffice}}</span></p>
        <p class="collaps"> <span class="title">পোস্ট কোড :</span> <span class="details">{{$student->permanent_postCode}}</span></p>
        <p class="collaps"> <span class="title">গ্রাম :</span> <span class="details">{{$student->permanent_postCode}}</span></p>
    </div>

    <div class="section_title">বর্তমান ঠিকানা</div>
    <div class="section_info address_info">
        <p class="collaps"> <span class="title">বিভাগ :</span> <span class="details">{{$student->present_division}}</span></p>
        <p class="collaps"> <span class="title">জেলা :</span> <span class="details">{{$student->present_district}}</span></p>
        <p class="collaps"> <span class="title">উপজেলা :</span> <span class="details">{{$student->present_upazila}}</span></p>
        <p class="collaps"> <span class="title">ডাকঘর :</span> <span class="details">{{$student->present_postOffice}}</span></p>
        <p class="collaps"> <span class="title">পোস্ট কোড :</span> <span class="details">{{$student->present_postCode}}</span></p>
        <p class="collaps"> <span class="title">গ্রাম :</span> <span class="details">{{$student->present_postCode}}</span></p>
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
