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
        <h3>Students</h3>&nbsp;&nbsp;<span>Manage Students</span>
        <a href="{{ url('../') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

    <!-- start dashboard content -->
<div class="container">

    <div>
        <table class="table table-dark table-hover mx-auto">
            <thead>
            <tr>
                <th>Photo</th>
                <th>Name</th>
                <th>Name in English</th>
                <th>Class</th>
                <th>Roll</th>
                <th>Gender</th>
                <th>Birth Certificate</th>
                <th>DOB</th>
                <th>View</th>
            </tr>
            </thead>

            <tbody>
                @foreach ($students as $student)
                <tr>
                    <td>
                        <img class="action_field border border-secondary" width="60px" height="62px" src="{{ $student->photo ? $student->photo->file : '/images/DummyProfile.jpg' }}">
                    </td>
                    <td>{{$student->student_name}}</td>
                    <td>{{$student->student_name_en}}</td>
                    <td>{{$student->class->name}}</td>
                    <td>{{$student->student_roll}}</td>
                    <td>{{$student->student_gender}}</td>
                    <td>{{$student->student_birth_reg}}</td>
                    <td>{{ \Carbon\Carbon::parse($student->student_DOB)->format('d M Y') }}</td>

                    <td><a href="{{ Route('admin.students.show', $student->id) }}" class="btn btn-primary">Show</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>


    <!-- start dashboard content -->

</div>


@endsection
