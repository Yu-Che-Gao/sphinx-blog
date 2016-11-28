<?php
include 'sphinxapi.php';  
$host = "localhost";  
$port = 3306;  
$sc = new SphinxClient(); // 实例化Api  
$sc->setServer('localhost', 3306); // 设置服务端，第一个参数sphinx服务器地址，第二个sphinx监听端口  
$res = $sc->query('test', 'documents'); // 执行查询，第一个参数查询的关键字，第二个查询的索引名  
//$ids = join(',',array_keys($res['matches']));  
print_r($res); // 获取主键  
?> 