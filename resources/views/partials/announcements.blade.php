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
    <div class="c-page-section__header">      
      <h2 class="c-page-section__title">Announcements</h2>
      @component('components.cta-link', ['url' => get_permalink(get_post(56)->ID), 'class' => 'c-page-section__cta-link'])
        View more announcements
      @endcomponent
    </div>
    <div class="l-announcements">
      @if($the_query->have_posts())
        @while($the_query->have_posts()) @php $the_query->the_post() @endphp
          @include('partials.post-card')
        @endwhile
      @endif
    </div>
  </div>
</section>
@php wp_reset_postdata(); @endphp