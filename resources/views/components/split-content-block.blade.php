@php
  $image = get_field('split_content_block_image');
  $content = get_field('split_content_block_content');
  $isReverse = get_field('split_content_block_direction');
@endphp

<div class="{{$isReverse ? 'c-split-content-block--reverse' : 'c-split-content-block'}}">
  <div class="c-split-content-block__img">
    <img src="{{$image}}" alt="">
  </div>
  <div class="c-split-content-block__text">
    @php echo wp_kses_post($content); @endphp
  </div>
</div>