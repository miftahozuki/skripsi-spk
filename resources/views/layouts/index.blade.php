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

</body>

</html>