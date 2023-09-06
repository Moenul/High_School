
<div class="side_nav">

    <a href="{{ url('/admin') }}"><li class="side_nav_item"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></li></a>

    <a href="{{ route('admin.admissions.index') }}"><li class="side_nav_item"><i class="fas fa-file-invoice"></i><span>Admission</span></li></a>
    <li class="side_nav_item"><i class="fas fa-user-graduate"></i><span>Students</span>
        <ul class="side_dropdown">
            <a href="">All Students</a>
            <a href="">Add Student</a>
        </ul>
    </li>

    <a href="{{ route('admin.notices.index') }}"><li class="side_nav_item"><i class="fas fa-volume-down"></i><span>Notice</span></li></a>
    <a href="{{ route('admin.events.index') }}"><li class="side_nav_item"><i class="fas fa-calendar-check"></i><span>Event</span></li></a>




    <a href="{{ route('admin.sliders.index') }}"><li class="side_nav_item"><i class="fas fa-camera-retro"></i><span>Slider</span></li></a>
    <a href="{{ route('admin.galleries.index') }}"><li class="side_nav_item"><i class="fas fa-image"></i><span>Gallery</span></li></a>

    <a href="{{ route('admin.contacts.index') }}"><li class="side_nav_item"><i class="fas fa-address-book"></i><span>Contact Info</span></li></a>

    {{-- <li class="side_nav_item"><i class="fas fa-address-book"></i><span>Contact Info</span>
        <div class="side_dropdown">
            <a href="">Phone Number</a>
            <a href="">Social Link</a>
            <a href="">Map Location</a>
        </div>
    </li> --}}

    <a href="{{ route('admin.abouts.index') }}"><li class="side_nav_item"><i class="fas fa-info-circle"></i><span>About</span></li></a>

    <li class="side_nav_item"><i class="fas fa-school"></i><span>Academic</span>
        <ul class="side_dropdown">
            <a href="{{ route('admin.members.index') }}">Donor Member</a>
            <a href="{{ route('admin.instructors.index') }}">Instructor</a>
        </ul>
    </li>

    <a href=""><li class="side_nav_item"><i class="fas fa-user-cog"></i><span>Users</span></li></a>
    <a href=""><li class="side_nav_item"><i class="fas fa-puzzle-piece"></i><span>Widget</span></li></a>
    <a href=""><li class="side_nav_item"><i class="fas fa-user"></i><span>Profile</span></li></a>

</div>

