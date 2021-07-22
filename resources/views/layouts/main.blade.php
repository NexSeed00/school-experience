<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description">
    <meta property="og:title" content="メタタイトルが入ります">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://seed-tech-school.com">
    <meta property="og:image" content="https://seed-tech-school.com/assets/images/common/ogp.png">
    <meta property="og:site_name" content="シードテックスクール">
    <meta property="og:description" content="トップページの説明が入ります">
    <meta property="og:country-name" content="philippines">
    <meta property="fb:app_id" content="">
    <meta name="twitter:card" content="summary_large_image">

    @yield('scriptldjson')

    <link href="https://fonts.googleapis.com/css?family=Noto+Sans&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/index.css">

  </head>
  <body>

    @include('layouts.header')

    <main class="l-main">
      @yield('content')
    </main>
    <!-- /main -->

    @include('layouts.footer')
  </body>
</html>