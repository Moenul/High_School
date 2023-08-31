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
        <h3>Welcome</h3>&nbsp;&nbsp;<span>Sub Heading</span>
        <a href=""><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

    <!-- start dashboard content -->

        <a href="">
        <div class="panel post_panel">
            <div class="panel_icon"><i class="fas fa-file-alt"></i></div>
            <div class="panel_content">
                <h5>CPU trafic</h5>
                <span>45</span>
            </div>
        </div>
        </a>

        <a href="">
        <div class="panel user_panel">
            <div class="panel_icon"><i class="fas fa-users"></i></div>
            <div class="panel_content">
                <h5>CPU trafic</h5>
                <span>45</span>
            </div>
        </div>
        </a>

        <a href="">
        <div class="panel comment_panel">
            <div class="panel_icon"><i class="far fa-comments"></i></div>
            <div class="panel_content">
                <h5>CPU trafic</h5>
                <span>45</span>
            </div>
        </div>
        </a>

        <a href="">
        <div class="panel category_panel">
            <div class="panel_icon"><i class="far fa-list-alt"></i></div>
            <div class="panel_content">
                <h5>CPU trafic</h5>
                <span>45</span>
            </div>
        </div>
        </a>

    <!-- end dashboard content -->
</div>


@endsection
