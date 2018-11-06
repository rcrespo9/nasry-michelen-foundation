@php
  $isHome = is_home() || is_front_page();
  $featuredImage = get_the_post_thumbnail_url();  
  $title = get_field('page_header_title');
  $blurb = get_field('page_header_blurb');
  $buttonURL = get_field('page_header_button_url');
  $buttonText = get_field('page_header_button_text');
@endphp

<header class="{{$isHome ? 'c-page-header--home' : 'c-page-header--single'}}" style="{{ $featuredImage ? 'background-image:url(' . $featuredImage .');' : '' }}">
  <div class="c-page-header__wrap l-wrap">
    <h1 class="c-page-header__title">{{ $title ? $title : App::title() }}</h1>
    @if ($blurb)
      <p class="c-page-header__blurb">{{$blurb}}</p>
    @endif
    @if ($isHome && $buttonURL && $buttonText)
      <a class="o-btn--primary" href="{{$buttonURL}}">{{$buttonText}}</a>
    @endif
  </div>
</header>
