<?php 
$names[] = $argv[1];
if (count($names) > 0) {
    foreach ($names as $name) {
        echo preg_replace('/(\w+)(\-)(\w+)(\-)(\w+)/' , ' $5$4$3$2$1', $name);
    }
}



?>