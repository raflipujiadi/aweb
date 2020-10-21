<!DOCTYPE html>
<html>

<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
  <script type="text/javascript" src="../../assets/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="../../assets/js/bootstrap.js"></script>
  <script>
    $(document).ready(function() {
      $(".nav-item").click(function() {
        $(".nav-item").removeClass("active");
        $(this).addClass("active");
      });
    });
  </script>
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
</head>