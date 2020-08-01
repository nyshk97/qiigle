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

print $url;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
$res =  curl_exec($ch);
var_dump($res);
curl_close($conn);
?>