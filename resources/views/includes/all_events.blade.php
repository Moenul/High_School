@if ($all_events)
    @foreach ($all_events as $event)
    <a href="{{ action('EventsController@index', ['slug'=>$event->slug]) }}">
    <div class="card">
        <div class="event_title">{!! $event->title !!}</div>
        <div class="event_date">{{ \Carbon\Carbon::parse($event->date)->format('d M Y') }}</div>
    </div>
    </a>
    @endforeach
@endif
