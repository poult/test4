<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 23.03.2017
 * Time: 7:58
 */
$companies = [
    "Microsoft" => ["Programmer", "PR", "Office Manager"],
    "Google" => ["IT", "Web-design"],
    "Mozilla" => ["PR", "C++ Programmer"]
];
//***************

// можете используйте тег pre для форматирования вывода
echo "<pre>";
print_r($companies);
echo "</pre>";