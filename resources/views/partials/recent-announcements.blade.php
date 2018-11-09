@php
  $args = array(
    'posts_per_page' => 3,
    'post_type' => 'post',
    'order' => 'DESC'
  );

  $the_query = new WP_QUERY($args);
@endphp

@component('components.page-section', ['header' => 'Recent Announcements', 'isSecondaryClass' => true])
  @slot('ctaLink')
    @component('components.cta-link', ['url' => get_permalink(get_post(56)->ID), 'class' => 'c-page-section__cta-link'])
      View more announcements
    @endcomponent
  @endslot
  @component('components.announcements')
    @if($the_query->have_posts())
      @while($the_query->have_posts()) @php $the_query->the_post() @endphp
        @include('partials.post-card')
      @endwhile
    @endif
    @php wp_reset_postdata(); @endphp    
  @endcomponent      
@endcomponent


