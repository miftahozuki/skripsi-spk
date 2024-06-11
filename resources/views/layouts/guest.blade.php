<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
  {{-- <meta http-equiv="X-UA-Compatible" content="ie=edge" /> --}}
  <title>Login</title>
  <!-- CSS files -->
  <link rel="icon" href="{{ asset('assets/img/favicon.ico') }}">
  <link href="{{ asset('assets/css/tabler.min.css?1684106062') }}" rel="stylesheet" />
  <style>
    @font-face {
    font-family: 'Poppins';
    src: url('{{ asset('assets/fonts/Poppins-Regular.ttf') }}');
  }
    :root {
  --tblr-font-sans-serif: 'Poppins';
    }
    #tabel > thead > tr > th{
        background-color: #206bc4;
    }
    .dt-input {
      margin-right: 1rem;
    }
  </style>
</head>

<body  class=" d-flex flex-column">
    <script src="{{ asset('assets/js/demo-theme.min.js?1684106062') }}"></script>
    <div class="page page-center">
      <div class="container container-tight py-4">
        <div class="text-center mb-4">
          <a href="." class="navbar-brand navbar-brand-autodark"><img src="{{ asset('assets/img/logo.png') }}"" height="36" alt=""></a>
        </div>
        @yield('content')
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ asset('assets/js/tabler.min.js?1684106062') }}" defer></script>
    <script>
        const clock=document.querySelector('.clock');
        function digitalClock() {
        var time = new Date();
        var jam = String(time.getHours()).padStart(2, '0');
        var menit = String(time.getMinutes()).padStart(2, '0');
        var detik = String(time.getSeconds()).padStart(2, '0');

        
        clock.innerHTML = clock.innerHTML=`${jam} : ${menit} : ${detik}`;
    }

    digitalClock();
    setInterval(digitalClock, 1000);
    </script>
  </body>
  </html>