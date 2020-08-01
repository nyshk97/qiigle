<!DOCTYPE html>
<html lang='ja'>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <!-- OGP -->
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@d0ne1s" />
  <meta property="og:url" content="https://qiigle.com" />
  <meta property="og:title" content="Qiigle - qiita記事検索サービス" />
  <meta property="og:description" content="Qiitaの記事を検索するサービスです。ユーザー名、タイトル、本文、タグの複数条件で検索することができます。" />
  <meta property="og:image" content="https://qiigle.com/ogp.png" />
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123762216-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-123762216-3');
  </script>
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <link rel="icon" href="favicon.svg" type="image/svg+xml">
  <title>Qiigle - qiita記事検索サービス</title>
</head>
<body>
  <style>
    .green {
      color: #5bad10;
    }
    .light-green {
      color: #54c000;
    }
    .blue {
      color: #4092d4;
    }
    .pink {
      color: #eadad1;
    }
    .black {
      color: #3b3e3e;
    }
  </style>
  <div class='max-w-3xl mx-auto px-4'>
    <div class='text-center mb-4'>
      <a href='/'>
        <h1>
          <span class='green text-6xl'>Q</span>
          <span class='blue text-6xl'>i</span>
          <span class='pink text-6xl'>i</span>
          <span class='green text-6xl'>g</span>
          <span class='black text-6xl'>l</span>
          <span class='blue text-6xl'>e</span>
          <span class='text-xs text-gray-800'>by <a href='https://twitter.com/d0ne1s' class='text-gray-600 text-sm' target='_blank'>d0ne1s</a></span>
        </h1>
      </a>
    </div>
    <div class='mb-6'>
      <p class='text-sm text-center text-gray-800'>Qiitaの記事を検索します</p>
    </div>
    <form action='search_result.php'>
      <div class="bg-white rounded-lg">
        <div class="grid lg:grid-cols-2 gap-6">
          <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
            <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
              <p>
                <label for="user" class="bg-white text-gray-600 px-1">ユーザー名</label>
              </p>
            </div>
            <p>
              <input id="user" name='user' autocomplete="false" tabindex="0" type="text" placeholder='d0ne1s' class="py-1 px-1 text-gray-900 outline-none block h-full w-full">
            </p>
          </div>
          <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
            <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
              <p>
                <label for="title" class="bg-white text-gray-600 px-1">タイトル</label>
              </p>
            </div>
            <p>
              <input id="title" name='title' autocomplete="false" tabindex="0" type="text" placeholder='Rubocopを使ってみた' class="py-1 px-1 outline-none block h-full w-full">
            </p>
          </div>
          <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
            <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
              <p>
                <label for="body" class="bg-white text-gray-600 px-1">本文</label>
              </p>
            </div>
            <p>
              <input id="body" name='body' autocomplete="false" tabindex="0" type="text" placeholder='.rubocop.yml' class="py-1 px-1 outline-none block h-full w-full">
            </p>
          </div>
          <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
            <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
              <p>
                <label for="tag" class="bg-white text-gray-600 px-1">タグ</label>
              </p>
            </div>
            <p>
              <input id="tag" name='tag' autocomplete="false" tabindex="0" type="text" placeholder='Ruby' class="py-1 px-1 outline-none block h-full w-full">
            </p>
          </div>
        </div>
        <div class="mt-3 pt-3 text-center">
          <button class="rounded text-gray-100 px-8 py-2 hover:shadow-inner hover:bg-blue-700 transition-all duration-300 hover:opacity-75" style='background: #54c000'>
            検索
          </button>
        </div>
      </div>
    </form>
  </div>
</body>
</html>