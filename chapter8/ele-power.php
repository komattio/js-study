<?php
header('Content-Type: text/xml;charset=UTF-8');
$params = array(
  'appid' => 'power',
  'query' => $_REQUEST['keywd'],
  'result' => 20
);

$url = 'http://setsuden.yahooapis.jp/v1/Setsuden/latestPowerUsage'.http_build_query($params);

print(file_get_content($url));
?>
