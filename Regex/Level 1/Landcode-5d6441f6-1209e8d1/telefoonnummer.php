<?php 

$nummer1 = $argv[1];
$regex = "/^(\+316|06)\d{8}$/";

if (preg_match_all($regex , $nummer1)) {
    echo "Match";
} else {
    echo "No match";
}




?>