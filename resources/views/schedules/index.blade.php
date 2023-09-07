@extends('layouts.app')

@section('navigation')
    @include('includes.navigation')
@endsection


@section('content')



<div class="admission_section">
    <div class="container">
        <h1>ক্লাস রুটিন</h1>
        <div class="container mb-5">
            <div class="row">
                <h5>শ্রেণী নির্বাচন করুন :-</h5>
                @if ($classes)
                    @foreach ($classes as $class)
                    <a href="{{ action('SchedulesController@index', ['class_id'=> $class->id]) }}" class="btn btn-info m-1">{{$class->name}}</a>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="container">
            @if ($schedule)
                @foreach ($schedule as $routine)
                {!! $routine->routine !!}
                @endforeach
            @endif

        </div>

    </div>
</div>



@endsection
