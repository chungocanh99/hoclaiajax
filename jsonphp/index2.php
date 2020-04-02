<?php

$json1 = '["s\u01a1n la","h\u00e0 n\u1ed9i","h\u1ed3 ch\u00ed minh"]';

$json2= '{"name":"ch\u1eed ng\u1ecdc \u00e1nh","age":20,"location":"s\u01a1n la"}';

//chuyển chuỗi json sang mảng hoặc đối tượng php

$convert1 = json_decode($json1);
$convert2 = json_decode($json2);

echo '<pre>';
print_r($convert1);
echo '</pre>';

echo '<pre>';
print_r($convert2);
echo '</pre>';


