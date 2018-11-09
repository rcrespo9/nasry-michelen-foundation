<article @php post_class('c-article') @endphp>
  @include('partials.page-header')
  <div class="c-article__content l-wrap--small">
    <div class="content__meta">
      @include('partials/entry-meta')
    </div>
    @php the_content() @endphp
  </div>
</article>