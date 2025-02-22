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
    <link id="pagestyle" type="text/css" href="{{asset('Back/css/bootstrap-backoffice.min.css')}}" rel="stylesheet" />
    <link id="pagestyle" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />

    <style>
        .img-icon {
            transition: transform 0.3s ease;
        }

        .img-icon:hover {
            transform: scale(1.2);
        }

            /* Estilos del spinner */
        .spinner {
            border: 8px solid #f3f3f3; /* Fondo claro */
            border-top: 8px solid #3498db; /* Color del spinner */
            border-radius: 50%;
            width: 40px;
            height: 40px;
            animation: spin 2s linear infinite;
            margin: 0 auto;
            display: none; /* Oculto por defecto */
        }

        /* Animación del spinner */
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Contenedor del spinner */
        .spinner-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 9999;
            display: none; /* Oculto por defecto */
        }

        /* Botón para ejecutar la función */
        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #3498db;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
    <!-- ================== END BASE CSS STYLE ================== -->
    @yield('styles')
</head>

<body class="g-sidenav-show bg-gray-100">
    <div id="spinnerContainer" class="spinner-container">
        <div id="spinner" class="spinner" style="display: block;"> </div>
    </div>
    <div class="min-height-300 bg-primary position-absolute w-100"></div>

    <!--inicio de aside-->
    @include('Back.Layout.asaid')
    <!--fin de aside-->

    <main class="main-content position-relative border-radius-lg ">
        <!--inicio de header-->
        @include('Back.Layout.header')
        <!--fin de header-->

        <!-- INICIO CONTENIDO -->
        <div class="container-fluid py-4">
            @yield('contenido')
        </div>
        <!-- FIN CONTENIDO -->
    </main>

    {{-- @include('layout/footer') --}}
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{asset('Back/js/popper.min.js')}}"></script>
    <script src="{{asset('Back/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('Back/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('Back/js/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('Back/js/smooth-scrollbar.min.js')}}"></script>
    <script src="{{asset('Back/js/argon-dashboard.min.js')}}"></script>
    <script src="https://kit.fontawesome.com/b133fa363f.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
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
