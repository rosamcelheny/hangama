<!DOCTYPE html>
<html>
<head>
  <title><?= $site->title(); ?></title>

  <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <meta name="description" content="Hangama Amiri is an Afghan-Canadian artist who works in painting and video. Amiri's work has been exhibited in Canada and internationally in New York, London, Hong Kong, Italy, France, Morocco and Venice.">
  <meta name="keywords" content="Hangama Amiri, artist, painting">
  <meta name="author" content="Hangama Amiri">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <?php
    echo css('assets/css/normalize.css');
    echo css('assets/css/index.css');
  ?>

  <!-- Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-CNH76L32Q5"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-CNH76L32Q5');
  </script>
</head>
<body class="<?= $page->title() ?>">