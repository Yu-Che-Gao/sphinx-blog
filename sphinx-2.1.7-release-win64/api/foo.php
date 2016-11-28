<?php
require ’sphinxapi.php’;
$s = new SphinxClient();
$s->SetServer(’localhost’,9306);
$result = $s->Query(’ 中文 ’);
var_dump($result);
?>