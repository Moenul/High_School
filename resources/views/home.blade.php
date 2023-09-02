@extends('layouts.app')

@section('navigation')
    @include('includes.navigation')
@endsection

@section('header_content')

<div class="header_section">
	<div class="header_slider">
		<div class="slider" id="slider">
			<div class="slider_image"style="background-image: url('images/CoverPhoto1.jpg');"></div>
			<div class="slider_image"style="background-image: url('images/CoverPhoto2.png');"></div>
			<div class="slider_image"style="background-image: url('images/CoverPhoto3.jpg');"></div>
		</div>
	</div>
	<div class="container">
		<p>ٱقْرَأْ بِٱسْمِ رَبِّكَ ٱلَّذِى خَلَقَ</p>
	</div>
</div>

@endsection


@section('content')


<div class="updates_section">
	<div class="container">
		<div class="notice_section">
			<div class="section_title">নোটিশ</div>
			<div class="section_bar">
				<!-- notice bar -->
				<div class="notice_bar">
					<div class="image_box"><iconify-icon icon="bxs:file-pdf"></iconify-icon></div>
					<div class="notice_box">
						<div class="notice_title">ইবতেদায়ী ২য় শ্রেণির পরীক্ষার ফলাফল প্রকাশ সংক্রান্ত বিজ্ঞপ্তি </div>
						<div class="notice_date">29 Jun 2023</div>
						<div class="notice_download"><a href="">Download</a></div>
					</div>
				</div>
				<!-- notice bar -->

				<!-- notice bar -->
				<div class="notice_bar">
					<div class="image_box"><iconify-icon icon="bxs:file-pdf"></iconify-icon></div>
					<div class="notice_box">
						<div class="notice_title">ইবতেদায়ী ২য় শ্রেণির পরীক্ষার ফলাফল প্রকাশ সংক্রান্ত বিজ্ঞপ্তি </div>
						<div class="notice_date">29 Jun 2023</div>
						<div class="notice_download"><a href="">Download</a></div>
					</div>
				</div>
				<!-- notice bar -->

				<!-- notice bar -->
				<div class="notice_bar">
					<div class="image_box"><iconify-icon icon="bxs:file-pdf"></iconify-icon></div>
					<div class="notice_box">
						<div class="notice_title">ইবতেদায়ী ২য় শ্রেণির পরীক্ষার ফলাফল প্রকাশ সংক্রান্ত বিজ্ঞপ্তি </div>
						<div class="notice_date">29 Jun 2023</div>
						<div class="notice_download"><a href="">Download</a></div>
					</div>
				</div>
				<!-- notice bar -->

				<!-- notice bar -->
				<div class="notice_bar">
					<div class="image_box"><iconify-icon icon="bxs:file-pdf"></iconify-icon></div>
					<div class="notice_box">
						<div class="notice_title">ইবতেদায়ী ২য় শ্রেণির পরীক্ষার ফলাফল প্রকাশ সংক্রান্ত বিজ্ঞপ্তি </div>
						<div class="notice_date">29 Jun 2023</div>
						<div class="notice_download"><a href="">Download</a></div>
					</div>
				</div>
				<!-- notice bar -->


				<div class="load_more"><a href="">Load More ...</a></div>
			</div>
		</div>
		<div class="event_section">
			<div class="section_title">ইভেন্ট</div>
			<div class="section_bar">

                @if ($events->count())

                    @foreach ($events as $event)

                        @if (\Carbon\Carbon::today() <= $event->date )

                        <!-- event bar -->
                        <div class="event_bar">
                            <div class="event_date">
                                <div class="event_date_dot"></div>
                                <div class="event_date_dot"></div>
                                <div class="date_day">{{ \Carbon\Carbon::parse($event->date)->format('d') }}</div>
                                <div class="date_month">{{ \Carbon\Carbon::parse($event->date)->format('M') }}</div>
                                <div class="date_year">{{ \Carbon\Carbon::parse($event->date)->format('Y') }}</div>
                            </div>
                            <div class="event_box">
                                <div class="event_title">{{$event->title}}</div>
                                <div class="event_desc">{{$event->desc}}</div>
                                <div class="event_time">{{$event->time}}</div>
                            </div>
                        </div>
                        <!-- event bar -->

                        @endif

                    @endforeach

                    <div class="previous_event">
                        পূর্ববর্তী
                    </div>

                    @foreach ($events as $event)

                        @if (\Carbon\Carbon::today() >= $event->date )

                         <!-- previous event bar -->
                         <div class="event_bar previous_event_bar">
                            <div class="event_date">
                                <div class="event_date_dot"></div>
                                <div class="event_date_dot"></div>
                                <div class="date_day">{{ \Carbon\Carbon::parse($event->date)->format('d') }}</div>
                                <div class="date_month">{{ \Carbon\Carbon::parse($event->date)->format('M') }}</div>
                                <div class="date_year">{{ \Carbon\Carbon::parse($event->date)->format('Y') }}</div>
                            </div>
                            <div class="event_box">
                                <div class="event_title">{{$event->title}}</div>
                                <div class="event_desc">{{$event->desc}}</div>
                                <div class="event_time">{{$event->time}}</div>
                            </div>
                        </div>
                        <!-- previous event bar -->
                        @endif

                    @endforeach

                @endif

			</div>
		</div>
	</div>
</div>


<div class="gallery_section" id="gallery">
	<div class="container">
		<div class="section_name">গ্যালারি</div>
        @if ($galleries)
        <div class="gallery">
            @foreach ($galleries as $gallery)
                <div class="gallery_item"><img src="{{ $gallery->photo ? $gallery->photo->file : '/images/Empty_Images.jpg' }}"></div>
            @endforeach
        </div>
        @endif
	</div>
</div>



<div class="about_section" id="about_us">
	<div class="container">
		<div class="section_name">আমাদের সমন্ধে</div>
        @if ($about)

		<div class="about_image_bar"><img src="images/Islam-golden-decor-background.jpg"></div>
		<div class="about_desc_bar">
			<div class="desc_title">{{ $about->institute_name }}</div>
			<p>{{ $about->institute_desc }}</p>
		</div>

        @endif
	</div>
</div>


<div class="donor_member_section" id="donor_member">
	<div class="container">
		<div class="section_name">দাতা সদস্য</div>
		<div class="donor_members">
        @if ($members->count())
            @foreach ($members as $member)
                <div class="member">
                    <div class="photo"><img src="{{ $member->photo ? $member->photo->file : '/images/DummyProfile.jpg' }}"></div>
                    <div class="name">{{$member->name}}</div>
                    <div class="title">({{$member->title}})</div>
                </div>
            @endforeach
        @else
            <p class="text-warning">No Data Found!</p>
        @endif
		</div>
	</div>
</div>

<div class="instructor_section" id="instructor">
	<div class="container">
		<div class="section_name">শিক্ষক মন্ডলী</div>
		<div class="instructors">
        @if ($instructors->count())
            @foreach ($instructors as $instructor)
                <div class="instructor">
                    <div class="photo"><img src="{{ $instructor->photo ? $instructor->photo->file : '/images/DummyProfile.jpg' }}"></div>
                    <div class="name">{{$instructor->name}}</div>
                    <div class="title">{{$instructor->title}}</div>
                </div>
            @endforeach
        @else
            <p class="text-warning">No Data Found!</p>
        @endif
		</div>
	</div>
</div>


<div class="contact_section" id="contact">
	<div class="container">
		<div class="section_name">যোগাযোগ</div>

        @if ($contact)

		<div class="address_sction">
			<div class="option_title"><i class="fa-solid fa-phone-flip"></i> কল করুন </div>
			<div class="option_bar">
				<li><a href="tel:+880{{$contact->phone_1}}">+880 {{$contact->phone_1}}</a></li>
				<li><a href="tel:+880{{$contact->phone_2}}">+880 {{$contact->phone_2}}</a></li>
			</div>

			<div class="option_title"><i class="fa-solid fa-location-dot"></i> ঠিকানা : </div>
			<div class="option_bar">
				<li>{{$contact->address}}</li>
				<div class="location_bar">
					<div id="googleMap" style="width:100%; height: 100%;">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1821.1506362125685!2d91.132272!3d24.090898499999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375403c3d036bacb%3A0xedc0a05256113f4f!2zQmh1aXlhbiBCYXJpICjgpq3gp4LgpoHgpofgpq_gprzgpr4g4Kas4Ka-4Kah4Ka84Ka_KQ!5e0!3m2!1sen!2sbd!4v1692073418883!5m2!1sen!2sbd" width="100%" height="100%" style="border:2px solid grey; border-radius: 5px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
			</div>
		</div>

        @endif

		<div class="mail_sction">
			<div class="sction_title">মেইল করুন :-</div>
			<div class="mail_inputs">
				<input type="email" name="email" id="" placeholder="আপনার ইমেইল লিখুন" required>
				<input type="text" name="subject" id="" placeholder="বিষয়">
				<textarea name="desc" id="" cols="20" rows="4" placeholder="এখানে লিখুন..."></textarea>
				<button class="btn btn-success" type="submit" name="submit">Submit</button>
			</div>
		</div>
	</div>
</div>


@endsection
