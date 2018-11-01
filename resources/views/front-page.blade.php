@php
  $blockquote = get_field('blockquote_text');
  $contentBlockHeader = get_field('')
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
  @component('components.page-section')
    @component('components.split-content-block')
    @endcomponent
  @endcomponent

  {!! get_the_posts_navigation() !!}
@endsection
