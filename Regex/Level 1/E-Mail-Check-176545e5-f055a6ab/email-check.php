<?php 

$nummer1 = $argv[1];
$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';

if (preg_match_all($regex , $nummer1)) {
    echo "Match";
} else {
    echo "No match";
}





?>