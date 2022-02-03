<?php

$re = '/\b\w{9,100}\b/m';
$str = file_get_contents('script.txt');

if (preg_match_all($re, $str, $a)) {
    print_r($a);
}




?>