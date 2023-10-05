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
        <h3>Gallery</h3>&nbsp;&nbsp;<span>Manage Gallery Photo</span>
        <a href="{{ url('../') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

    <!-- start dashboard content -->
<div class="container">




    <div class="row">

        <div class="col-7">
            <table class="table table-dark table-hover mx-auto">
                <thead>
                <tr>
                    <th style="width:40px; text-align:center;">ID</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th style="width:80px; text-align:center;">Edit</th>
                    <th style="width:80px; text-align:center;">Delete</th>
                </tr>
                </thead>
                @if ($galleries)
                <tbody>
                    @foreach ($galleries as $gallery)
                    <tr>
                        <td style="width:40px; text-align:center;">{{$gallery->id}}</td>
                        <td>
                            <div style="width: 180px; height: 180px; overflow: hidden; margin:0 auto; position: relative; display: flex;" class="border border-secondary">
                                <img width="auto" src="{{ $gallery->photo ? $gallery->photo->file : '/images/Empty_Images.jpg' }}">
                            </div>
                        </td>
                        <td>{{$gallery->desc}}</td>
                        <td style="width:80px; text-align:center; font-size: 20px;"><a href="{{ Route('admin.galleries.edit', $gallery->id) }}"><i class="far fa-edit text-warning"></i></a></td>
                        <td>
                        {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminGalleriesController@destroy', $gallery->id]]) !!}
                            {{ Form::button('<i class="fas fa-trash-alt text-danger"></i>', ['type' => 'submit', 'class' => 'btn'] )  }}
                        {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                @endif
             </table>
        </div>


        <div class="col-5">
            <h5 class="text-center text-success">Add New Gallery</h5>
            {!! Form::open(['method'=>'POST', 'action'=>'AdminGalleriesController@store', 'files'=>true]) !!}
            <div style="width: 180px; height: 180px; overflow: hidden; margin:0 auto; position: relative; display: flex;" class="border border-secondary">
                <img class="action_field" width="auto" id="preview_img" src="{{ '/images/Empty_Images.jpg' }}">
            </div>
            <div class="form-group">
                <small class="form-text text-muted">Image Aspect Ratio 1:1</small>
                {!! Form::label('photo_id', 'Image:') !!}
                {!! Form::file('photo_id', ['id' => 'imgInp'], null) !!}
            </div>
            <div class="form-group">
                {!! Form::label('desc','Gallery Description:') !!}
                {!! Form::text('desc', null, ['class'=>'form-control', 'placeholder'=>'Describe Image for SEO']) !!}
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
