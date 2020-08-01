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
$url = "{$base_url}?query={$q_user}{$q_title}{$q_body}{$q_tag}";

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
  <title>Document</title>
</head>
<body>
  <?php foreach($articles as $a){ ?>
    <div style='border: solid 1px #ddd; padding: 8px; margin-bottom: 8px'>
      <p><?= $a['title']; ?></p>
      <p><a href='<?= $a['url']; ?>'><?= $a['url']; ?></a></p>
    </div>
  <?php } ?>
</body>
</html>