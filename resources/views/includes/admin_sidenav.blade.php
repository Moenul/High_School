
<div class="side_nav">

    <a href="{{ url('/admin') }}"><li class="side_nav_item"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></li></a>

    <a href="{{ route('admin.announce.index') }}"><li class="side_nav_item"><i class="fas fa-volume-down"></i><span>Announcement</span></li></a>
    <a href="{{ route('admin.admissions.index') }}"><li class="side_nav_item"><i class="fas fa-file-invoice"></i><span>Admission</span></li></a>

    <li class="side_nav_item"><i class="fas fa-school"></i><span>Academic <iconify-icon icon="raphael:arrowdown"></iconify-icon></span>
        <ul class="side_dropdown">
            <a href="{{ route('admin.students.index') }}">All Students</a>
            <a href="{{ route('admin.classes.index') }}">Classes</a>
            <a href="{{ route('admin.sections.index') }}">Section</a>
            <a href="{{ route('admin.routines.index') }}">Class Routines</a>
            <a href="{{ route('admin.studentCosts.index') }}">Student Fee's</a>
        </ul>
    </li>

    <a href="{{ route('admin.notices.index') }}"><li class="side_nav_item"><i class="fas fa-scroll"></i><span>Notice</span></li></a>
    <a href="{{ route('admin.events.index') }}"><li class="side_nav_item"><i class="fas fa-calendar-check"></i><span>Event</span></li></a>
    <a href="{{ route('admin.sliders.index') }}"><li class="side_nav_item"><i class="fas fa-camera-retro"></i><span>Slider</span></li></a>
    <a href="{{ route('admin.galleries.index') }}"><li class="side_nav_item"><i class="fas fa-image"></i><span>Gallery</span></li></a>
    <a href="{{ route('admin.mails.index') }}"><li class="side_nav_item"><i class="fas fa-envelope"></i><span>Mails</span></li></a>

    <li class="side_nav_item"><i class="fas fa-puzzle-piece"></i><span>Widget <iconify-icon icon="raphael:arrowdown"></iconify-icon></span>
        <ul class="side_dropdown">
            <a href="{{ route('admin.instructors.index') }}">Instructor</a>
            <a href="{{ route('admin.members.index') }}">Member</a>
            <a href="{{ route('admin.speaches.index') }}">Speach</a>
            <a href="{{ route('admin.contacts.index') }}">Contact Info</a>
            <a href="{{ route('admin.abouts.index') }}">About</a>
            <a href="{{ route('admin.policys.index') }}">Policy</a>
        </ul>
    </li>

    {{-- <a href="{{ route('admin.abouts.index') }}"><li class="side_nav_item"><i class="fas fa-info-circle"></i><span>About</span></li></a>
    <a href="{{ route('admin.policys.index') }}"><li class="side_nav_item"><i class="fas fa-shield-alt"></i><span>Policy</span></li></a> --}}



    {{-- <a href=""><li class="side_nav_item"><i class="fas fa-user-cog"></i><span>Users</span></li></a> --}}
    {{-- <a href=""><li class="side_nav_item"><i class="fas fa-puzzle-piece"></i><span>Widget</span></li></a> --}}
    {{-- <a href=""><li class="side_nav_item"><i class="fas fa-user"></i><span>Profile</span></li></a> --}}

</div>

