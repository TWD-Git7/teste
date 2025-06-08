<!DOCTYPE html>
<html lang="pt" class="h-100">



<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <!-- PAGE TITLE HERE -->
    <!-- PAGE TITLE HERE -->
    <title>SG-Bolsa de Estudo</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">
    <meta name="description" content="">
    <meta name="og:title" content="SG-Bolsa de Estudo">
    <meta name="og:description" content="">
    <meta name="twitter:title" content="SG-Bolsa de Estudo">
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
    <link href="{{ asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">

            @yield('content');

        </div>
    </div>


    <!--**********************************
          Scripts
      ***********************************-->

    <script>
        var enableSupportButton = '1'
    </script>
    <script>
        var asset_url = '{{ asset('assets/') }}'
    </script>

    <script src="{{ asset('assets/vendor/global/global.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('assets/js/custom.min.js" type="text/javascript') }}"></script>
    <script src="{{ asset('assets/js/deznav-init.js" type="text/javascript') }}"></script>

</body>

</html>
