$(document).ready(function(){

//  Nav Animate by Scroll and Scroll to top button -------------------
    $(window).scroll(function() {
        if ($(this).scrollTop()) {
            $(".nav_bar").addClass("nav_bar_active");
        }
        else {
            $(".nav_bar").removeClass("nav_bar_active");
        }

        if ($(this).scrollTop()) {
            $('.scroll_to_top').fadeIn();
        } else {
            $('.scroll_to_top').fadeOut();
        }

    });

    $(".scroll_to_top").click(function() {
        $("html, body").animate({scrollTop: 0}, 300);
    });
//  Nav Animate by Scroll and Scroll to top button -------------------



    // Cover Slider Script
    $("#slider > .slider_image:gt(0)").hide();

    setInterval(function() {
        $('#slider > .slider_image:first').fadeOut(2000).next().fadeIn(2000).end().appendTo('#slider');
    }, 5000);
    // -----------

    // Nav list and button Script
    $(".nav_button").click(function() {
        $(this).toggleClass('nav_button_active');
        $(".nav_list").toggleClass('nav_list_active');
     });
    // --------------------------


    // Sub-Category Slider Script
    $(".slide_section").hover(function() {
        $(this).find(".slide_bar").addClass('hovered');
        $(this).find(".next_btn").click(function() {
            var $scroll = $(".hovered").scrollLeft();
            $(".hovered").scrollLeft($scroll + 500);
        });
        $(this).find(".prev_btn").click(function() {
            var $scroll = $(".hovered").scrollLeft();
            $(".hovered").scrollLeft($scroll - 500);
        });
        $hovered_this = $(this);

        function slider_recall() {

            var $target_bar = $hovered_this.find(".slide_bar");
            var $slide_bar_width = $hovered_this.find(".slide_bar_content").width();
            var $slide_aria_calc = $hovered_this.find(".slide_bar").width();
            var $slide_width_calc = $slide_bar_width - $slide_aria_calc;

            if ($target_bar.scrollLeft() < 10) {
                $hovered_this.find(".prev_btn").css('visibility', 'hidden');
            } else {
                $hovered_this.find(".prev_btn").css('visibility', 'visible');
            }

            if ($target_bar.scrollLeft() > $slide_width_calc) {
                $hovered_this.find(".next_btn").css('visibility', 'hidden');
            } else if ($slide_bar_width < $slide_aria_calc) {
                $hovered_this.find(".next_btn").css('visibility', 'hidden');
            } else {
                $hovered_this.find(".next_btn").css('visibility', 'visible');
            }
        }
        setInterval(slider_recall, 500);

    }, function() {
        $(this).find(".slide_bar").removeClass('hovered');
    });


    // -----------

    // Before Upload Preview Image

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#preview_img').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]); // convert to base64 string
            $('.action_field').show();
        }
    }

    $("#imgInp").change(function() {
        readURL(this);
    });

    // --------

    setTimeout(function() {
        $('#flash_messsage').fadeOut('fast');
    }, 3000);


});

