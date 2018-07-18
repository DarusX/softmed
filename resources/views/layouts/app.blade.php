<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Material Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('theme/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset('theme/vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{asset('theme/css/fontastic.css')}}">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('theme/css/style.blue.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('theme/css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900');
        body{
            font-family: 'Roboto', sans-serif;
        }
        .btn-xs{
            font-size: 12px;
            line-height: 1.5;
            padding: 1px 5px;
        }
    </style>
  </head>
  <body>
      @yield('content')
    <!-- JavaScript files-->
    <script src="{{asset('theme/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('theme/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('theme/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('theme/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('theme/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('theme/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('theme/js/front.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": "{{csrf_token()}}"
            }
        });
        $(".destroy").click(function () {
            event.preventDefault()
            $.ajax({
                url: $(this).attr("href"),
                method: "POST",
                data: {
                    _method: "DELETE"
                },
                success: (data) => {
                    location.reload()
                }
            })
        })
        $(".table").DataTable({
            paging: false,
            searching: false,
            info: false
        })
        $(".logout").click(function () {
            event.preventDefault()
            $.ajax({
                url: "/logout",
                method: "POST",
                success: function (data) {
                }
            }).always(function () {
                location.reload()
            })
        })
        $(".datepicker").datepicker({
            dateFormat: "yy-mm-dd"
        })
        $("select").select2()
    </script> 
    @yield('scripts')
</body>

</html>