<?php

require_once __DIR__ . "/vendor/autoload.php";

use core\{Db, DataApi, DataUrl, x};
// spl_autoload_register(function ($class) {

//     include __DIR__ . "/core/{$class}.php";
// });


$s = DataApi::getData("https://jsonplaceholder.typicode.com/posts");

// print_r($s);
// if($s==Null){echo 42;};
// x::x($s);
x($s);