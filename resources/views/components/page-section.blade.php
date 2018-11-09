<section class="c-page-section{{$isSecondaryClass ? ' c-page-section--secondary' : ''}}">
  <div class="l-wrap">
    @if ($header)
      <div class="c-page-section__header">
        <h2 class="c-page-section__title">{{$header}}</h2>
        @if ($ctaLink)
          {{ $ctaLink }}
        @endif
      </div>
    @endif
    {{ $slot }}
  </div>
</section>