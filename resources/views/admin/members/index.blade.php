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
        <h3>Member</h3>&nbsp;&nbsp;<span>Manage Mambers</span>
        <a href="{{ url('../') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

    <!-- start dashboard content -->
<div class="container">

    <div class="row">
    <div class="col-8">
        <table class="table table-dark table-hover mx-auto">
            <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Title</th>
                <th>Edit</th>
                <th style="width:80px; text-align:center;">Delete</th>
            </tr>
            </thead>
            <tbody>

            @if ($members->count())

                @foreach ($members as $member)
                <tr>
                    <td>{{$member->id}}</td>
                    <td>
                        <img class="action_field border border-secondary" width="60px" height="62px" src="{{ $member->photo ? $member->photo->file : '/images/DummyProfile.jpg' }}">
                    </td>
                    <td>{{$member->name}}</td>
                    <td>{{$member->title}}</td>
                    <td style="width:80px; text-align:center; font-size: 20px;"><a href="{{ Route('admin.members.edit', $member->id) }}"><i class="far fa-edit text-warning"></i></a></td>
                    <td>
                    {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminMembersController@destroy', $member->id]]) !!}
                        {{ Form::button('<i class="fas fa-trash-alt text-danger"></i>', ['type' => 'submit', 'class' => 'btn btn-lg'] )  }}
                    {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach

            @endif

            </tbody>
        </table>

    </div>

    <div class="col-4">
        {!! Form::open(['method'=>'POST', 'action'=>'AdminMembersController@store', 'files'=>true]) !!}
        <div class="mb-2 d-flex justify-content-center">
            <img class="action_field border border-secondary" id="preview_img" width="100px" height="108px"  src="{{ '/images/DummyProfile.jpg' }}">
        </div>
        <div class="form-group">
            {!! Form::label('photo_id', 'Image:') !!}
            {!! Form::file('photo_id', ['id' => 'imgInp'], null) !!}
        </div>
        <div class="form-group">
            {!! Form::label('name','Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('title','Title:') !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Submit', ['class'=>'btn btn-success  float-right']) !!}
        </div>

        {!! Form::close() !!}
    </div>

    </div>


</div>

    <!-- start dashboard content -->

</div>


@endsection
