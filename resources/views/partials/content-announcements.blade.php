<article @php post_class('c-article') @endphp>
  @include('partials.page-header')
  <div class="c-article__content l-wrap">
    @component('components.announcements')
      @if(have_posts())
        @while(have_posts()) @php the_post() @endphp
          @include('partials.post-card')
        @endwhile
      @endif    
    @endcomponent
  </div>
</article>