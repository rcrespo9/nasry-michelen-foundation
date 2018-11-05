@php
  $category = get_the_category();
  $firstCategory = $category[0]->cat_name;   
@endphp

<article {{post_class('c-post-card')}}>
  <a href="{{get_permalink()}}" class="c-post-card__link">
  <div class="c-post-card__img" style="background-image: url({{the_post_thumbnail_url('full')}});">
      <span class="c-post-card__tag">{{$firstCategory}}</span>
    </div>
    <div class="c-post-card__content">
      <div class="c-post-card__header">
        <time class="c-post-card__date" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
        <h3 class="c-post-card__title">{{get_the_title()}}</h3>
      </div>
      <div class="c-post-card__excerpt">
        {{the_excerpt()}}
      </div>
      <p class="c-post-card__more">Read More<span class="o-sr-only"> about {{get_the_title()}}</span></p>
    </div>  
  </a>
</article>