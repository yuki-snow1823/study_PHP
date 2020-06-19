<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  {{-- タイトルの埋め込み --}}
  <title>@yield('title')</title>
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
  <p>共通部分が表示されています</p>
  <div class="container">
    @yield('content')
  </div>
</body>
</html>
