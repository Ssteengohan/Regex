<?php
$string = 'student@students.bit-academy.com';
$patterns = '/com/';
$replacements = '\nl';

echo preg_replace($patterns, $replacements, $string);
