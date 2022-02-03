<?php


$url = $argv[1];
$domain = preg_match("/(https|http)?(:\/\/)?(\w+)?(\.com)?(\/?.*)/", $url, $matches);
if ($domain > 0) {
    echo "protocol:$matches[1]";
    echo "\r\n"; 
    echo "Domein:$matches[3]"; 
    echo $matches[4];
    echo "\r\n"; 
    echo "Path:$matches[5]";
    echo "\r\n"; 
}









?>