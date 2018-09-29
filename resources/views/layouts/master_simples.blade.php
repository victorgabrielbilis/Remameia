<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
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
          .btn-custom {
          	padding: 1px 15px 3px 2px;
          	border-radius: 50px;
          }

          .btn-icon {
          	padding: 8px;
          }
          .card-body-icon {
          position: absolute;
          z-index: 0;
          top: -1.25rem;
          right: -1rem;
          opacity: 0.4;
          font-size: 5rem;
          -webkit-transform: rotate(15deg);
          transform: rotate(15deg);
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
      @include('layouts.bar_admin')
      @include('layouts.modal')

      @yield('content')
      @include('layouts.footer')
    </div>
      </main>
    </div>
      @include('layouts.scripts')
  </body>
</html>
