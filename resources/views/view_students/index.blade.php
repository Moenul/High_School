@extends('layouts.app')

@section('navigation')
    @include('includes.navigation')
@endsection


@section('content')



<div class="admission_section">
    <div class="container">
        <h1>শিক্ষার্থী তথ্য</h1>
        <div class="row">
            <div class="col-md-3 border">
                <h5 class="text-center p-2">শ্রেণী নির্বাচন করুন :-</h5>
                @if ($classes)
                <div class="list-group">
                    @foreach ($classes as $class)

                        <a href="{{ action('StudentsController@index', ['class'=> $class->slug]) }}"
                            class="list-group-item list-group-item-action
                            @if ($req_class->id == $class->id)
                                active
                            @endif
                            ">{{$class->name}}</a>
                    @endforeach
                </div>
                @endif
            </div>
            <div class="col-md-9">
                <div class="container border p-2">
                    @if ($students)
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6 text-center mb-2">
                            <span class="d-block"><b>শিক্ষার্থী সংখ্যা :</b> {{$students->count()}} জন</span>
                            <span class="d-block"><b>ছাত্র সংখ্যা :</b> {{$students->where('student_gender','=','ছেলে')->count()}} জন</span>
                            <span class="d-block"><b>ছাত্রী সংখ্যা :</b> {{$students->where('student_gender','=','মেয়ে')->count()}} জন</span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <table class="table table-sm">
                                <thead>
                                <tr>
                                    <th scope="col">রোল</th>
                                    <th scope="col">নাম</th>
                                    <th scope="col">লিঙ্গ</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                        <tr>
                                            <th scope="row">{!! $student->student_roll !!}</th>
                                            <td>{!! $student->student_name !!}</td>
                                            <td>({!! $student->student_gender !!})</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>

    </div>
</div>



@endsection
