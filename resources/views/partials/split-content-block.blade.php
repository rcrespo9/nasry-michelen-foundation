@php 
  $block = get_field('split_content_block')[$blockIndex];
  $imageID = $block['split_content_block_image'];
  $content = $block['split_content_block_content'];
  $isReverse = $block['split_content_block_direction'];
  $ctaText = $block['split_content_block_cta_text'];
  $ctaUrl = $block['split_content_block_cta_url'];
@endphp

<div class="{{$isReverse ? 'c-split-content-block--reverse' : 'c-split-content-block'}}">
  <div class="c-split-content-block__img" style="background-image: url({{wp_get_attachment_url($imageID)}});"></div>
  <div class="c-split-content-block__text">
    @php echo wp_kses_post($content); @endphp
    @if ($ctaText)
      @component('components.cta-link', ['url' => $ctaUrl, 'class' => 'c-split-content-block__cta'])
        {{$ctaText}}
      @endcomponent
    @endif
  </div>
</div>