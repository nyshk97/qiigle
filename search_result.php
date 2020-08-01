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
];
curl_setopt_array($curl, $option);
$response = curl_exec($curl);
$result = json_decode($response, true);
curl_close($curl);
print $result[0]['title']
?>