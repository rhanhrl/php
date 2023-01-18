<?php
//number adalah jenis tipe data dari php yang berisikan angka
//tipe nya bisa int atau float

$a = 12;
var_dump($a);
var_dump(is_int($a));

$b = 13.12;
var_dump($b);
var_dump(is_float($b));

$c = 1.9e2313;
var_dump($c);

$d = cos(9);
var_dump($d);

$e = 123;
var_dump(is_numeric($e));

$d = "Raihan";
var_dump(is_numeric($d));
?>