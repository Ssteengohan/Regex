<?php

$nummer1 = $argv[1];
$pattern = '/(\+\d{2})/';

if (preg_match($pattern, $nummer1, $matches)) {
    echo $matches[0];
} else {
    echo "No Match";
}



?>