@php
  $parent = get_the_title($post->post_parent);
  $category = get_queried_object();
  $featuredImageId = null;
  $categoryImage = get_field('featured_category_image', $category);
  $postsHome = get_option('page_for_posts');

  if (is_category()) {
    $featuredImageId = $categoryImage;
  } elseif (is_home() && $postsHome) {
    $featuredImageId = get_post_thumbnail_id($postsHome);
  } else {
    $featuredImageId = get_post_thumbnail_id();
  }
@endphp

<header class="c-page-header {{ $featuredImageId ? 'has-bg-img' : '' }}">
  @php echo App::responsive_bg_img($featuredImageId) @endphp
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
