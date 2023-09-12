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
    <div class="col-2"></div>
    <div class="col-8">
        <table class="table table-dark table-hover mx-auto">
            <thead>
            <tr>
                <th>Image</th>
                <th style="width:80px; text-align:center;">Delete</th>
            </tr>
            </thead>
            <tbody>

            @if ($galleries->count())

                @foreach ($galleries as $gallery)
                <tr>
                    <td>
                        <img class="action_field border border-secondary" width="180px" height="120px" src="{{ $gallery->photo ? $gallery->photo->file : '/images/Empty_Images.jpg' }}">
                    </td>
                    <td>
                    {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminGalleriesController@destroy', $gallery->id]]) !!}
                        {{ Form::button('<i class="fas fa-trash-alt text-danger"></i>', ['type' => 'submit', 'class' => 'btn btn-lg'] )  }}
                    {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach

            @endif

            </tbody>

            @if ($galleries->count() <= 4)

            <tr>
                <td colspan="2">
                {!! Form::open(['method'=>'POST', 'action'=>'AdminGalleriesController@store', 'files'=>true]) !!}
                <div class="mb-2 d-flex justify-content-center">
                    <img class="action_field border border-secondary" id="preview_img" width="140px" height="100px"  src="{{ '/images/Empty_Images_Landscape.jpg' }}">

                    <div class="form-group">
                        {!! Form::label('photo_id', 'Image:') !!}
                        {!! Form::file('photo_id', ['class'=>'form-file-control  border', 'id' => 'imgInp', 'required'=>'required'], null) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Upload Image', ['class'=>'btn btn-success  float-right']) !!}
                    </div>
                </div>

                {!! Form::close() !!}
                </td>
            </tr>
            @else

            <tr>
                <td colspan="2">
                    <p class="text-warning text-center"> Image upload limit is over, delete previous image to upload new image. </p>
                </td>
            </tr>

            @endif

        </table>


    </div>
    </div>




</div>

    <!-- start dashboard content -->

</div>


@endsection
