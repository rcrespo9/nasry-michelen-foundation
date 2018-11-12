<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @include('partials.svg-symbols')
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div class="c-site-container">
      <main class="c-site-content">
        @yield('content')
        @include('partials.donate-prompt')
      </main>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
