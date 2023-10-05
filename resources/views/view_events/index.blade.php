@extends('layouts.app')

@section('navigation')
    @include('includes.navigation')
@endsection


@section('content')



<div class="post_section">
    <div class="container">


            <div class="row">
                <div class="col-8">
                    @if ($event)
                        <div class="event_title h4">{!! $event->title !!}</div>
                        <div class="event_datee">{{ \Carbon\Carbon::parse($event->date)->format('d M Y') }}</div>
                        <div class="event_time">{!! $event->time !!}</div>
                        <div class="event_desc post_desc mt-3">{!! $event->desc !!}</div>
                    @endif
                </div>

                <div class="col-4 event_sidebar border p-2">

                    <div id="data-wrapper">
                        @include('includes.all_events')
                    </div>

                    <div style="cursor: pointer; background: aliceblue; border: 1px solid #e8e8e8;" class="load_more load-more-data text-center"><i class="fa fa-refresh"></i> Load More ...</div>

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

    </div>
</div>



@endsection

@section('footer')
    @include('includes.footer')
@endsection
@section('script')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">

    var ENDPOINT = "{{ url('/view_events') }}";
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
