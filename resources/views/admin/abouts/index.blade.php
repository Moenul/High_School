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
        <h3>Contact</h3>&nbsp;&nbsp;<span>Manage Contact Info</span>
        <a href=""><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

      <!-- start dashboard content -->

      <div class="row">

        <div class="col-1"></div>
        <div class="col-6">
            @if ($abouts)
                @foreach ($abouts as $about)

            <div class="mb-2 d-flex justify-content-center">
                <img class="action_field border border-secondary" width="150px" height="150px" src="{{ $about->photo ? $about->photo->file : '/images/Empty_Images.jpg' }}">
            </div>
            <div class="form-group">
                <label for=""><b>Institute Name:</b></label>
                <p>{{$about->institute_name}}</p>
            </div>
            <div class="form-group">
                <label for=""><b>Institute Description:</b></label>
                <p>{{$about->institute_desc}}</p>
            </div>
            <div class="form-group">
                <label for=""><b>Tagline:</b></label>
                <p>{{$about->tagline}}</p>
            </div>
            <div class="form-group">
                <label for=""><b>Terms & Condition:</b></label>
                <p>{{$about->terms_condition}}</p>
            </div>
            <div class="form-group">
                <label for=""><b>Privacy Policy:</b></label>
                <p>{{$about->privacy_policy}}</p>
            </div>


            <a class="btn btn-primary" href="{{ Route('admin.abouts.edit', $about->id) }}">Edit Abouts</a>
                @endforeach
            @endif
        </div>

    </div>


    <!-- end dashboard content -->

</div>


@endsection
