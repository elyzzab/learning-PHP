<?php

/*
  "The Hitchhiker's Guide to PHP Math Functions" Project (index.php file only)
  Chapter: PHP Built-in Functions
  ---
  Task: "Each step of the project provides a math operation that can be completed using built-in
  PHP functions. Use the documentation to find them and apply them correctly to get the answer
  to life, the universe, and everything."
*/


$initial = '555';

$a = octdec($initial);
echo $a;

$b = deg2rad($a);
echo "\n" . $b;

$c = cos($b);
echo "\n" . $c;

$d = round($c, 3);
echo "\n" . $d;

$e = log($d);
echo "\n" . $e;

$f = abs($e);
echo "\n" . $f;

$g = acos($f);
echo "\n" . $g;

$h = rad2deg($g);
echo "\n" . $h;

$i = floor($h);
echo "\n" . $i;

$j = $i - 47;
echo "\n" . $j; // 42: the answer to the universe
