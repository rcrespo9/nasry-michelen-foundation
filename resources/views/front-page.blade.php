@extends('layouts.app')

@section('content')
  @include('partials.homepage-header')
  <div class="c-homepage-content">  
    @if ( have_rows('split_content_block') )
      @php 
        $block = get_field('split_content_block')[0];
        $blockImageID = $block['split_content_block_image'];
        $blockContent = $block['split_content_block_content'];
        $blockDirection = $block['split_content_block_direction'];
        $blockCTAText = $block['split_content_block_cta_text'];
        $blockCTAUrl = $block['split_content_block_cta_url'];
      @endphp

      @component('components.page-section')
        @component('components.split-content-block', ['imageID' => $blockImageID, 'content' => $blockContent, 'isReverse' => $blockDirection, 'cta' => ['text' => $blockCTAText, 'url' => $blockCTAUrl]])
        @endcomponent
      @endcomponent
    @endif
    @include('partials.announcements')
    @if ( have_rows('split_content_block') && count(get_field('split_content_block')) > 1 )
      @php 
        $block = get_field('split_content_block')[1];
        $blockImageID = $block['split_content_block_image'];
        $blockContent = $block['split_content_block_content'];
        $blockDirection = $block['split_content_block_direction'];
        $blockCTAText = $block['split_content_block_cta_text'];
        $blockCTAUrl = $block['split_content_block_cta_url'];
      @endphp

      @component('components.page-section')
        @component('components.split-content-block', ['imageID' => $blockImageID, 'content' => $blockContent, 'isReverse' => $blockDirection, 'cta' => ['text' => $blockCTAText, 'url' => $blockCTAUrl]])
        @endcomponent
      @endcomponent
    @endif
  </div>
@endsection
