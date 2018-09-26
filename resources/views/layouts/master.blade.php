<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    @include('layouts.head')
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
