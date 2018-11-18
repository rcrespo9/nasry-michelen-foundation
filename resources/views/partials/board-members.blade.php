@if( have_rows('board_member') )
  <ul class="l-board-members">

    @while ( have_rows('board_member') ) @php the_row() @endphp
      @php
        $picture = get_sub_field('picture');
        $name = get_sub_field('name');
        $title = get_sub_field('title');
        $credentials = get_sub_field('credentials');
      @endphp

      <li class="c-board-member">
        <figure class="c-board-member__inner">
          {!! wp_get_attachment_image($picture, 'large') !!}
          <figcaption class="c-board-member__details">
          <span class="details__item details__item--name">{{$name}}</span>
          <span class="details__item details__item--creds">{{$credentials}}</span>
          <span class="details__item details__item--title">{{$title}}</span>
          </figcaption>
        </figure>
      </li>
    @endwhile
  </ul>
@endif