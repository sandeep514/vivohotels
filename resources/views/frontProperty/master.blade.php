<!doctype html>
<html lang="en">
    @include('frontProperty.components.head')
    <body>
        @include('frontProperty.components.header')

        @yield('content')

        @include('frontProperty.components.footer')
        @include('frontProperty.components.script')

        @yield('javascript')
  </body>
</html>