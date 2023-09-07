@extends('layouts.app')

@section('navigation')
    @include('includes.navigation')
@endsection


@section('content')



<div class="admission_section">
    <div class="container">
        <h1>অনলাইন আবেদন ফরম</h1>

        <div class="instruction_bar">
            <div class="alert_info">
                <p> <span>সতর্কতাঃ</span> উল্লেখিত আবেদন ফরম জমা দেয়ার ক্ষেত্রে নির্দিষ্ট উল্লেখিত আবেদন ফরম জমা দেয়ার ক্ষেত্রে নির্দিষ্ট উল্লেখিত আবেদন ফরম জমা দেয়ার ক্ষেত্রে নির্দিষ্ট উল্লেখিত আবেদন ফরম জমা দেয়ার ক্ষেত্রে নির্দিষ্ট উল্লেখিত আবেদন ফরম জমা দেয়ার ক্ষেত্রে নির্দিষ্ট উল্লেখিত আবেদন ফরম জমা দেয়ার ক্ষেত্রে নির্দিষ্টউল্লেখিত আবেদন</p>
            </div>
            <div class="cost_info">
                <span>সেশন ফি ও টিউশন ফি</span>
                <div class="cost_table">
                    <table class="table table-sm ">
                        <thead>
                          <tr>
                            <th scope="col">শ্রেণী</th>
                            <th scope="col">সেশন ফি</th>
                            <th scope="col">টিউশন ফি</th>
                          </tr>
                        </thead>

                        <tbody>
                            @if ($studentCosts)
                                @foreach ($studentCosts as $studentCost)
                                    <tr>
                                        <th scope="row">{{$studentCost->class->name}}</th>
                                        <td>{{$studentCost->session_fee}}</td>
                                        <td>{{$studentCost->tuition_fee}}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        @foreach($errors->get('student_birth_reg') as $error)
            <div class="help-block text-center p-2 m-1 bg-danger">{{ $error }}</div>
        @endforeach

        <div class="form_section">
            {!! Form::open(['method'=>'POST', 'action'=>'AdmissionController@store', 'files'=>true]) !!}
            <div class="personal_info info_bar">
                <div class="info_title">ব্যক্তিগত তথ্য :</div>
                <div class="row">
                    <div class="form-group col-md-6">
                        {!! Form::label('student_name','শিক্ষার্থীর নাম :') !!}
                        {!! Form::text('student_name', null, ['class'=>'form-control', 'placeholder'=>'শিক্ষার্থীর নাম', 'required'=>'required']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::label('student_name_en','শিক্ষার্থীর নাম ইংরেজি :') !!}
                        {!! Form::text('student_name_en', null, ['class'=>'form-control', 'placeholder'=>'Student Name English', 'required'=>'required']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::label('student_DOB','জন্ম তারিখ :') !!}
                        {!! Form::date('student_DOB', null, ['class'=>'form-control', 'required'=>'required']) !!}
                    </div>
                    <div class="form-group col-md-6 {{ $errors->get('student_birth_reg') ? 'has-error' : 'hess' }}">
                        {!! Form::label('student_birth_reg','জন্ম নিবন্ধন নম্বর :') !!}
                        {!! Form::text('student_birth_reg', null, ['class'=>'form-control', 'placeholder'=>'জন্ম নিবন্ধন নম্বর', 'maxlength'=>17, 'required'=>'required' ]) !!}
                        @foreach($errors->get('student_birth_reg') as $error)
                            <span class="help-block text-danger">{{ $error }}</span>
                        @endforeach
                    </div>
                    <div class="form-group col-md-6">
                        <label class="d-block" for="name">লিঙ্গ :</label>
                        <div class="form-check form-check-inline">
                            {!! Form::radio('student_gender', 'ছেলে', true, ['class'=>'form-check-input']) !!}
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
                <div class="info_title">পিতার পরিচয় :</div>
                <div class="row">
                    <div class="form-group col-md-4">
                        {!! Form::label('fathers_name','পিতার নাম :') !!}
                        {!! Form::text('fathers_name', null, ['class'=>'form-control', 'placeholder'=>'পিতার নাম', 'required'=>'required']) !!}
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::label('fathers_name_en','পিতার নাম ইংরেজি :') !!}
                        {!! Form::text('fathers_name_en', null, ['class'=>'form-control', 'placeholder'=>'Fathars Name English', 'required'=>'required']) !!}
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::label('fathers_DOB','জন্ম তারিখ :') !!}
                        {!! Form::date('fathers_DOB', null, ['class'=>'form-control', 'required'=>'required']) !!}
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::label('fathers_birth_reg','জন্ম নিবন্ধন নম্বর :') !!}
                        {!! Form::text('fathers_birth_reg', null, ['class'=>'form-control', 'placeholder'=>'জন্ম নিবন্ধন নম্বর', 'maxlength'=>17, 'required'=>'required']) !!}
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::label('fathers_NID','জাতীয় পরিচয়পত্র নম্বর :') !!}
                        {!! Form::text('fathers_NID', null, ['class'=>'form-control', 'placeholder'=>'জাতীয় পরিচয়পত্র নম্বর', 'maxlength'=>17, 'required'=>'required']) !!}
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::label('fathers_phone','ফোন নম্বর :') !!}
                        {!! Form::text('fathers_phone', null, ['class'=>'form-control', 'placeholder'=>'ফোন নম্বর', 'maxlength'=>11, 'required'=>'required']) !!}
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::label('fathers_profession','পিতার পেশা :') !!}
                        {!! Form::text('fathers_profession', null, ['class'=>'form-control', 'placeholder'=>'পিতার পেশা', 'required'=>'required']) !!}
                    </div>
                </div>
            </div>

            <div class="mothers_info info_bar">
                <div class="info_title">মাতার পরিচয় :</div>
                <div class="row">
                    <div class="form-group col-md-4">
                        {!! Form::label('mothers_name','মাতার নাম :') !!}
                        {!! Form::text('mothers_name', null, ['class'=>'form-control', 'placeholder'=>'মাতার নাম', 'required'=>'required']) !!}
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::label('mothers_name_en','মাতার নাম ইংরেজি :') !!}
                        {!! Form::text('mothers_name_en', null, ['class'=>'form-control', 'placeholder'=>'Mothers Name English', 'required'=>'required']) !!}
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::label('mothers_DOB','জন্ম তারিখ :') !!}
                        {!! Form::date('mothers_DOB', null, ['class'=>'form-control', 'required'=>'required']) !!}
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::label('mothers_birth_reg','জন্ম নিবন্ধন নম্বর :') !!}
                        {!! Form::text('mothers_birth_reg', null, ['class'=>'form-control', 'placeholder'=>'জন্ম নিবন্ধন নম্বর', 'maxlength'=>17, 'required'=>'required']) !!}
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::label('mothers_NID','জাতীয় পরিচয়পত্র নম্বর :') !!}
                        {!! Form::text('mothers_NID', null, ['class'=>'form-control', 'placeholder'=>'জাতীয় পরিচয়পত্র নম্বর', 'maxlength'=>17, 'required'=>'required']) !!}
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::label('mothers_phone','ফোন নম্বর :') !!}
                        {!! Form::text('mothers_phone', null, ['class'=>'form-control', 'placeholder'=>'ফোন নম্বর', 'maxlength'=>11, 'required'=>'required']) !!}
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::label('mothers_profession','মাতার পেশা :') !!}
                        {!! Form::text('mothers_profession', null, ['class'=>'form-control', 'placeholder'=>'মাতার পেশা', 'required'=>'required']) !!}
                    </div>
                </div>
            </div>

            <div class="guardians_info info_bar">
                <div class="info_title">পিতা মাতার অবর্তমানে অভিভাবকের পরিচয় :</div>
                <div class="row">
                    <div class="form-group col-md-4">
                        {!! Form::label('guardian_name','অভিভাবকের নাম :') !!}
                        {!! Form::text('guardian_name', null, ['class'=>'form-control', 'placeholder'=>'অভিভাবকের নাম', 'required'=>'required']) !!}
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::label('guardian_name_en','অভিভাবকের নাম ইংরেজি :') !!}
                        {!! Form::text('guardian_name_en', null, ['class'=>'form-control', 'placeholder'=>'Guardian Name English', 'required'=>'required']) !!}
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::label('guardian_DOB','জন্ম তারিখ :') !!}
                        {!! Form::date('guardian_DOB', null, ['class'=>'form-control', 'required'=>'required']) !!}
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::label('guardian_birth_reg','জন্ম নিবন্ধন নম্বর :') !!}
                        {!! Form::text('guardian_birth_reg', null, ['class'=>'form-control', 'placeholder'=>'জন্ম নিবন্ধন নম্বর', 'maxlength'=>17]) !!}
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::label('guardian_NID','জাতীয় পরিচয়পত্র নম্বর :') !!}
                        {!! Form::text('guardian_NID', null, ['class'=>'form-control', 'placeholder'=>'জাতীয় পরিচয়পত্র নম্বর', 'maxlength'=>17]) !!}
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::label('guardian_phone','ফোন নম্বর :') !!}
                        {!! Form::text('guardian_phone', null, ['class'=>'form-control', 'placeholder'=>'ফোন নম্বর', 'maxlength'=>11, 'required'=>'required']) !!}
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::label('guardian_relation','শিক্ষার্থীর সাথে সম্পর্ক :') !!}
                        {!! Form::text('guardian_relation', null, ['class'=>'form-control', 'placeholder'=>'শিক্ষার্থীর সাথে সম্পর্ক', 'required'=>'required']) !!}
                    </div>
                </div>
            </div>

            <div class="permanentAddress_info info_bar">
                <div class="info_title">স্থায়ী ঠিকানা :</div>
                <div class="row">
                    <div class="form-group col-6 col-md-3">
                        {!! Form::text('permanent_division', null, ['class'=>'form-control', 'id'=>'permanent_division', 'placeholder'=>'বিভাগ', 'required'=>'required']) !!}
                    </div>
                    <div class="form-group col-6 col-md-3">
                        {!! Form::text('permanent_district', null, ['class'=>'form-control', 'id'=>'permanent_district', 'placeholder'=>'জেলা', 'required'=>'required']) !!}
                    </div>
                    <div class="form-group col-6 col-md-3">
                        {!! Form::text('permanent_upazila', null, ['class'=>'form-control', 'id'=>'permanent_upazila', 'placeholder'=>'উপজেলা', 'required'=>'required']) !!}
                    </div>
                    <div class="form-group col-6 col-md-3">
                        {!! Form::text('permanent_postOffice', null, ['class'=>'form-control', 'id'=>'permanent_postOffice', 'placeholder'=>'ডাকঘর', 'required'=>'required']) !!}
                    </div>
                    <div class="form-group col-6 col-md-3">
                        {!! Form::text('permanent_postCode', null, ['class'=>'form-control', 'id'=>'permanent_postCode', 'placeholder'=>'পোস্ট কোড', 'required'=>'required']) !!}
                    </div>
                    <div class="form-group col-6 col-md-3">
                        {!! Form::text('permanent_village', null, ['class'=>'form-control', 'id'=>'permanent_village', 'placeholder'=>'গ্রাম', 'required'=>'required']) !!}
                    </div>
                </div>
            </div>

            <div class="presentAddress_info info_bar">
                <div class="info_title">বর্তমান ঠিকানা :</div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="same_as_permanent" onchange="addressFunction()">
                    <label class="form-check-label" for="same_as_permanent">
                        স্থায়ী ঠিকানার অনুরূপ
                    </label>
                </div>
                <div class="row">
                    <div class="form-group col-6 col-md-3">
                        {!! Form::text('present_division', null, ['class'=>'form-control', 'id'=>'present_division', 'placeholder'=>'বিভাগ', 'required'=>'required']) !!}
                    </div>
                    <div class="form-group col-6 col-md-3">
                        {!! Form::text('present_district', null, ['class'=>'form-control', 'id'=>'present_district', 'placeholder'=>'জেলা', 'required'=>'required']) !!}
                    </div>
                    <div class="form-group col-6 col-md-3">
                        {!! Form::text('present_upazila', null, ['class'=>'form-control', 'id'=>'present_upazila', 'placeholder'=>'উপজেলা', 'required'=>'required']) !!}
                    </div>
                    <div class="form-group col-6 col-md-3">
                        {!! Form::text('present_postOffice', null, ['class'=>'form-control', 'id'=>'present_postOffice', 'placeholder'=>'ডাকঘর', 'required'=>'required']) !!}
                    </div>
                    <div class="form-group col-6 col-md-3">
                        {!! Form::text('present_postCode', null, ['class'=>'form-control', 'id'=>'present_postCode', 'placeholder'=>'পোস্ট কোড', 'required'=>'required']) !!}
                    </div>
                    <div class="form-group col-6 col-md-3">
                        {!! Form::text('present_village', null, ['class'=>'form-control', 'id'=>'present_village', 'placeholder'=>'গ্রাম', 'required'=>'required']) !!}
                    </div>
                </div>
            </div>

            <div class="additional_info info_bar">
                <div class="info_title">আনুষঙ্গিক তথ্য :</div>
                <div class="row">
                    <div class="form-group col-md-4">
                        {!! Form::label('nationality','জাতীয়তা :') !!}
                        {!! Form::text('nationality', null, ['class'=>'form-control', 'placeholder'=>'জাতীয়তা', 'required'=>'required']) !!}
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::label('religion','ধর্ম :') !!}
                        {!! Form::text('religion', null, ['class'=>'form-control', 'placeholder'=>'ধর্ম', 'required'=>'required']) !!}
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::label('physical_disability','শারীরিক অক্ষমতা :') !!}
                        {!! Form::text('physical_disability', null, ['class'=>'form-control', 'placeholder'=>'শারীরিক অক্ষমতা']) !!}
                    </div>
                </div>
            </div>

            <div class="additional_info info_bar">
                <div class="info_title">ভর্তি সম্পর্কিত :</div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="name">ভর্তি ইচ্ছু শ্রেণীর নাম :</label>
                        {!! Form::select('admission_class', [null => 'শ্রেণীর নাম'] + $classes, null, ['class' => 'form-control', 'required'=>'required']) !!}
                    </div>
                    <div class="form-group col-md-4">
                        <label for="name">পূর্বে অধ্যয়নরত শ্রেণীর নাম (প্রযোজ্য ক্ষেত্রে) :</label>
                        {!! Form::select('previous_class', [null => 'শ্রেণীর নাম'] + $classes, null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('certificate_id', 'প্রশংসা পত্র / ট্রান্সফার সার্টিফিকেট ছবি :') !!}
                        {!! Form::file('certificate_id', ['class' => 'form-control-file border'], null) !!}
                    </div>

                    <div class="form-group" style="width: 160px; margin: 0px 15px;">
                        {!! Form::label('photo_id', 'শিক্ষার্থীর ছবি :') !!}
                        <div class="mb-2 d-flex justify-content-center">
                            <img class="action_field border border-secondary" id="preview_img" width="160px" height="170px"  src="{{ '/images/DummyProfile.jpg' }}">
                        </div>
                        <div class="form-group">
                            {!! Form::file('photo_id', ['class' => 'form-control-file border','id' => 'imgInp', 'required'=>'required'], null) !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="submit_info info_bar">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="informationVerified">
                    <label class="form-check-label text-danger" for="informationVerified">
                        উপরোক্ত সকল তথ্য সঠিক আছে।
                    </label>
                </div>
                <div class="form-group">
                    {!! Form::submit('Submit Form', ['class'=>'mt-4 btn btn-success submit_form_disabled','disabled']) !!}
                    {!! Form::submit('Submit Form', ['class'=>'mt-4 btn btn-success submit_form_active d-none']) !!}
                </div>
            </div>
            {!! Form::close() !!}

        </div>

    </div>
</div>



@endsection


@section('script')
<script>

$("#informationVerified").click(function() {
    $(".submit_form_disabled").toggle();
    $(".submit_form_active").toggleClass('d-none');
});

</script>
<script>
    function addressFunction() {
        if (document.getElementById(
        "same_as_permanent").checked) {
            document.getElementById(
            "present_division").value =
            document.getElementById(
            "permanent_division").value;

            document.getElementById(
            "present_district").value =
            document.getElementById(
            "permanent_district").value;

            document.getElementById(
            "present_upazila").value =
            document.getElementById(
            "permanent_upazila").value;

            document.getElementById(
            "present_postOffice").value =
            document.getElementById(
            "permanent_postOffice").value;

            document.getElementById(
            "present_postCode").value =
            document.getElementById(
            "permanent_postCode").value;

            document.getElementById(
            "present_village").value =
            document.getElementById(
            "permanent_village").value;

        } else {
            document.getElementById(
            "present_division").value = "";
            document.getElementById(
            "present_district").value = "";
            document.getElementById(
            "present_upazila").value = "";
            document.getElementById(
            "present_postOffice").value = "";
            document.getElementById(
            "present_postCode").value = "";
            document.getElementById(
            "present_village").value = "";
        }
    }
</script>

@endsection
