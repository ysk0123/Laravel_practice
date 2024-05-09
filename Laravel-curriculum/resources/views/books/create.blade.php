<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="expires" content="604800">
  <meta name="format-detection" content="email=no,telephone=no,address=no">
  <title>@yield('title')| Laravel</title>
  <meta name="description" content="@yield('description','トップページのdescriptionです')">
  <link rel="stylesheet" href="{{ asset('assets/style.css')}}">
</head>
<body>
  <header>
@include('front.partials.header')
  <main>
    <div class="main">
    @yield('content')
</div>
  </main>
@include('front.partials.footer')
</body>
</html>
