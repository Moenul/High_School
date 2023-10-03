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
        <h3>student</h3>&nbsp;&nbsp;<span>Manage student</span>
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
                <div class="form-group col-md-6">
                    {!! Form::label('student_name','শিক্ষার্থীর নাম :') !!}
                    {!! Form::text('student_name', $student->student_name, ['class'=>'form-control', 'placeholder'=>'শিক্ষার্থীর নাম', 'required'=>'required']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::label('student_name_en','শিক্ষার্থীর নাম ইংরেজি :') !!}
                    {!! Form::text('student_name_en', $student->student_name_en, ['class'=>'form-control', 'placeholder'=>'Student Name English', 'required'=>'required']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::label('student_DOB','জন্ম তারিখ :') !!}
                    {!! Form::date('student_DOB', $student->student_DOB, ['class'=>'form-control', 'required'=>'required']) !!}
                </div>
                <div class="form-group col-md-6 {{ $errors->get('student_birth_reg') ? 'has-error' : 'hess' }}">
                    {!! Form::label('student_birth_reg','জন্ম নিবন্ধন নম্বর :') !!}
                    {!! Form::text('student_birth_reg', $student->student_birth_reg, ['class'=>'form-control', 'placeholder'=>'জন্ম নিবন্ধন নম্বর', 'maxlength'=>17, 'required'=>'required' ]) !!}
                    @foreach($errors->get('student_birth_reg') as $error)
                        <span class="help-block text-danger">{{ $error }}</span>
                    @endforeach
                </div>
                <div class="form-group col-md-6">
                    <label class="d-block" for="name">লিঙ্গ :</label>
                    <div class="form-check form-check-inline">
                        {!! Form::radio('student_gender', $student->student_gender, true, ['class'=>'form-check-input']) !!}
                        {!! Form::label('student_gender', $student->student_gender, ['class'=>'form-check-label']) !!}
                    </div>
                    <div class="form-check form-check-inline">
                        {!! Form::radio('student_gender', 'ছেলে', false, ['class'=>'form-check-input']) !!}
                        {!! Form::label('student_gender', 'ছেলে', ['class'=>'form-check-label']) !!}
                    </div>
                    <div class="form-check form-check-inline">
                        {!! Form::radio('student_gender', 'মেয়ে', false, ['class'=>'form-check-input']) !!}
                        {!! Form::label('student_gender', 'মেয়ে', ['class'=>'form-check-label']) !!}
                    </div>
                    <div class="form-check form-check-inline">
                        {!! Form::radio('student_gender', 'অন্যান্য', false, ['class'=>'form-check-input']) !!}
                        {!! Form::label('student_gender', 'অন্যান্য', ['class'=>'form-check-label']) !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="fathars_info info_bar">
            <div class="row">
                <div class="form-group col-md-4">
                    {!! Form::label('fathers_name','পিতার নাম :') !!}
                    {!! Form::text('fathers_name', $student->fathers_name, ['class'=>'form-control', 'placeholder'=>'পিতার নাম', 'required'=>'required']) !!}
                </div>
                <div class="form-group col-md-4">
                    {!! Form::label('fathers_name_en','পিতার নাম ইংরেজি :') !!}
                    {!! Form::text('fathers_name_en', $student->fathers_name_en, ['class'=>'form-control', 'placeholder'=>'Fathars Name English', 'required'=>'required']) !!}
                </div>
                <div class="form-group col-md-4">
                    {!! Form::label('fathers_DOB','জন্ম তারিখ :') !!}
                    {!! Form::date('fathers_DOB', $student->fathers_DOB, ['class'=>'form-control', 'required'=>'required']) !!}
                </div>
                <div class="form-group col-md-4">
                    {!! Form::label('fathers_birth_reg','জন্ম নিবন্ধন নম্বর :') !!}
                    {!! Form::text('fathers_birth_reg', $student->fathers_birth_reg, ['class'=>'form-control', 'placeholder'=>'জন্ম নিবন্ধন নম্বর', 'maxlength'=>17, 'required'=>'required']) !!}
                </div>
                <div class="form-group col-md-4">
                    {!! Form::label('fathers_NID','জাতীয় পরিচয়পত্র নম্বর :') !!}
                    {!! Form::text('fathers_NID', $student->fathers_NID, ['class'=>'form-control', 'placeholder'=>'জাতীয় পরিচয়পত্র নম্বর', 'maxlength'=>17, 'required'=>'required']) !!}
                </div>
                <div class="form-group col-md-4">
                    {!! Form::label('fathers_phone','ফোন নম্বর :') !!}
                    {!! Form::text('fathers_phone', $student->fathers_phone, ['class'=>'form-control', 'placeholder'=>'ফোন নম্বর', 'maxlength'=>11, 'required'=>'required']) !!}
                </div>
                <div class="form-group col-md-4">
                    {!! Form::label('fathers_profession','পিতার পেশা :') !!}
                    {!! Form::text('fathers_profession', $student->fathers_profession, ['class'=>'form-control', 'placeholder'=>'পিতার পেশা', 'required'=>'required']) !!}
                </div>
            </div>
        </div>

        <div class="mothers_info info_bar">
            <div class="row">
                <div class="form-group col-md-4">
                    {!! Form::label('mothers_name','মাতার নাম :') !!}
                    {!! Form::text('mothers_name', $student->mothers_name, ['class'=>'form-control', 'placeholder'=>'মাতার নাম', 'required'=>'required']) !!}
                </div>
                <div class="form-group col-md-4">
                    {!! Form::label('mothers_name_en','মাতার নাম ইংরেজি :') !!}
                    {!! Form::text('mothers_name_en', $student->mothers_name_en, ['class'=>'form-control', 'placeholder'=>'Mothers Name English', 'required'=>'required']) !!}
                </div>
                <div class="form-group col-md-4">
                    {!! Form::label('mothers_DOB','জন্ম তারিখ :') !!}
                    {!! Form::date('mothers_DOB', $student->mothers_DOB, ['class'=>'form-control', 'required'=>'required']) !!}
                </div>
                <div class="form-group col-md-4">
                    {!! Form::label('mothers_birth_reg','জন্ম নিবন্ধন নম্বর :') !!}
                    {!! Form::text('mothers_birth_reg', $student->mothers_birth_reg, ['class'=>'form-control', 'placeholder'=>'জন্ম নিবন্ধন নম্বর', 'maxlength'=>17, 'required'=>'required']) !!}
                </div>
                <div class="form-group col-md-4">
                    {!! Form::label('mothers_NID','জাতীয় পরিচয়পত্র নম্বর :') !!}
                    {!! Form::text('mothers_NID', $student->mothers_NID, ['class'=>'form-control', 'placeholder'=>'জাতীয় পরিচয়পত্র নম্বর', 'maxlength'=>17, 'required'=>'required']) !!}
                </div>
                <div class="form-group col-md-4">
                    {!! Form::label('mothers_phone','ফোন নম্বর :') !!}
                    {!! Form::text('mothers_phone', $student->mothers_phone, ['class'=>'form-control', 'placeholder'=>'ফোন নম্বর', 'maxlength'=>11, 'required'=>'required']) !!}
                </div>
                <div class="form-group col-md-4">
                    {!! Form::label('mothers_profession','মাতার পেশা :') !!}
                    {!! Form::text('mothers_profession', $student->mothers_profession, ['class'=>'form-control', 'placeholder'=>'মাতার পেশা', 'required'=>'required']) !!}
                </div>
            </div>
        </div>

        <div class="guardians_info info_bar">
            <div class="row">
                <div class="form-group col-md-4">
                    {!! Form::label('guardian_name','অভিভাবকের নাম :') !!}
                    {!! Form::text('guardian_name', $student->guardian_name, ['class'=>'form-control', 'placeholder'=>'অভিভাবকের নাম', 'required'=>'required']) !!}
                </div>
                <div class="form-group col-md-4">
                    {!! Form::label('guardian_name_en','অভিভাবকের নাম ইংরেজি :') !!}
                    {!! Form::text('guardian_name_en', $student->guardian_name_en, ['class'=>'form-control', 'placeholder'=>'Guardian Name English', 'required'=>'required']) !!}
                </div>
                <div class="form-group col-md-4">
                    {!! Form::label('guardian_DOB','জন্ম তারিখ :') !!}
                    {!! Form::date('guardian_DOB', $student->guardian_DOB, ['class'=>'form-control', 'required'=>'required']) !!}
                </div>
                <div class="form-group col-md-4">
                    {!! Form::label('guardian_birth_reg','জন্ম নিবন্ধন নম্বর :') !!}
                    {!! Form::text('guardian_birth_reg', $student->guardian_birth_reg, ['class'=>'form-control', 'placeholder'=>'জন্ম নিবন্ধন নম্বর', 'maxlength'=>17]) !!}
                </div>
                <div class="form-group col-md-4">
                    {!! Form::label('guardian_NID','জাতীয় পরিচয়পত্র নম্বর :') !!}
                    {!! Form::text('guardian_NID', $student->guardian_NID, ['class'=>'form-control', 'placeholder'=>'জাতীয় পরিচয়পত্র নম্বর', 'maxlength'=>17]) !!}
                </div>
                <div class="form-group col-md-4">
                    {!! Form::label('guardian_phone','ফোন নম্বর :') !!}
                    {!! Form::text('guardian_phone', $student->guardian_phone, ['class'=>'form-control', 'placeholder'=>'ফোন নম্বর', 'maxlength'=>11, 'required'=>'required']) !!}
                </div>
                <div class="form-group col-md-4">
                    {!! Form::label('guardian_relation','শিক্ষার্থীর সাথে সম্পর্ক :') !!}
                    {!! Form::text('guardian_relation', $student->guardian_relation, ['class'=>'form-control', 'placeholder'=>'শিক্ষার্থীর সাথে সম্পর্ক', 'required'=>'required']) !!}
                </div>
            </div>
        </div>

        <div class="permanentAddress_info info_bar">
            <div class="info_title">স্থায়ী ঠিকানা :</div>
            <div class="row">
                <div class="form-group col-6 col-md-3">
                    {!! Form::text('permanent_division', $student->permanent_division, ['class'=>'form-control', 'id'=>'permanent_division', 'placeholder'=>'বিভাগ', 'required'=>'required']) !!}
                </div>
                <div class="form-group col-6 col-md-3">
                    {!! Form::text('permanent_district', $student->permanent_district, ['class'=>'form-control', 'id'=>'permanent_district', 'placeholder'=>'জেলা', 'required'=>'required']) !!}
                </div>
                <div class="form-group col-6 col-md-3">
                    {!! Form::text('permanent_upazila', $student->permanent_upazila, ['class'=>'form-control', 'id'=>'permanent_upazila', 'placeholder'=>'উপজেলা', 'required'=>'required']) !!}
                </div>
                <div class="form-group col-6 col-md-3">
                    {!! Form::text('permanent_postOffice', $student->permanent_postOffice, ['class'=>'form-control', 'id'=>'permanent_postOffice', 'placeholder'=>'ডাকঘর', 'required'=>'required']) !!}
                </div>
                <div class="form-group col-6 col-md-3">
                    {!! Form::text('permanent_postCode', $student->permanent_postCode, ['class'=>'form-control', 'id'=>'permanent_postCode', 'placeholder'=>'পোস্ট কোড', 'required'=>'required']) !!}
                </div>
                <div class="form-group col-6 col-md-3">
                    {!! Form::text('permanent_village', $student->permanent_village, ['class'=>'form-control', 'id'=>'permanent_village', 'placeholder'=>'গ্রাম', 'required'=>'required']) !!}
                </div>
            </div>
        </div>

        <div class="presentAddress_info info_bar">
            <div class="info_title">বর্তমান ঠিকানা :</div>
            <div class="row">
                <div class="form-group col-6 col-md-3">
                    {!! Form::text('present_division', $student->present_division, ['class'=>'form-control', 'id'=>'present_division', 'placeholder'=>'বিভাগ', 'required'=>'required']) !!}
                </div>
                <div class="form-group col-6 col-md-3">
                    {!! Form::text('present_district', $student->present_district, ['class'=>'form-control', 'id'=>'present_district', 'placeholder'=>'জেলা', 'required'=>'required']) !!}
                </div>
                <div class="form-group col-6 col-md-3">
                    {!! Form::text('present_upazila', $student->present_upazila, ['class'=>'form-control', 'id'=>'present_upazila', 'placeholder'=>'উপজেলা', 'required'=>'required']) !!}
                </div>
                <div class="form-group col-6 col-md-3">
                    {!! Form::text('present_postOffice', $student->present_postOffice, ['class'=>'form-control', 'id'=>'present_postOffice', 'placeholder'=>'ডাকঘর', 'required'=>'required']) !!}
                </div>
                <div class="form-group col-6 col-md-3">
                    {!! Form::text('present_postCode', $student->present_postCode, ['class'=>'form-control', 'id'=>'present_postCode', 'placeholder'=>'পোস্ট কোড', 'required'=>'required']) !!}
                </div>
                <div class="form-group col-6 col-md-3">
                    {!! Form::text('present_village', $student->present_village, ['class'=>'form-control', 'id'=>'present_village', 'placeholder'=>'গ্রাম', 'required'=>'required']) !!}
                </div>
            </div>
        </div>

        <div class="additional_info info_bar">
            <div class="row">
                <div class="form-group col-md-3">
                    {!! Form::label('nationality','জাতীয়তা :') !!}
                    {!! Form::text('nationality', $student->nationality, ['class'=>'form-control', 'placeholder'=>'জাতীয়তা', 'required'=>'required']) !!}
                </div>
                <div class="form-group col-md-3">
                    {!! Form::label('religion','ধর্ম :') !!}
                    {!! Form::text('religion', $student->religion, ['class'=>'form-control', 'placeholder'=>'ধর্ম', 'required'=>'required']) !!}
                </div>
                <div class="form-group col-md-3">
                    {!! Form::label('physical_disability','শারীরিক অক্ষমতা :') !!}
                    {!! Form::text('physical_disability', $student->physical_disability, ['class'=>'form-control', 'placeholder'=>'শারীরিক অক্ষমতা']) !!}
                </div>
            </div>
        </div>

        <div class="additional_info info_bar">
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="name">ভর্তি ইচ্ছু শ্রেণীর নাম :</label>
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

            <div class="row">
                <div class="form-group col-5" style="width: 160px; margin: 0px 15px;">
                    {!! Form::label('photo_id', 'শিক্ষার্থীর ছবি :') !!}
                    <div class="mb-2 d-flex justify-content-center">
                        <img class="action_field border border-secondary" id="preview_img" width="160px" height="170px"  src="{{ $student->photo ? $student->photo->file : '/images/DummyProfile.jpg' }}">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="photo_id" value="{{$student->photo_id}}">
                        {!! Form::file('photo_id', ['class' => 'form-control-file border','id' => 'imgInp']) !!}
                    </div>
                </div>
                <div class="form-group col-5">
                    {!! Form::label('certificate_id', 'প্রশংসা পত্র / ট্রান্সফার সার্টিফিকেট ছবি :') !!}
                    <div class="mb-2 d-flex justify-content-center">
                        <a target="_blank" href="{{ $student->certificate ? $student->certificate->file : '/images/Empty_images.jpg' }}">
                        <img class="second_action_field border border-secondary" id="second_preview_img" width="300px" height="auto" src="{{ $student->certificate ? $student->certificate->file : '/images/Empty_images.jpg' }}">
                        </a>
                    </div>
                    <input type="hidden" name="certificate_id" value="{{$student->certificate_id}}">
                    {!! Form::file('certificate_id', ['class' => 'form-control-file border', 'id' => 'second_imgInp'], null) !!}
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
@section('script')

<script>


// Before Upload Preview Image

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#second_preview_img').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]); // convert to base64 string
        $('.second_action_field').show();
    }
}

$("#second_imgInp").change(function() {
    readURL(this);
});

// --------




</script>

@endsection
