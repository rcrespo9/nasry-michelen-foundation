@extends('layouts.app')

@section('content')
  <div class="c-page-content--home">  
    @if ( have_rows('split_content_block') )
      @php 
        $block = get_field('split_content_block')[0];
        $blockImageID = $block['split_content_block_image'];
        $blockContent = $block['split_content_block_content'];
        $blockDirection = $block['split_content_block_direction'];
        $blockBtnText = $block['split_content_block_button_text'];
        $blockBtnUrl = $block['split_content_block_button_url'];
      @endphp

      @component('components.page-section')
        @component('components.split-content-block', ['imageID' => $blockImageID, 'content' => $blockContent, 'isReverse' => $blockDirection, 'button' => ['text' => $blockBtnText, 'url' => $blockBtnUrl]])
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
        $blockBtnText = $block['split_content_block_button_text'];
        $blockBtnUrl = $block['split_content_block_button_url'];
      @endphp

      @component('components.page-section')
        @component('components.split-content-block', ['imageID' => $blockImageID, 'content' => $blockContent, 'isReverse' => $blockDirection, 'button' => ['text' => $blockBtnText, 'url' => $blockBtnUrl]])
        @endcomponent
      @endcomponent
    @endif
  </div>
@endsection
