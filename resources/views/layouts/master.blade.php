<!DOCTYPE html>
<html>
<head>
  <title>Board</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="/css/app.css" rel="stylesheet">

  <meta name="csrf-token" content="{{ csrf_token() }}">
  <style type="text/css">
    body { padding-top: 70px; }
  </style>
</head>
<body>
  @include('layouts.partials.navbar')
  <main id="app">
    @section('content')
    @show
  </main>

  <script src="/js/app.js"></script>
</body>
</html>
