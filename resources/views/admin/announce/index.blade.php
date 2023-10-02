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
        <h3>Announcement</h3>&nbsp;&nbsp;<span>Manage Announcement</span>
        <a href="{{ url('../') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

    <!-- start dashboard content -->
<div class="container">

    <div class="container">
        <div class="row">
            <div class="col-2"></div>

            @if ($about)
            <div class="col-8">
                {!! Form::model($about, ['method'=>'PATCH', 'action'=> ['AdminAnnounceController@update', $about->id], 'files'=>true]) !!}
                <div class="form-group">
                    {!! Form::label('announce','Write Announcement:') !!}
                    {!! Form::textarea('announce', $about->announce, ['class'=>'form-control', 'rows'=>2]) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Update Announcement', ['class'=>'btn btn-primary float-right']) !!}
                </div>
                {!! Form::close() !!}
            </div>
            @endif
        </div>
    </div>


</div>

    <!-- start dashboard content -->

</div>


@endsection
