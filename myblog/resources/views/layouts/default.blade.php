<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  {{-- タイトルの埋め込み --}}
  <title>@yield('title')</title>
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
  <div class="container">
    @yield('content')
  </div>
</body>
</html>
