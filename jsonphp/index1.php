<?php

$phpArray = array("sơn la","hà nội","hồ chí minh");

class Student {
    public $name;
    public $age;
    public $location;
    public function __construct($name,$age,$location)
    {
        $this->name=$name;
        $this->age=$age;
        $this->location=$location;

    }
}

$anh = new Student("chử ngọc ánh",20,"sơn la");

echo '<pre>';
print_r($phpArray);
echo '</pre>';

echo '<pre>';
print_r($anh);
echo '</pre>';

/*
 * chuyển đổi từ mảng hoặc đối tượng trong php thành chuỗi json
 */
$phpJson1 = json_encode($phpArray);

echo '<pre>';
print_r($phpJson1);
echo '</pre>';

$phpJson2 = json_encode($anh);
echo '<pre>';
print_r($phpJson2);
echo '</pre>';