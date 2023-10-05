@extends('layouts.app')

@section('title')
    <title>Sarail Sadar High School | Policy</title>
@endsection

@section('navigation')
    @include('includes.navigation')
@endsection


@section('content')



<div class="post_section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 border">
                @if ($policys)
                <div class="list-group mt-3">
                    @foreach ($policys as $policy)
                        <a href="{{ action('InformationsController@index', ['name'=> $policy->slug]) }}"
                            class="list-group-item list-group-item-action
                            @if ($req_policy->id == $policy->id)
                                active
                            @endif
                            ">{{$policy->name}}</a>
                    @endforeach
                </div>
                @endif
            </div>
            <div class="col-md-8">
                <div class="container border p-2">
                    @if ($req_policy)
                        <p class="text-center">{!! $req_policy->name !!}</p>
                        <h3 class="text-center">{!! $req_policy->title !!}</h3>

                        @if ($req_policy->photo_id !== null)
                            <div class="mb-5 mt-3 d-flex justify-content-center">
                                <img class="border border-secondary" width="400px" height="auto"  src="{{ $req_policy->photo ? $req_policy->photo->file : '/images/Empty_Images.jpg' }}" alt="{{ $req_policy->name }}">
                            </div>
                        @endif

                        <div class="container mb-5 post_desc">
                            {!! $req_policy->desc !!}
                        </div>
                    @endif
                </div>
            </div>
        </div>

    </div>
</div>



@endsection

@section('footer')
    @include('includes.footer')
@endsection
