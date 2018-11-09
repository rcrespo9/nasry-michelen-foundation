@extends('layouts.app')

@section('content')
  @include('partials.homepage-header')
  <div class="c-homepage-content">  
    @if ( have_rows('split_content_block') )
      @component('components.page-section')
        @include('partials.split-content-block', ['blockIndex' => 0])
      @endcomponent
    @endif
    @component('components.page-section', ['header' => 'Announcements', 'isSecondaryClass' => true])
      @slot('ctaLink')
        @component('components.cta-link', ['url' => get_permalink(get_post(56)->ID), 'class' => 'c-page-section__cta-link'])
          View more announcements
        @endcomponent
      @endslot
      @include('partials.homepage-announcements')
    @endcomponent
    @if ( have_rows('split_content_block') && count(get_field('split_content_block')) > 1 )
      @component('components.page-section')
        @include('partials.split-content-block', ['blockIndex' => 1])
      @endcomponent
    @endif
  </div>
@endsection
