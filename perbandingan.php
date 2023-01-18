<?php

//operator aritmatics
/* terdapat operator + - * / % ** */

$angka = 12;
$angka2 = 13;
$angka3 = $angka + $angka2;
echo $angka3;

// operator assignment
/* 
+= tambah sama dengan
-= kurang sama dengan
/= bagi sama dengan
*= kali sama dengan
%= modulus sama dengan
*/

$assign = 10;
$assign2 = 20;
$assign3 = $assign += $assign2;
echo $assign;

//operator comparison
/*
== sama dengan
=== identik
< lebih kecil dari
> lebih besar dari 
<> tidak sama dengan
<= lebih kecil sama dengan
>= lebih besar sama dengan
!= tidak sama dengan
!== tidak sama dengan identik
*/

$perbandingan = 20;
$perbandingan2 = 20;
$perbandingan3 = $perbandingan == $perbandingan2;
echo $perbandingan3;
?>