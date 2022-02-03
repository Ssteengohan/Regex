<?php 

$nummer1 = $argv[1];
$regex = "/^\d{10}$/";

if (preg_match_all($regex , $nummer1)) {
    echo "Match";
} else {
    echo "No match";
}

?>
