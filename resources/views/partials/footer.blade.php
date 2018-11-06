<div class="c-donate-prompt">
  <div class="c-donate-prompt__inner l-wrap">
    <p class="c-donate-prompt__text">Your donation will go towards scholarships.</p>
    <a href="{{get_permalink(get_post(127)->ID)}}" class="o-btn--secondary">Give Now</a>
  </div>
</div>
<footer class="c-footer">
  <div class="l-wrap">
    <div class="c-footer__top">
      @if (has_nav_menu('secondary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'secondary_navigation', 'menu_class' => 'c-footer__nav', 'container' => '']) !!}
      @endif
      <div class="c-footer__informed">
        <h2 class="informed__header">Stay Informed</h2>
        <p class="informed__copy">Sign up to receive updates from the Nasry Michelen Foundation.</p>
      </div>
    </div>
    <div class="c-footer__bottom">
      <small class="c-footer__copy">&copy; {{date("Y")}} Nasry Michelen Foundation. All Rights Reserved</small>
      <ul class="c-footer__misc">
        <li class="misc__item"><a class="misc__link" href="#">Privacy Policy</a></li>
        <li class="misc__item"><a class="misc__link" href="#">Terms of Use</a></li>
        <li class="misc__item"><a class="misc__link" href="https://rudycrespo.com" target="_blank">Made by Rudy Crespo</a></li>
      </ul>
    </div>
  </div>
</footer>
