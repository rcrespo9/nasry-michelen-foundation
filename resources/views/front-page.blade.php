@php
  $blockquote = get_field('blockquote_text');
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

  {!! get_the_posts_navigation() !!}
@endsection
