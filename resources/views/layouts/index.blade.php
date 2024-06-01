<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Dashboard - SPK Fuzzy</title>
  <!-- CSS files -->
  <link href="{{ asset('assets/css/tabler.min.css?1684106062') }}" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('assets/bootstrap-icons/font/bootstrap-icons.min.css') }}">
  <link href="{{ asset('assets/dt-table/datatables.min.css') }}" rel="stylesheet">
  <style>
    #tabel > thead > tr > th{
        background-color: #206bc4;
    }
    .dt-input {
      margin-right: 1rem;
    }
  </style>
</head>

<body>
  <script src="{{ asset('assets/js/demo-theme.min.js?1684106062') }}"></script>
  <div class="page">
    <!-- Navbar -->
    @include('layouts.navbar')
    
    
    <div class="page-wrapper">
      @yield('content')
      @include('layouts.footer')
    </div>
  </div>

  <!-- Libs JS -->
  <script src="{{ asset('assets/js/tabler.min.js?1684106062') }}" defer></script>
  <script src="{{ asset('assets/js/jquery-3.7.1.slim.min.js') }}"></script>
  <script src="{{ asset('assets/dt-table/datatables.min.js') }}"></script>
  <script>
  let table = new DataTable('#tabel');
  </script>

</body>

</html>