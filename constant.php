<?php
/* Constant adalah pengidentifikasi untuk nilai sederhana, tidak bisa diubah di dalam skrip,
dan diawali dengan huruf atau _ tanpa $. menggunakan sintaks define()
*/
define("Nama", "Raihan Herlambang"); //tanpa case-insensitive
echo Nama;

define("Prodi", "Teknik Informatika", false); //menggunakan case-insensitive
echo Prodi;

define("Cars", ["Toyota", "Suzuki", "Honda", "Mitsubishi"]); // dengan array
echo Cars[0];

define("Greeting", "Kota Sukabumi"); //menggunakan fungsi

function mytest() {
    echo Greeting;
}

mytest();
?>