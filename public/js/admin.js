$(document).ready(function(){



$(function() {
	$(".nav_item").on("click", function(e){
		$(".dropdown").hide();
		$(this).find('.dropdown').show();
		e.stopPropagation()
	});

    $(document).on("click", function(e) {
        var $target = e.target;
	    console.log($target)
	    if ($(e.target).is(".dropdown") === false) {
	        $(".dropdown").hide();
	    }
    });
});


$(function() {
	$(".side_nav_item").on("click", function(e){
		$(this).find('.side_dropdown').slideToggle();
		e.stopPropagation()
	});
});



$(".dropdown_btn").click(function(){
	$(".side_nav").toggleClass("side_nav_collaps");
	$(".content_section").toggleClass("side_nav_collaps_content");
	$(this).toggleClass("dropdown_btn_active");
});




});