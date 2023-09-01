
<!-- /* /////  Top Nav Section Start ------------------- */ -->
<div class="top_nav">
	<div class="container">
        @if ($contact)
            <li><a href="{{$contact->youtube_link}}"><i style="color:#FF0000" class="fa-brands fa-youtube"></i></a></li>
            <li><a href="{{$contact->whatsapp_link}}"><i style="color:#25D366" class="fa-brands fa-whatsapp"></i></a></li>
            <li><a href="{{$contact->facebook_link}}"><i style="color:#4267B2" class="fa-brands fa-facebook-f"></i></a></li>

            <li><i class="fa-solid fa-location-dot"></i> <a href="{{$contact->address_link}}" target="_blank">{{$contact->address}}</a></li>
            <li><i class="fa-solid fa-phone-flip"></i> <a href="tel:+880{{$contact->phone_1}}">+88 0{{$contact->phone_1}}</a></li>
        @endif
    </div>
</div>
<!-- /* /////  Top Nav Section End ------------------- */ -->


<!-- /* /////  Nav_Bar Section Start ------------------- */ -->
<div class="nav_bar">
	<div class="container">
		<div class="nav_brand"><img src="images/Madrasah_big.png"></div>
		<div class="nav_list">
			<ul>
				<a href=""><li style="background: #FFD261;">ডোনেশন</li></a>
				<a href="admission.html"><li style="background: #85E352;">ভর্তি আবেদন</li></a>
				<a href=""><li>লাইব্রেরি</li></a>
				<a href="#contact"><li>যোগাযোগ</li></a>
				<li>সমন্ধে <i class="fa-solid fa-angle-down"></i>
					<div class="nav_dropdown">
						<ul>
							<a href="#about_us">আমাদের সমন্ধে</a>
							<a href="#instructor">শিক্ষক মন্ডলী </a>
							<a href="#donor_member">দাতা সদস্য </a>
						</ul>
					</div>
				</li>
				<a href="index.html"><li>হোম</li></a>
			</ul>
		</div>

		<div class="nav_button">
			<div class="button_bar button_bar_1"></div>
			<div class="button_bar button_bar_2"></div>
		</div>
	</div>
</div>
<!-- /* /////  Nav_Bar Section End ------------------- */ -->
