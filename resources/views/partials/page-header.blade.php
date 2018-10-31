@php
  $isHome = is_home() || is_front_page();
  $featuredImage = get_the_post_thumbnail_url();  
  $blurb = get_field('page_header_blurb');
  $buttonURL = get_field('page_header_button_url');
  $buttonText = get_field('page_header_button_text');
@endphp

<div class="{{$isHome ? 'c-page-header--home' : 'c-page-header--single'}}" style="{{ $featuredImage ? 'background-image:url(' . $featuredImage .');' : '' }}">
  <div class="c-page-header__wrap l-wrap">
    <div class="c-page-header__inner">
      <h1 class="c-page-header__title">{!! App::title() !!}</h1>
      @if ($blurb)
        <p class="c-page-header__blurb">{{$blurb}}</p>
      @endif
      
      @if ($isHome)
        <a class="o-btn" href="{{$buttonURL}}">{{$buttonText}}</a>
      @endif
    </div>
  </div>
</div>
