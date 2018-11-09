@php
  $category = get_the_category();
  $firstCategory = $category[0]->cat_name;   
@endphp

<span class="o-category-tag">{{$firstCategory}}</span>