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
        <h3>Speach</h3>&nbsp;&nbsp;<span>Manage Speach</span>
        <a href="{{ url('../') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

 <!-- start dashboard content -->

 <div class="row">
    @if ($speach)

    <div class="col-12">
        {!! Form::model($speach, ['method'=>'PATCH', 'action'=> ['AdminSpeachsController@update', $speach->id], 'files'=>true]) !!}
        <div class="form-group">
            <label for="person_type">Person Type :</label>
            {!! Form::select('person_type', [$speach->person_type => $speach->person_type,'Institute Head' => 'Institute Head', 'President' => 'President'], null, ['class' => 'form-control', 'required'=>'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('name','Person Name:') !!}
            {!! Form::text('name', $speach->name, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('title','Person title:') !!}
            {!! Form::text('title', $speach->title, ['class'=>'form-control']) !!}
        </div>

        <div class="mb-2 d-flex justify-content-center">
            <img class="action_field border border-secondary" id="preview_img" width="150px" height="150px" src="{{ $speach->photo ? $speach->photo->file : '/images/Empty_Images.jpg' }}">
        </div>
        <div class="form-group">
            {!! Form::label('photo_id', 'Image:') !!}
            {!! Form::file('photo_id', ['id' => 'imgInp'], null) !!}
        </div>

        <div class="form-group">
            {!! Form::label('desc','Write Speach:') !!}
            {!! Form::textarea('desc', $speach->desc, ['class'=>'form-control  ckeditor','rows'=>5]) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Update Speach', ['class'=>'btn btn-primary float-right']) !!}
        </div>

        {!! Form::close() !!}
    </div>

    @endif
</div>


<!-- end dashboard content -->


</div>


@endsection

@section('script')

<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>


@endsection
