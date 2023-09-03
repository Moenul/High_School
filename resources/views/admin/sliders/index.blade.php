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
        <h3>Sliders</h3>&nbsp;&nbsp;<span>Manage Sliders Photo</span>
        <a href="{{ url('../') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

    <!-- start dashboard content -->
<div class="container">

    <div class="row">
        <div class="col-6">
            <table class="table table-dark table-hover mx-auto">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Action</th>
                    <th style="width:80px; text-align:center;">Delete</th>
                </tr>
                </thead>
                <tbody>

                @if ($sliders->count())

                    @foreach ($sliders as $slider)
                    <tr>
                        <td>
                            {{ $slider->id }}
                        </td>
                        <td>
                            <img class="action_field border border-secondary" width="130px" height="80px" src="{{ $slider->photo ? $slider->photo->file : '/images/Empty_Images_Landscape.jpg' }}">
                        </td>
                        <td>
                            @if ($slider->status == 1)
                                {!! Form::open(['method'=>'PATCH', 'action'=> ['AdminSlidersController@update', $slider->id]]) !!}
                                <input type="hidden" name="status" value="0">
                                <div class='form-group'>
                                {!! Form::submit('Off', ['class'=>'btn btn-sm font-weight-bold btn-warning']) !!}
                                </div>
                                {!! Form::close() !!}
                            @else
                                {!! Form::open(['method'=>'PATCH', 'action'=> ['AdminSlidersController@update', $slider->id]]) !!}
                                <input type="hidden" name="status" value="1">
                                <div class='form-group'>
                                {!! Form::submit('On', ['class'=>'btn btn-sm font-weight-bold btn-success']) !!}
                                </div>
                                {!! Form::close() !!}
                            @endif
                        </td>
                        <td>
                        {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminSlidersController@destroy', $slider->id]]) !!}
                            {{ Form::button('<i class="fas fa-trash-alt text-danger"></i>', ['type' => 'submit', 'class' => 'btn btn-lg'] )  }}
                        {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach

                @endif

                </tbody>

            </table>
        </div>
        <div class="col-1"></div>

        <div class="col-4">
            <h5 class="text-center text-success">Add New Image</h5>
            @if ($sliders->count() <= 4)

                {!! Form::open(['method'=>'POST', 'action'=>'AdminSlidersController@store', 'files'=>true]) !!}
                <div class="mb-2 d-flex justify-content-center">
                    <img class="action_field border border-secondary" id="preview_img" width="200px" height="120px"  src="{{ '/images/Empty_Images_Landscape.jpg' }}">
                </div>

                <div class="form-group">
                    {!! Form::label('photo_id', 'Image:') !!}
                    {!! Form::file('photo_id', ['id' => 'imgInp'], null) !!}
                </div>
                <input type="hidden" name="status" value="1">
                <div class="form-group">
                    {!! Form::submit('Upload Image', ['class'=>'btn btn-success']) !!}
                </div>

                {!! Form::close() !!}
            @endif
        </div>
    </div>


</div>

    <!-- start dashboard content -->

</div>


@endsection
