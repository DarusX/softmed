<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="{{ asset('css/select2.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/datatables.css')}}">

    </head>
<body>
    <div id="app">
        @include('layouts.navbar')
        @include('layouts.errors')
        <div class="container">
            <div class="row">
                @yield('content')
            </div>
        </div>
  
        
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/select2.min.js')}}"></script>
    <script type="text/javascript" charset="utf8" src="{{asset('js/datatables.js')}}"></script>
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
            paging: false
        })
    </script> 
    @yield('scripts')
</body>
</html>
