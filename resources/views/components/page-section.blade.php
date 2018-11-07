<section class="c-page-section{{$isSecondaryClass ? ' c-page-section--secondary' : ''}}">
  <div class="l-wrap">
    @if ($header)
      <h2 class="c-page-section__title">{{$header}}</h2>
    @endif
    {{ $slot }}
  </div>
</section>