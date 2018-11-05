<div class="{{$isReverse ? 'c-split-content-block--reverse' : 'c-split-content-block'}}">
  <div class="c-split-content-block__img">
    @php echo wp_get_attachment_image($imageID, 'full'); @endphp
  </div>
  <div class="c-split-content-block__text">
    @php echo wp_kses_post($content); @endphp
    @if ($button['text'])
      <a class="o-btn--primary" href="{{$button['url']}}">{{$button['text']}}</a>
    @endif
  </div>
</div>