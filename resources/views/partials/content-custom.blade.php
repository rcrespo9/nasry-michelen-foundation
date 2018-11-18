<article @php post_class('c-article') @endphp>
  @include('partials.page-header')
  <div class="c-article__content l-wrap">
    @php the_content() @endphp
    @include('partials.board-members')
  </div>
</article>