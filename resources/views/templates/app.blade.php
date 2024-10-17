<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  
  @stack('style')
  <link rel="icon" href="{{ 'assets/img/logo.png' }}">
</head>
<body class="bg-slate-50">
  @yield('content-dinamis')

  @stack('script')
  
  <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>
</html>