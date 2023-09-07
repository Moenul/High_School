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
        <a href="{{ url('../') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

    <!-- start dashboard content -->

        <a href="{{ route('admin.students.index') }}">
        <div class="panel user_panel">
            <div class="panel_icon"><i class="fas fa-user-graduate"></i></div>
            <div class="panel_content">
                <h5>Total Students</h5>
                <span>
                    {{App\Models\Student::count()}}
                </span>
            </div>
        </div>
        </a>

        <a href="{{ route('admin.events.index') }}">
        <div class="panel post_panel">
            <div class="panel_icon"><i class="fas fa-calendar-check"></i></div>
            <div class="panel_content">
                <h5>Total Event</h5>
                <span>{{App\Models\Event::count()}}</span>
            </div>
        </div>
        </a>

        <a href="{{ route('admin.notices.index') }}">
        <div class="panel comment_panel">
            <div class="panel_icon"><i class="fas fa-volume-down"></i></div>
            <div class="panel_content">
                <h5>Total Notice</h5>
                <span>{{App\Models\Notice::count()}}</span>
            </div>
        </div>
        </a>

        <a href="{{ route('admin.instructors.index') }}">
        <div class="panel category_panel">
            <div class="panel_icon"><i class="fas fa-chalkboard-teacher"></i></div>
            <div class="panel_content">
                <h5>Total Instructor</h5>
                <span>{{App\Models\Instructor::count()}}</span>
            </div>
        </div>
        </a>

    <!-- end dashboard content -->
</div>


@endsection
