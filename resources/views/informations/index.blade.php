@extends('layouts.app')

@section('navigation')
    @include('includes.navigation')
@endsection


@section('content')



<div class="admission_section">
    <div class="container">
        @if ($policys)
            @foreach ($policys as $policy)
            <p class="text-center">{!! $policy->name !!}</p>
            <h3 class="text-center">{!! $policy->title !!}</h3>

            @if ($policy->photo_id !== null)
                <div class="mb-5 mt-3 d-flex justify-content-center">
                    <img class="border border-secondary" width="400px" height="auto"  src="{{ $policy->photo ? $policy->photo->file : '/images/Empty_Images.jpg' }}">
                </div>
            @endif

            <div class="container mb-5">
                {!! $policy->desc !!}
            </div>

            @endforeach
        @endif



    </div>
</div>



@endsection

@section('footer')
    @include('includes.footer')
@endsection
