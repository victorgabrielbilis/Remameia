<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    @include('layouts.head')
  </head>
  <body>
      @include('layouts.bar')
      @include('layouts.modal')
      @include('layouts.navbar')

      @yield('content')

      @include('layouts.footer')
      @include('layouts.scripts')
  </body>
</html>
