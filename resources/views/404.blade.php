@extends('layouts.app')

@section('content')
  @if (!have_posts())
    <article @php post_class('c-article') @endphp>
      @include('partials.page-header')
      <div class="c-article__content l-wrap--small">
        {{ __('Sorry, but the page you were trying to view does not exist.', 'sage') }}
      </div>
    </article>  
  @endif
@endsection