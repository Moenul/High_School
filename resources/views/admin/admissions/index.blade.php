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
        <h3>Admissions</h3>&nbsp;&nbsp;<span>Manage Admissions</span>
        <a href="{{ url('../') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

    <!-- start dashboard content -->
<div class="container">

    <div class="row">
    <div class="col-12">
        @if ($admissions->count())
        <table class="table table-dark table-hover mx-auto">
            <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Student Name</th>
                <th>DOB</th>
                <th>Class</th>
                <th>Status</th>
                <th>Form</th>
                <th>View</th>
            </tr>
            </thead>

            <tbody>
                @foreach ($admissions as $admission)
                <tr>
                    <td>{{$admission->id}}</td>
                    <td>
                        <img class="action_field border border-secondary" width="60px" height="62px" src="{{ $admission->photo ? $admission->photo->file : '/images/DummyProfile.jpg' }}">
                    </td>
                    <td>{{$admission->student_name}}</td>
                    <td>{{ \Carbon\Carbon::parse($admission->student_DOB)->format('d M Y') }}</td>
                    <td>{{$admission->admission_class}}</td>
                    <td>
                        @if ($admission->status == 2)
                        <b class="text-center text-success">Approved</b>
                        @else
                        <b class="text-center text-warning">Not Approved</b>
                        @endif
                    </td>
                    <td><a href="{{ Route('admission.show', $admission->id) }}">View Form</a></td>
                    <td><a href="{{ Route('admin.admissions.show', $admission->id) }}">Show</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $admissions->links() !!}
        @endif


    </div>

    </div>


</div>

    <!-- start dashboard content -->

</div>


@endsection
