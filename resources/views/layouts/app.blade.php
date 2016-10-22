<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>{{ config('app.name') }}</title>
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="generator" content="">
  <link rel="icon" type="image/png" href="">
  <link rel="apple-touch-icon" type="image/png" href="">
  <link rel="icon" sizes="144x144" href="">
  <meta name="theme-color" content="#ffffff">
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=yes">

  <!-- Styles -->
  <link href="/css/app.css" rel="stylesheet">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="fragment" content="!">

  <!-- Scripts -->
  <script>
  window.Laravel = <?php echo json_encode([
    'csrfToken' => csrf_token(),
  ]); ?>
  </script>
</head>
<body>
  <section id="main">
    @include('sections.header')
    <div id="main-outlet" class="wrap">
      @yield('content')
    </div>
    @include('sections.footer')
  </section>
  <div id="offscreen-content">
  </div>
  <!-- Scripts -->
  <script src="/js/app.js"></script>
</body>
</html>
