@extends('layouts.app')

@section('navigation')
    @include('includes.navigation')
@endsection

@section('flash-message')
    @include('includes.flash-message')
@endsection

@section('header_content')

<div class="header_section">
	<div class="header_slider">
		<div class="slider" id="slider">
            @if ($sliders)
                @foreach ($sliders as $slider)
                <div class="slider_image"style="background-image: url('{{ $slider->photo ? $slider->photo->file : '/images/Empty_Images_Landscape.jpg' }}');"></div>
                @endforeach
            @endif
		</div>
	</div>
	<div class="container">
        @if ($about)
            <p>{{ $about->institute_name }}
                <span>{{ $about->tagline }}</span>
            </p>
        @endif
	</div>
</div>

@endsection


@section('content')


<div class="updates_section">
	<div class="container">
		<div class="notice_section">
			<div class="section_title">নোটিশ</div>
			<div class="section_bar">

                <div id="data-wrapper">
                    @include('includes.notice')
                </div>

				<div class="load_more load-more-data"><i class="fa fa-refresh"></i> Load More ...</div>

                <!-- Data Loader -->
                <div class="auto-load text-center" style="display: none;">
                    <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" height="60" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
                        <path fill="#000"
                            d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                            <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s"
                                from="0 50 50" to="360 50 50" repeatCount="indefinite" />
                        </path>
                    </svg>
                </div>
                <!-- Data Loader -->


			</div>
		</div>
		<div class="event_section">
			<div class="section_title">ইভেন্ট</div>
			<div class="section_bar">

                @if ($events->count())

                    @foreach ($events as $event)

                        @if (\Carbon\Carbon::parse($event->date)->format('d M Y') >= \Carbon\Carbon::today()->format('d M Y'))

                        <!-- event bar -->
                        <a href="{{ Route('view_events.show', $event->id) }}">
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
                                <div class="event_desc">{!! $event->desc !!}</div>
                                <div class="event_time">{{$event->time}}</div>
                            </div>
                        </div>
                        </a>
                        <!-- event bar -->

                        @endif

                    @endforeach

                    <div class="previous_event">
                        পূর্ববর্তী
                    </div>

                    @foreach ($events as $event)

                        @if (\Carbon\Carbon::parse($event->date)->format('d M Y') < \Carbon\Carbon::today()->format('d M Y') )

                         <!-- previous event bar -->
                         <a href="{{ Route('view_events.show', $event->id) }}">
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
                                <div class="event_desc">{!! $event->desc !!}</div>
                                <div class="event_time">{{$event->time}}</div>
                            </div>
                        </div>
                        </a>
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

		<div class="about_image_bar"><img src="{{ $about->cover ? $about->cover->file : '/images/Empty_Images.jpg' }}"></div>
		<div class="about_desc_bar">
			<div class="desc_title">{{ $about->institute_name }}</div>
			<p>{{ $about->institute_desc }}</p>
		</div>

        @endif
	</div>
</div>


<div class="president" id="president">
	<div class="container">
        <div class="section_name">সভাপতি</div>
		<div class="row">
			@if ($speaches->where('person_type', '=', 'President'))
                @foreach ($speaches->where('person_type', '=', 'President') as $person)
                    <div class="col-md-6">
                        <div class="president_img">
                            <img src="{{ $person->photo ? $person->photo->file : '/images/DummyProfile.jpg' }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="name">{{$person->name}}</div>
                        <div class="title">{{$person->title}}</div>
                        <div class="desc">
                            <p>{!! $person->desc !!}</p>
                        </div>
                    </div>
                @endforeach
            @endif
		</div>
	</div>
</div>

<div class="institute_head" id="institute_head">
	<div class="container">
        <div class="section_name">প্রধান শিক্ষক</div>
		<div class="row">
            @if ($speaches->where('person_type', '=', 'Institute Head'))
                @foreach ($speaches->where('person_type', '=', 'Institute Head') as $person)
                    <div class="col-md-6">
                        <div class="institute_head_img">
                            <img src="{{ $person->photo ? $person->photo->file : '/images/DummyProfile.jpg' }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="name">{{$person->name}}</div>
                        <div class="title">{{$person->title}}</div>
                        <div class="desc">
                            <p>{!! $person->desc !!}</p>
                        </div>
                    </div>
                @endforeach
            @endif
		</div>
	</div>
</div>



<div class="instructor_section" id="instructor">
	<div class="container">
		<div class="section_name">শিক্ষক ও কর্মচারীবৃন্দ</div>
		<div class="instructors">
        @if ($instructors->count())
            @foreach ($instructors as $instructor)
                <div class="instructor">
                    <div class="photo"><img src="{{ $instructor->photo ? $instructor->photo->file : '/images/DummyProfile.jpg' }}"></div>
                    <div class="desc">
                        <div class="name">{{$instructor->name}}</div>
                        <div class="title">{{$instructor->title}}</div>
                        <div class="qualification">{{$instructor->qualification}}</div>
                        <div class="phone">+88 {{$instructor->phone}}</div>
                    </div>
                </div>
            @endforeach
        @else
            <p class="text-warning">No Data Found!</p>
        @endif
		</div>
	</div>
</div>


<div class="donor_member_section" id="school_committee">
	<div class="container">
		<div class="section_name">ম্যানেজিং কমিটি</div>
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1821.4346813167701!2d91.10941800827581!3d24.070904540475286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375403bdb65ac59b%3A0xea30991b975c1391!2sSarail%20Sadar%20High%20School!5e0!3m2!1sen!2sbd!4v1694692619324!5m2!1sen!2sbd" width="100%" height="100%" style="border:2px solid grey; border-radius: 5px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
				</div>
			</div>
		</div>

        @endif

		<div class="mail_sction">
			<div class="sction_title">মেইল করুন :-</div>
			<div class="mail_inputs">
                {!! Form::open(['method'=>'POST', 'action'=>'ContactMailsController@store', 'files'=>true]) !!}
                    @csrf
                    <div class="form-group">
                        {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'আপনার ইমেইল লিখুন', 'required'=>'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::text('subject', null, ['class'=>'form-control', 'placeholder'=>'বিষয়']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::textarea('message', null, ['class'=>'form-control','rows'=>4, 'cols'=>20, 'placeholder'=>'এখানে লিখুন...']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Submit', ['class'=>'btn btn-primary bg-primary']) !!}
                    </div>
                {!! Form::close() !!}
			</div>
		</div>
	</div>
</div>


@endsection


@section('footer')
    @include('includes.footer')
@endsection

@section('script')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

    var ENDPOINT = "{{ url('/home') }}";
    var page = 1;

    $(".load-more-data").click(function(){
        page++;
        infinteLoadMore(page);
    });

    /*------------------------------------------
    --------------------------------------------
    call infinteLoadMore()
    --------------------------------------------
    --------------------------------------------*/
    function infinteLoadMore(page) {
        $.ajax({
                url: ENDPOINT + "?page=" + page,
                datatype: "html",
                type: "get",
                beforeSend: function () {
                    $('.auto-load').show();
                }
            })
            .done(function (response) {
                if (response.html == '') {
                    $('.auto-load').html("We don't have more data to display :(");
                    return;
                }
                $('.auto-load').hide();
                $("#data-wrapper").append(response.html);
            })
            .fail(function (jqXHR, ajaxOptions, thrownError) {
                console.log('Server error occured');
            });
    }
</script>

@endsection
