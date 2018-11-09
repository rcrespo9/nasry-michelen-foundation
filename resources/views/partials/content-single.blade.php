<article @php post_class('c-article') @endphp>
  @include('partials.page-header')
  <div class="c-article__content l-wrap--small">
    @include('partials/entry-meta')
    @php the_content() @endphp
  </div>
</article>