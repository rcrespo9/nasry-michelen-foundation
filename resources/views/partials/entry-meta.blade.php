@php
  $event_date_time = get_field('event_date_time');
  $event_location = get_field('event_location');
@endphp

<time class="o-meta" datetime="{{ $event_date_time ? date('c', strtotime($event_date_time)) : get_post_time('c', true) }}">{{ $event_date_time ? $event_date_time : get_the_date() }}</time>
@if ($event_location && $show_event_location)
<span class="o-meta">at {{$event_location}}</span>
@endif
