@php
  $featuredImage = get_the_post_thumbnail_url();
@endphp

<header class="c-page-header" style="{{ $featuredImage ? 'background-image:url(' . $featuredImage .');' : '' }}">
  <div class="c-page-header__wrap l-wrap">
    <div class="c-page-header__content">
      <h1 class="c-page-header__title">{{ App::title() }}</h1>
    </div>
  </div>
</header>
