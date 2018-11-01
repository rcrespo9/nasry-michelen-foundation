@php
  $blockquote = get_field('blockquote_text');
  $contentBlockHeader = get_field('');
@endphp

@extends('layouts.app')

@section('content')
  @if ($blockquote)
    @component('components.page-section')
      @component('components.blockquote')
        {{ $blockquote }}
      @endcomponent
    @endcomponent
  @endif
  @if ( have_rows('split_content_block') )
    @php 
      $block = get_field('split_content_block')[0];
      $blockImageID = $block['split_content_block_image'];
      $blockContent = $block['split_content_block_content'];
      $blockDirection = $block['split_content_block_direction'];
    @endphp

    @component('components.page-section')
      @component('components.split-content-block', ['imageID' => $blockImageID, 'content' => $blockContent, 'isReverse' => $blockDirection])
      @endcomponent
    @endcomponent
  @endif
  @if ( have_rows('split_content_block') )
    @php 
      $block = get_field('split_content_block')[1];
      $blockImageID = $block['split_content_block_image'];
      $blockContent = $block['split_content_block_content'];
      $blockDirection = $block['split_content_block_direction'];
    @endphp

    @component('components.page-section')
      @component('components.split-content-block', ['imageID' => $blockImageID, 'content' => $blockContent, 'isReverse' => $blockDirection])
      @endcomponent
    @endcomponent
  @endif

  {!! get_the_posts_navigation() !!}
@endsection
