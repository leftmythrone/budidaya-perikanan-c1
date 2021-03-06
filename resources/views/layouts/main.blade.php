<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/img/Circle.png">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    {{-- CSS --}}
    <link rel="stylesheet" href="/css/layouts/main.css">

    {{-- Partials --}}
    <link rel="stylesheet" href="/css/partials/sidebar.css">

    {{-- CSS Company --}}
    <link rel="stylesheet" href="/css/pages/company/headsection.css">

    {{-- CSS User--}}
    <link rel="stylesheet" href="/css/pages/customer/dashboard.css">
    <title>Sukaiwaks | {{ $title }}</title>

  </head>
  <body>
    <header>
      @include('partials.sidebar')
    </header>

    <div class="main-layout">
      @yield('gate')
    </div>

    <footer>
      @include('partials.footer')
    </footer>
    <script src="/js/table.js"></script>\
       <script src="https://cdn.jsdelivr.net/gh/underground-works/clockwork-browser@1/dist/toolbar.js"></script>
  </body>
</html>
