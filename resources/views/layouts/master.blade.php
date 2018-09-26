<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    @include('layouts.head')

    <style type="text/css">
      .linked-in{
     background-color:#007bb6;
      }
     .facebook{
         background-color:#3b5998;
     }
     .twitter{
         background-color:#1da1f2;
     }
     .google{
         background-color:#f63e28;
      }
     .social-icon {
      width: 30px;
      height: 30px;
      font-size: 15px;
      color: #fff;
      text-align: center;
      margin-right: 10px;
      padding-top: 7px;
      border-radius: 50%;
      }
    </style>
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
