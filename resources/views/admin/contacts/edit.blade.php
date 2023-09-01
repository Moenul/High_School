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

    @if ($contact)


        {!! Form::model($contact, ['method'=>'PATCH', 'action'=> ['AdminContactsController@update', $contact->id], 'files'=>true]) !!}
        <div class="row">

            <div class="form-group col-3">
                {!! Form::label('phone_1','Phone Number:') !!}
                {!! Form::text('phone_1', $contact->phone_1, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group col-3">
                {!! Form::label('phone_2','Second Phone Number:') !!}
                {!! Form::text('phone_2', $contact->phone_2, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group col-3">
                {!! Form::label('facebook_link','Facebook Link:') !!}
                {!! Form::text('facebook_link', $contact->facebook_link, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group col-3">
                {!! Form::label('whatsapp_link','Whatsapp Link:') !!}
                {!! Form::text('whatsapp_link', $contact->whatsapp_link, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group col-3">
                {!! Form::label('youtube_link','Youtube Link:') !!}
                {!! Form::text('youtube_link', $contact->youtube_link, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group col-3">
                {!! Form::label('address','Address:') !!}
                {!! Form::text('address', $contact->address, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group col-3">
                {!! Form::label('address_link','Address Link:') !!}
                {!! Form::text('address_link', $contact->address_link, ['class'=>'form-control']) !!}
            </div>

        </div>

        <div class="form-group">
            {!! Form::submit('Update Contacts', ['class'=>'btn btn-primary float-right']) !!}
        </div>

        {!! Form::close() !!}


    @endif

    </div>
    <!-- end dashboard content -->

</div>


@endsection
