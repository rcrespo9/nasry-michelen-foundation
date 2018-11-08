@php
  $featuredImage = get_the_post_thumbnail_url();
  $lead = get_field('homepage_header_lead');
  $blurb = get_field('homepage_header_blurb');
  $ctaURL = get_field('homepage_header_cta_url');
  $ctaText = get_field('homepage_header_cta_text');
@endphp

<header class="c-homepage-header" style="{{ $featuredImage ? 'background-image:url(' . $featuredImage .');' : '' }}">
  <div class="c-homepage-header__wrap l-wrap">
    <div class="c-homepage-header__content">
      <h1 class="c-homepage-header__title">{{ App::title() }}</h1>
      <p class="c-homepage-header__lead">{{$lead}}</p>
      <p class="c-homepage-header__blurb">{{$blurb}}</p>
      <a class="o-btn--primary" href="{{$ctaURL}}">{{$ctaText}}</a>
    </div>
  </div>
</header>