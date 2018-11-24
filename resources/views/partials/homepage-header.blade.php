@php
  $featuredImageId = get_post_thumbnail_id();
  $lead = get_field('homepage_header_lead');
  $blurb = get_field('homepage_header_blurb');
  $ctaURL = get_field('homepage_header_cta_url');
  $ctaText = get_field('homepage_header_cta_text');
@endphp

<header class="c-homepage-header {{ has_post_thumbnail() ? 'has-bg-img' : '' }}">
  @php echo App::responsive_featured_img($featuredImageId) @endphp
  <div class="c-homepage-header__wrap l-wrap">
    <div class="c-homepage-header__content">
      <h1 class="c-homepage-header__title">{{ App::title() }}</h1>
      <p class="c-homepage-header__lead">{{$lead}}</p>
      <p class="c-homepage-header__blurb">{{$blurb}}</p>
      <a class="c-homepage-header__cta o-btn--primary" href="{{$ctaURL}}">{{$ctaText}}</a>
    </div>
  </div>
</header>