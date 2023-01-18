<?php
// variable adalah penampung sebuah data

$nama = "Raihan Herlambang";
$umur = 20;
$angka = 15;
$angkalain = 12;
echo "nama saya $nama dan umur saya $umur tahun ";
echo "nama saya ". $nama ."!";
echo $angka + $angkalain;

// variable scope adalah variabel dari skrip yang dapat dirujuk/digunakan

// cakupan global dan lokal
$x = 5;
function mytest() {
    $y = 6;
    echo $y;
}

mytest();
echo $x;

// kata kunci global

$bilangan1 = 12;
$bilangan2 = 13;

function myjob() {
    global $bilangan1, $bilangan2;
    $bilangan2 = $bilangan1 + $bilangan2;
}

myjob();
echo $bilangan2;

// dengan array

$bilangan3 = 20;
$bilangan4 = 10;

function mywork() {
    $GLOBALS ['bilangan4'] = $GLOBALS ['bilangan3'] + $GLOBALS ['bilangan4'];
}

mywork();
echo $bilangan4;

// dengan kata kunci statis

function myexamp() {
    static $bilangan5 = 0;
    echo $bilangan5;
    $bilangan5++;
}

myexamp();
myexamp();
myexamp();
myexamp();

?>