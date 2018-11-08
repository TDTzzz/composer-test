<?php

require_once './vendor/autoload.php'; // 加载自动加载文件

use Animal\Dog\Dog;
use Animal\Cat\Cat;

$dog=new Dog();
$cat=new Cat();

echo $dog->detail();
echo $cat->detail();
