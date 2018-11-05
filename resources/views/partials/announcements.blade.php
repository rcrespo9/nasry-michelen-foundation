@php
  $args = array(
    'posts_per_page' => 3,
    'post_type' => 'post',
    'order' => 'DESC'
  );

  $the_query = new WP_QUERY($args);
@endphp

<section class="c-page-section c-page-section--secondary">
  <div class="l-wrap">
    <h2 class="c-page-section__header text-center">Announcements</h2>
    <div class="l-announcements">
      @if($the_query->have_posts())
        @while($the_query->have_posts()) @php $the_query->the_post() @endphp
          @include('partials.post-card')
        @endwhile
      @endif
    </div>
  </div>
</section>