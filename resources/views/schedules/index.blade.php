@extends('layouts.app')

@section('navigation')
    @include('includes.navigation')
@endsection


@section('content')



<div class="schedule_section">
    <div class="container">
        <h1 class="mb-5">ক্লাস রুটিন</h1>
        <div class="row">
            <div class="col-md-3 border mb-3">
                <h5 class="text-center p-2">শ্রেণী নির্বাচন করুন :-</h5>
                @if ($classes)
                <div class="list-group mb-3">
                    @foreach ($classes as $class)

                        <a href="{{ action('SchedulesController@index', ['class'=> $class->slug]) }}"
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
                <div class="container shedule_box border p-2">
                    @if ($schedule)
                        @foreach ($schedule as $routine)
                        {!! $routine->routine !!}
                        @endforeach
                    @endif
                </div>
            </div>
        </div>

    </div>
</div>



@endsection
