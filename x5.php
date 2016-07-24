<?php
set_time_limit(0);
$catalog=json_decode(file_get_contents('http://x5.qq.com/novel/update/catalog.json'),true);
for($i=0;$i<count($catalog['novelList']);$i++){
	$json=json_decode(file_get_contents('http://x5.qq.com/novel/update/chapter' . $i . '.json'),true);
	file_put_contents('novel.txt',base64_decode($json['title'])."\n".base64_decode($json['content']), FILE_APPEND);
}