<article @php post_class('c-article') @endphp>
  @include('partials.page-header')
  <div class="c-article__content l-wrap--small">
    <div class="content__meta">
      @include('partials/entry-meta', ['show_event_location' => true])
    </div>
    @php the_content() @endphp
  </div>
</article>
@include('partials.recent-announcements')