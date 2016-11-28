<?php
header("Content-Type:text/html; charset=utf-8");
require 'sphinxapi.php';
$s = new SphinxClient();
$s->SetServer(’localhost’,9306);
$result = $s->Query(’test’);
var_dump($result);
?>
