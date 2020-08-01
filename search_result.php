<?php
if($_GET['user']) {
  $q_user = urlencode("user:{$_GET['user']} ");
}
if($_GET['title']) {
  $q_title = urlencode("title:{$_GET['title']} ");
}
if($_GET['body']) {
  $q_body = urlencode("body:{$_GET['body']} ");
}
if($_GET['tag']) {
  $q_tag = urlencode("tag:{$_GET['tag']} ");
}
$base_url = "https://qiita.com/api/v2/items";
$url = "{$base_url}?per_page=100&query={$q_user}{$q_title}{$q_body}{$q_tag}";
$curl = curl_init();
$option = [
  CURLOPT_URL => $url,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_HTTPHEADER =>  ['Authorization: Bearer eee6b4596cd45c491b3e16d32a64a32e86f3178d'],
];
curl_setopt_array($curl, $option);
$response = curl_exec($curl);
$articles = json_decode($response, true);
curl_close($curl);
?>
<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <link rel="icon" href="images/favicon.svg" type="image/svg+xml">
  <title>検索結果 | Qiigle - qiita記事検索サービス</title>
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
  <div class='max-w-3xl mx-auto px-4 pb-8'>
    <div class='text-center mb-4'>
      <a href='/'>
        <h1>
          <span class='green text-6xl'>Q</span>
          <span class='blue text-6xl'>i</span>
          <span class='pink text-6xl'>i</span>
          <span class='green text-6xl'>g</span>
          <span class='black text-6xl'>l</span>
          <span class='blue text-6xl'>e</span>
          <span class='text-xs text-gray-800'>by <a href='https://twitter.com/d0ne1s' class='text-gray-600 text-sm'>d0ne1s</a></span>
        </h1>
      </a>
    </div>
    <div>
      <p>
        <span class='mr-1'>検索結果</span>
        <span class='text-gray-800 text-xs'>(ユーザー名: <?= $_GET['user'] ?>, タイトル: <?= $_GET['title'] ?>, 本文: <?= $_GET['body'] ?>, タグ: <?= $_GET['tag'] ?>)
</span>
      </p>
    </div>
    <div>
      <?php foreach($articles as $a){ ?>
        <div class='py-4'>
          <a href='https://qiita.com/<?= $a['user']['id']; ?>' class='block text-xs' target='_blank'><?= $a['user']['name']; ?> (@<?= $a['user']['id']; ?>)</a>
          <a href='<?= $a['url']; ?>' class='block hover:underline' target='_blank'>
            <h3 class='text-lg' style='color: #1a0dab;'><?= $a['title']; ?></h3>
            <p class='break-all text-xs text-gray-800'><?= substr($a['body'], 0, 200); ?></p>
          </a>
        </div>
      <?php } ?>
    </div>
  </div>


</body>
</html>