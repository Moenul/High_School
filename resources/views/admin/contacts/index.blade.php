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
<div class="container">

    @if ($contacts)
        @foreach ($contacts as $contact)

        <div class="row">
            <div class="form-group col-3">
                <label for=""><b>Phone Number:</b></label>
                <p>{{$contact->phone_1}}</p>
            </div>
            <div class="form-group col-3">
                <label for=""><b>Second Phone Number:</b></label>
                <p>{{$contact->phone_2}}</p>
            </div>
            <div class="form-group col-3">
                <label for=""><b>Facebook:</b></label>
                <p>{{$contact->facebook_link}}</p>
            </div>
            <div class="form-group col-3">
                <label for=""><b>Whatsapp:</b></label>
                <p>{{$contact->whatsapp_link}}</p>
            </div>
            <div class="form-group col-3">
                <label for=""><b>Youtube:</b></label>
                <p>{{$contact->youtube_link}}</p>
            </div>
            <div class="form-group col-3">
                <label for=""><b>Address:</b></label>
                <p>{{$contact->address}}</p>
            </div>
            <div class="form-group col-3">
                <label for=""><b>Address Link:</b></label>
                <p>{{$contact->address_link}}</p>
            </div>
        </div>

        <a class="btn btn-primary" href="{{ Route('admin.contacts.edit', $contact->id) }}">Edit Contacts</a>

        @endforeach
    @endif

</div>

    <!-- start dashboard content -->

</div>


@endsection
