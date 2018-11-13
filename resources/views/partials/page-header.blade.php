@php
  $parent = get_the_title($post->post_parent);
  $category = get_queried_object();
  $featuredImage = null;
  $categoryImage = get_field('featured_category_image', $category);

  if(is_category()) {
    $featuredImage = $categoryImage;
  } else {
    $featuredImage = get_the_post_thumbnail_url();
  }
@endphp

<header class="c-page-header {{ $featuredImage ? 'has-bg-img' : '' }}" style="{{ $featuredImage ? 'background-image:url(' . $featuredImage .');' : '' }}">
  <div class="l-wrap">
    <div class="c-page-header__content">
      @if($post->post_parent || is_single())
        <div class="c-page-header__parent-title">
          @if($post->post_parent)
            <span class="parent-title__text">{{ $parent }}</span>
          @elseif (is_single())
            @include('partials.category-tag')
          @endif
        </div>
      @endif
      <h1 class="c-page-header__title">{{ is_category() ? get_cat_name($category->term_id) : App::title() }}</h1>
      <div class="c-page-header__breadcrumbs">{{ App::breadcrumbs() }}</div>
    </div>
  </div>
</header>
