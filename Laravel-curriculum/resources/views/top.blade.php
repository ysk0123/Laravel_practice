<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="expires" content="604800">
  <meta name="format-detection" content="email=no,telephone=no,address=no">
  <title>トップページ | Laravel</title>
  <meta name="description" content="トップページのdescriptionです">
  <link rel="stylesheet" href="{{ asset('assets/style.css')}}">
</head>
<body>
  <header>
    <div class="header">
      <div class="logo">
        <img src="./assets/images/logo.png" alt="ロゴ">
      </div>
      <nav>
        <ul class="header-nav">
          <li><a href="http://localhost" class="nav_link">home</a></li>
          <li><a href="http://localhost/about" class="nav_link">about</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <main>
    <div class="main">
      <h1 class="page-name">トップページです。</h1>
    </div>
  </main>
  <footer>
    <div class="footer">
      <p class="footer-txt">フッターです。</p>
    </div>
  </footer>
</body>
</html>
</html>
