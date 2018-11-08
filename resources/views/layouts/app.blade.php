<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @include('partials.svg-symbols')
    @php do_action('get_header') @endphp
    @include('partials.header')
    <main class="c-page-container">
      @if (is_front_page())
        @include('partials.homepage-header')
      @else
        @include('partials.page-header')
      @endif
      @yield('content')
    </main>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
