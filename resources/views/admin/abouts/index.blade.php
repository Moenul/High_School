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
        <h3>About</h3>&nbsp;&nbsp;<span>Manage About Info</span>
        <a href="{{ url('../') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

      <!-- start dashboard content -->

      <div class="row">

        <div class="col-1"></div>
        <div class="col-8">
            @if ($abouts)
                @foreach ($abouts as $about)

            <div class="form-group">
                <label for=""><b>Institute Name:</b></label>
                <h4>{{$about->institute_name}}</h4>
            </div>
            <div class="form-group">
                <label for=""><b>Tagline:</b></label>
                <h5>{{$about->tagline}}</h5>
            </div>

            <div class="form-group">
                <label for=""><b>Institute Description:</b></label>
                <p>{{$about->institute_desc}}</p>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for=""><b>Logo :</b></label><br>
                    <img class="action_field border border-secondary" width="150px" height="150px" src="{{ $about->photo ? $about->photo->file : '/images/Empty_Images.jpg' }}">
                </div>
                <div class="col-6">
                    <label for=""><b>Cover :</b></label><br>
                    <img width="140px" height="150px" src="{{ $about->cover ? $about->cover->file : '/images/Empty_Images.jpg' }}">
                </div>
            </div>

            <a href="./" class="btn btn-warning mt-5">Cancel</a>
            <a class="btn btn-primary mt-5 float-right" href="{{ Route('admin.abouts.edit', $about->id) }}">Edit About Informations</a>
                @endforeach
            @endif
        </div>

    </div>


    <!-- end dashboard content -->

</div>


@endsection
