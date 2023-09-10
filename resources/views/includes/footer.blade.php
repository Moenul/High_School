
<div class="scroll_to_top" onclick="topFunction()" id="myBtn">
	<iconify-icon icon="icon-park-outline:to-top"></iconify-icon>
</div>
<div class="footer">
	<div class="container">
		<div class="row footer_condition">
            @if (App\Models\Policy::all())
                @foreach (App\Models\Policy::all() as $policy)
                    <div class="col-md-6"><a href="{{ action('InformationsController@index', ['id'=> $policy->id]) }}"> <i class="fas fa-caret-right"></i>{{$policy->name}}</a></div>
                @endforeach
            @endif
			<div class="col-md-12 copyright">&copy; All Rights Reserved</div>
			<div class="col-md-12 credit">Design and Develoed credit gose to <a href="http://" target="_blank">MOENUL ISLAM</a></div>
		</div>
	</div>
</div>
<!-- end footer -->
