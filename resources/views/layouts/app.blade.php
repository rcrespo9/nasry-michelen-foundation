<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    <main>
      @if ( is_home() || is_front_page() )
        @include('partials.homepage-header')
      @else
        @include('partials.page-header')
      @endif
      <div class="c-page-content">
        @yield('content')
      </div>
    </main>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
