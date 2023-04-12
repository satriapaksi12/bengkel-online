<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>
    <link rel="apple-touch-icon" sizes="76x76" href="/argon/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/argon/img/favicon.png">
    <title>
        Mitra Dashboard
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="/argon/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/argon/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="/argon/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="/argon/css/argon-dashboard.css?v=2.0.2" rel="stylesheet" />
    <style>
        trix-toolbar [data-trix-button-group="file-tools"]{
            display: none;
        }
    </style>
</head>

<body class="g-sidenav-show bg-gray-100">
    <div class="min-height-300 bg-success position-absolute w-100"></div>
    @include('mitra.layout.sidebar')
    @yield('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="/argon/js/core/popper.min.js"></script>
    <script src="/argon/js/core/bootstrap.min.js"></script>
    <script src="/argon/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="/argon/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
          var options = {
            damping: '0.5'
          }
          Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <script src="/argon/js/argon-dashboard.min.js?v=2.0.2"></script>
    <script>
        function get_kecamatan(query = '')
      {
        $.ajax({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          url:"{{ url('/get-kecamatan') }}",
          method:'POST',
          data:{query:query},
          success:function(response)
          {
            $('#kecamatan').html(response);
          }
        })
      }
      $(document).on('change', '#kota', function(){
        var word = $(this).val();
        get_kecamatan(word);
      });
    </script>
</body>

</html>
