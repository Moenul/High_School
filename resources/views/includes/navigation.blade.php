
<!-- /* /////  Top Nav Section Start ------------------- */ -->
<div class="top_nav">
	<div class="container">
        @if ($contact)
            <li><a href="{{$contact->youtube_link}}" aria-label="Touch us on Youtube"><i style="color:#FF0000" class="fa-brands fa-youtube"></i></a></li>
            <li><a href="{{$contact->whatsapp_link}}" aria-label="Touch us on Whatsapp"><i style="color:#25D366" class="fa-brands fa-whatsapp"></i></a></li>
            <li><a href="{{$contact->facebook_link}}" aria-label="Touch us on Facebook"><i style="color:#4267B2" class="fa-brands fa-facebook-f"></i></a></li>

            <li><i class="fa-solid fa-location-dot"></i> <a href="{{$contact->address_link}}" target="_blank" aria-label="Touch us on Google Map">{{$contact->address}}</a></li>
            <li><i class="fa-solid fa-phone-flip"></i> <a href="tel:+880{{$contact->phone_1}}">+88 0{{$contact->phone_1}}</a></li>
        @endif
    </div>
</div>
<!-- /* /////  Top Nav Section End ------------------- */ -->

<!-- /* /////  Middle Nav Section Start ------------------- */ -->
<div class="middle_nav" title="Sarail Sadar High School (SSHS) Announcement">
    <div class="marquee_title">বিজ্ঞপ্তিঃ </div>
	<marquee scrollamount="8" loop="infinite">
        @if ($about)
            {{ $about->announce }}
        @endif
    </marquee>
</div>
<!-- /* /////  Middle Nav Section End ------------------- */ -->


<!-- /* /////  Nav_Bar Section Start ------------------- */ -->
<div class="nav_bar">
	<div class="container">
		<div class="nav_brand">
            @if ($about)
            <a href="/">
                <img src="{{ $about->photo ? $about->photo->file : '/images/Empty_Images.jpg' }}" alt="Sarail Sadar High School (SSHS) Logo">
            </a>
            @endif

        </div>
		<div class="nav_list">
			<ul>
				<a href="{{ url('/admission') }}"><li style="background: #7ad2fe;">ভর্তি আবেদন</li></a>
                <a href="/#contact"><li>যোগাযোগ</li></a>
                <a href="{{ route('view_events.index') }}"><li>ইভেন্ট</li></a>
                <li>একাডেমিক <i class="fa-solid fa-angle-down"></i>
					<div class="nav_dropdown">
						<ul>
							<a href="{{ route('schedules.index') }}">ক্লাস রুটিন</a>
							<a href="{{ route('view_students.index') }}">শিক্ষার্থী তথ্য</a>
							<a href="/">পরীক্ষার রেজাল্ট</a>
							<a href="/">লাইব্রেরি</a>
						</ul>
					</div>
				</li>
				<li>সমন্ধে <i class="fa-solid fa-angle-down"></i>
					<div class="nav_dropdown">
						<ul>
							<a href="#about_us">আমাদের সমন্ধে</a>
							<a href="#instructor">শিক্ষক ও কর্মচারীবৃন্দ</a>
							<a href="#school_committee">ম্যানেজিং কমিটি </a>
						</ul>
					</div>
				</li>

				<a href="/"><li>হোম</li></a>
			</ul>
		</div>

		<div class="nav_button">
			<div class="button_bar button_bar_1"></div>
			<div class="button_bar button_bar_2"></div>
		</div>
	</div>
</div>
<!-- /* /////  Nav_Bar Section End ------------------- */ -->
