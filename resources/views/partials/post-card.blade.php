@php
  $category = get_the_category();
  $firstCategory = $category[0]->cat_name;
  $isPressCategory = $firstCategory === 'Press';
  $pressUrl = get_field('press_url');
@endphp

<article {{post_class('c-post-card')}}>
  <a href="{{$pressUrl ? $pressUrl : get_permalink()}}" class="c-post-card__link" {{$pressUrl ? 'target="_blank"' : ''}}>
  <div class="c-post-card__img" style="background-image: url({{the_post_thumbnail_url('medium')}});">
      @include('partials.category-tag')
    </div>
    <div class="c-post-card__content">
      <div class="c-post-card__header">
        <div class="c-post-card__date">
          @include('partials.entry-meta')
        </div>
        <h3 class="c-post-card__title">{{get_the_title()}}</h3>
      </div>
      <div class="c-post-card__excerpt">
        {{the_excerpt()}}
      </div>
      <p class="c-post-card__more">Read More<span class="o-sr-only"> about {{get_the_title()}}</span></p>
    </div>  
  </a>
</article>