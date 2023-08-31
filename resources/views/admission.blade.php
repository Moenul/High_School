@extends('layouts.app')

@section('navigation')
    @include('includes.navigation')
@endsection


@section('content')



<div class="admission_section">
    <div class="container">
        <h1>অনলাইন আবেদন ফরম</h1>

        <div class="instruction_bar">
            <p> <span>সতর্কতাঃ</span> উল্লেখিত আবেদন ফরম জমা দেয়ার ক্ষেত্রে নির্দিষ্ট উল্লেখিত আবেদন ফরম জমা দেয়ার ক্ষেত্রে নির্দিষ্ট উল্লেখিত আবেদন ফরম জমা দেয়ার ক্ষেত্রে নির্দিষ্ট উল্লেখিত আবেদন ফরম জমা দেয়ার ক্ষেত্রে নির্দিষ্ট উল্লেখিত আবেদন ফরম জমা দেয়ার ক্ষেত্রে নির্দিষ্ট উল্লেখিত আবেদন ফরম জমা দেয়ার ক্ষেত্রে নির্দিষ্টউল্লেখিত আবেদন</p>
        </div>

        <div class="form_section">
            <div class="personal_info info_bar">
                <div class="info_title">ব্যক্তিগত তথ্য :</div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name">শিশুর নাম :</label>
                        <input type="text" class="form-control" placeholder="শিশুর নাম">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name">শিশুর নাম ইংলিশ :</label>
                        <input type="text" class="form-control" placeholder="Name of child">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name">জন্ম তারিখ :</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name">জন্ম নিবন্ধন নম্বর :</label>
                        <input type="number" class="form-control" placeholder="জন্ম নিবন্ধন নম্বর">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="d-block" for="name">লিঙ্গ :</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                            <label class="form-check-label" for="flexRadioDefault1">ছেলে</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">মেয়ে</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                            <label class="form-check-label" for="flexRadioDefault3">অন্যান্য</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fathars_info info_bar">
                <div class="info_title">পিতার পরিচয় :</div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="name">পিতার নাম :</label>
                        <input type="text" class="form-control" placeholder="পিতার নাম">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="name">পিতার নাম ইংলিশ :</label>
                        <input type="text" class="form-control" placeholder="Fathars Name English">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="name">জন্ম তারিখ :</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="name">জন্ম নিবন্ধন নম্বর :</label>
                        <input type="number" class="form-control" placeholder="জন্ম নিবন্ধন নম্বর">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="name">জাতীয় পরিচয়পত্র নম্বর :</label>
                        <input type="number" class="form-control" placeholder="জাতীয় পরিচয়পত্র নম্বর">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="name">ফোন নম্বর :</label>
                        <input type="number" class="form-control" placeholder="ফোন নম্বর">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="name">পিতার পেশা :</label>
                        <input type="text" class="form-control" placeholder="পিতার পেশা">
                    </div>
                </div>
            </div>

            <div class="mothers_info info_bar">
                <div class="info_title">মাতার পরিচয় :</div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="name">মাতার নাম :</label>
                        <input type="text" class="form-control" placeholder="মাতার নাম">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="name">মাতার নাম ইংলিশ :</label>
                        <input type="text" class="form-control" placeholder="Mothers Name English">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="name">জন্ম তারিখ :</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="name">জন্ম নিবন্ধন নম্বর :</label>
                        <input type="number" class="form-control" placeholder="জন্ম নিবন্ধন নম্বর">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="name">জাতীয় পরিচয়পত্র নম্বর :</label>
                        <input type="number" class="form-control" placeholder="জাতীয় পরিচয়পত্র নম্বর">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="name">ফোন নম্বর :</label>
                        <input type="number" class="form-control" placeholder="ফোন নম্বর">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="name">মাতার পেশা :</label>
                        <input type="text" class="form-control" placeholder="মাতার পেশা">
                    </div>
                </div>
            </div>

            <div class="guardians_info info_bar">
                <div class="info_title">পিতা মাতার অবর্তমানে অভিভাবকের পরিচয় :</div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="name">অভিভাবকের নাম :</label>
                        <input type="text" class="form-control" placeholder="অভিভাবকের নাম">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="name">অভিভাবকের নাম ইংলিশ :</label>
                        <input type="text" class="form-control" placeholder="Guardian Name English">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="name">জন্ম তারিখ :</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="name">জন্ম নিবন্ধন নম্বর :</label>
                        <input type="number" class="form-control" placeholder="জন্ম নিবন্ধন নম্বর">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="name">জাতীয় পরিচয়পত্র নম্বর :</label>
                        <input type="number" class="form-control" placeholder="জাতীয় পরিচয়পত্র নম্বর">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="name">ফোন নম্বর :</label>
                        <input type="number" class="form-control" placeholder="ফোন নম্বর">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="name">শিক্ষার্থীর সাথে সম্পর্ক :</label>
                        <input type="text" class="form-control" placeholder="শিক্ষার্থীর সাথে সম্পর্ক">
                    </div>
                </div>
            </div>

            <div class="permanentAddress_info info_bar">
                <div class="info_title">স্থায়ী ঠিকানা :</div>
                <div class="row">
                    <div class="form-group col-6 col-md-3">
                        <input type="text" class="form-control" placeholder="বিভাগ">
                    </div>
                    <div class="form-group col-6 col-md-3">
                        <input type="text" class="form-control" placeholder="জেলা">
                    </div>
                    <div class="form-group col-6 col-md-3">
                        <input type="text" class="form-control" placeholder="উপজেলা">
                    </div>
                    <div class="form-group col-6 col-md-3">
                        <input type="text" class="form-control" placeholder="ডাকঘর">
                    </div>
                    <div class="form-group col-6 col-md-3">
                        <input type="text" class="form-control" placeholder="পোস্ট কোড">
                    </div>
                    <div class="form-group col-6 col-md-3">
                        <input type="text" class="form-control" placeholder="গ্রাম">
                    </div>
                </div>
            </div>

            <div class="presentAddress_info info_bar">
                <div class="info_title">বর্তমান ঠিকানা :</div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        স্থায়ী ঠিকানার অনুরূপ
                    </label>
                </div>
                <div class="row">
                    <div class="form-group col-6 col-md-3">
                        <input type="text" class="form-control" placeholder="বিভাগ">
                    </div>
                    <div class="form-group col-6 col-md-3">
                        <input type="text" class="form-control" placeholder="জেলা">
                    </div>
                    <div class="form-group col-6 col-md-3">
                        <input type="text" class="form-control" placeholder="উপজেলা">
                    </div>
                    <div class="form-group col-6 col-md-3">
                        <input type="text" class="form-control" placeholder="ডাকঘর">
                    </div>
                    <div class="form-group col-6 col-md-3">
                        <input type="text" class="form-control" placeholder="পোস্ট কোড">
                    </div>
                    <div class="form-group col-6 col-md-3">
                        <input type="text" class="form-control" placeholder="গ্রাম">
                    </div>
                </div>
            </div>

            <div class="additional_info info_bar">
                <div class="info_title">আনুষঙ্গিক তথ্য :</div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="name">জাতীয়তা :</label>
                        <input type="text" class="form-control" placeholder="জাতীয়তা">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="name">ধর্ম :</label>
                        <input type="text" class="form-control" placeholder="ধর্ম">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="name">শারীরিক অক্ষমতা :</label>
                        <input type="text" class="form-control" placeholder="শারীরিক অক্ষমতা">
                    </div>
                </div>
            </div>

            <div class="additional_info info_bar">
                <div class="info_title">ভর্তি সম্পর্কিত :</div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="name">ভর্তি ইচ্ছু শ্রেণীর নাম :</label>
                        <select class="form-control" id="sel1">
                            <option>প্রথম</option>
                            <option>দ্বিতীয় </option>
                            <option>তৃতীয় </option>
                            <option>চতুর্থ </option>
                        </select>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="name">পূর্বে অধ্যয়নরত শ্রেণীর নাম (প্রযোজ্য ক্ষেত্রে) :</label>
                        <select class="form-control" id="sel1">
                            <option>প্রথম</option>
                            <option>দ্বিতীয় </option>
                            <option>তৃতীয় </option>
                            <option>চতুর্থ </option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="name">প্রশংসা পত্র / ট্রান্সফার সার্টিফিকেট ছবি :</label>
                        <input type="file" class="form-control-file border" placeholder="প্রশংসা পত্র / ট্রান্সফার সার্টিফিকেট">
                    </div>
                    <div class="form-group" style="width: 160px; margin: 0px 15px;">
                        <label for="name">শিক্ষার্থীর ছবি :</label>
                        <div class="d-flex justify-content-center">
                            <img  class="action_field border border-secondary" id="preview_img" width="160px" height="170px" src="images/DummyProfile.jpg">
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control-file border" id="imgInp">
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
                <div class="mt-4 btn btn-success">Submit Form</div>
            </div>

        </div>

    </div>
</div>



@endsection
