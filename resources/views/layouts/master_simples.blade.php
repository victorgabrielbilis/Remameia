<!DOCTYPE html>
<html lang="en" dir="ltr">
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
      <script type="text/javascript">
      jQuery(function ($) {

      $(".sidebar-dropdown > a").click(function() {
    $(".sidebar-submenu").slideUp(200);
    if (
      $(this)
        .parent()
        .hasClass("active")
    ) {
      $(".sidebar-dropdown").removeClass("active");
      $(this)
        .parent()
        .removeClass("active");
    } else {
      $(".sidebar-dropdown").removeClass("active");
      $(this)
        .next(".sidebar-submenu")
        .slideDown(200);
      $(this)
        .parent()
        .addClass("active");
    }
    });

    $("#close-sidebar").click(function() {
    $(".page-wrapper").removeClass("toggled");
    });
    $("#show-sidebar").click(function() {
    $(".page-wrapper").addClass("toggled");
    });




    });
      </script>
  </head>
  <body>
    <div class="page-wrapper chiller-theme toggled">
      @include('layouts.sidebar')
      @include('layouts.bar')
      @include('layouts.modal')
      @include('layouts.navbar')

      @yield('content')
      @include('layouts.footer')
    </div>
      </main>
    </div>
      @include('layouts.scripts')
  </body>
</html>
