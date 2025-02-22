<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noindex">
    <title>M&C | Wedding Planner</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link id="pagestyle" type="text/css" href="{{asset('Back/css/bootstrap-backoffice.css')}}" rel="stylesheet" />
    <link id="pagestyle" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />

    <!-- ================== END BASE CSS STYLE ================== -->
    @yield('styles')
</head>

<body class="">
    @yield('contenido')

    {{-- @include('layout/footer') --}}
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{asset('Back/js/popper.min.js')}}"></script>
    <script src="{{asset('Back/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('Back/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('Back/js/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('Back/js/smooth-scrollbar.min.js')}}"></script>
    <script src="{{asset('Back/js/bootstrap-backoffice.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- ================== END BASE JS ==================== -->
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
          var options = {
            damping: '0.5'
          }
          Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
      </script>
    @yield('scripts')

</body>
</html>
