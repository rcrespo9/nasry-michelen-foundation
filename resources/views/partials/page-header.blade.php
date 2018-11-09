@php
  $featuredImage = get_the_post_thumbnail_url();
  $parent = get_the_title($post->post_parent);
@endphp

<header class="c-page-header" style="{{ $featuredImage ? 'background-image:url(' . $featuredImage .');' : '' }}">
  <div class="l-wrap">
    <div class="c-page-header__content">
      @if($post->post_parent)
        <span class="c-page-header__parent-title">{{ $parent }}</span>
      @endif
      <h1 class="c-page-header__title">{{ App::title() }}</h1>
      <div class="c-page-header__breadcrumbs">{{ App::breadcrumbs() }}</div>
    </div>
  </div>
</header>
