<header class="c-header">
  <div class="c-header__wrap l-wrap">
    <a class="c-header__logo" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    <nav class="c-header__nav">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav__list', 'container' => '']) !!}
      @endif
    </nav>
    <div class="c-header__misc">
      <span>EN | ES</span>
    </div>
  </div>
</header>
