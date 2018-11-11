<header class="c-header">
  <div class="c-header__inner l-wrap">
    <a class="c-header__logo" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    <nav class="c-header__nav js-nav">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav__list js-nav-list', 'container' => '']) !!}
      @endif
      <div class="nav__donate">
        <a href="{{get_permalink(get_post(127)->ID)}}" class="o-btn--primary">Donate</a>
      </div>
      <button class="nav__close js-nav-close" type="button">
        <span class="btn__text">Close</span>
      </button>
    </nav>
    <div class="c-header__nav-trigger">
      <button class="nav-trigger__btn js-nav-trigger" type="button">
        <span class="btn__text">Menu</span>
      </button>
    </div>
  </div>
</header>
