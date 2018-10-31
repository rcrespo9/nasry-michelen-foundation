<div class="{{is_home() || is_front_page() ? 'c-page-header--home' : 'c-page-header--single'}}" style="background-image: {{ get_the_post_thumbnail_url() }};">
  <div class="c-page-header__wrap l-wrap">
    <div class="c-page-header__inner">
      <h1 class="c-page-header__title">{!! App::title() !!}</h1>
    </div>
  </div>
</div>
