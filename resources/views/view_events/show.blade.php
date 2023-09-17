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

                <div class="col-4 event_sidebar">
                @if ($all_events)
                    @foreach ($all_events as $event)
                    <a href="{{ Route('view_events.show', $event->id) }}">
                    <div class="card">
                        <div class="event_title">{!! $event->title !!}</div>
                        <div class="event_date">{{ \Carbon\Carbon::parse($event->date)->format('d M Y') }}</div>
                    </div>
                    </a>
                    @endforeach
                @endif
                </div>
            </div>





    </div>
</div>



@endsection

@section('footer')
    @include('includes.footer')
@endsection
