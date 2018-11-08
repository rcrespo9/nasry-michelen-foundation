<div class="{{$isReverse ? 'c-split-content-block--reverse' : 'c-split-content-block'}}">
  <div class="c-split-content-block__img">
    @php echo wp_get_attachment_image($imageID, 'full'); @endphp
  </div>
  <div class="c-split-content-block__text">
    @php echo wp_kses_post($content); @endphp
    @if ($cta['text'])
      @component('components.cta-link', ['url' => $cta['url']])
        {{$cta['text']}}
      @endcomponent
    @endif
  </div>
</div>