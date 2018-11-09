@php
  $args = array(
    'posts_per_page' => 3,
    'post_type' => 'post',
    'order' => 'DESC'
  );

  $the_query = new WP_QUERY($args);
@endphp

<div class="c-announcements">
  @if($the_query->have_posts())
    @while($the_query->have_posts()) @php $the_query->the_post() @endphp
      @include('partials.post-card')
    @endwhile
  @endif
  @php wp_reset_postdata(); @endphp
</div>