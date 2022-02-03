<?php
/////$string = "/internships/12887/";
////$url = "https://stagebank-hbo-ict.irp.nl";
////$string = "/internships/12887/";
///$resStr = str_replace('/', 'him', $string);
//print_r($resStr);
$str = "/internships/12887/";
$replaceWith = 'https://stagebank-hbo-ict.irp.nl';
$findStr = '/';

echo preg_replace('/' . $findStr . '/', $replaceWith, $str, 0);

?>