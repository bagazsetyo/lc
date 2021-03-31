<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    @stack('before-style') {{-- yield css sebelum css --}}

    @include('includes.admin.style')

    @stack('after-style') {{-- yield css sebelum css --}}
    <title>Hello, world!</title>
  </head>
  <body>

    @include('includes.admin.nav')
    @yield('content')
    @stack('before-script')
    @include('includes.admin.script')
    @stack('after-script')
  </body>
</html>