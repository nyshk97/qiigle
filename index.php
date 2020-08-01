<?php
$name = 'namatame';
?>
<!DOCTYPE html>
<html lang='ja'>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>Document</title>
</head>
<body>
  <form action='search_result.php'>
  <div>
    <label for=''>ユーザー名</label>
    <input type='text' name='user'>
  </div>
  <div>
    <label for=''>タイトル</label>
    <input type='text' name='title'>
  </div>
  <div>
    <label for=''>本文</label>
    <input type='text' name='body'>
  </div>
  <div>
    <label for=''>タグ</label>
    <input type='text' name='tag'>
  </div>
  <div>
    <input type='submit' value='検索'>
  </div>
  </form>
</body>
</html>