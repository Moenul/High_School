
<div class="side_nav">

    <a href="{{ url('/admin') }}"><li class="side_nav_item"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></li></a>

    <a href=""><li class="side_nav_item"><i class="fas fa-volume-down"></i><span>Notice</span></li></a>
    <a href=""><li class="side_nav_item"><i class="fas fa-calendar-check"></i><span>Event</span></li></a>


    <a href=""><li class="side_nav_item"><i class="fas fa-camera-retro"></i><span>Gallery</span></li></a>
    <li class="side_nav_item"><i class="fas fa-users"></i><span>Students</span>
        <ul class="side_dropdown">
            <a href="">All Students</a>
            <a href="">Add Student</a>
        </ul>
    </li>


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
            <a href="">Donor Member</a>
            <a href="">Instructor</a>
        </ul>
    </li>

    <a href=""><li class="side_nav_item"><i class="fas fa-puzzle-piece"></i><span>Admission</span></li></a>
    <a href=""><li class="side_nav_item"><i class="fas fa-puzzle-piece"></i><span>Widget</span></li></a>
    <a href=""><li class="side_nav_item"><i class="fas fa-user"></i><span>Profile</span></li></a>

</div>

