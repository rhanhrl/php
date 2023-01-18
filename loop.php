<?php
// loop atau perulangan 
/*
terdapat for, while, dan do while
for adalah mengulang kode beberapa kali
while adalah mengulang kode beberapa kali jika kondisinya true
do while adalah melalui blok kode sekali, dan kemudian mengulangi loop selama kondisinya benar
foreach digunakan dalam loop array 
*/

$angka = 5;

while ($angka < 10) { //while
    echo "Angka sekarang $angka"; 
    $angka++;
}

for ($i=5; $i < 10; $i++) { //for
    echo "Nilai sekarang $i";
}

$x = 5;

do { // do while
    echo "Nomer sekarang $x";
    $x++;
} while ($x <= 10);

$array = ["Raihan", "Herlambang", 14, 2002];

foreach ($array as $values) { //foreach
    echo "Array $values";
}

$array2 = ["Raihan"=>"14", "Herlambang"=>"12"];

foreach ($array2 as $value => $val ) {
    echo "Array $value = $val";
}

// Adapun break yang fungsinya untuk keluar dari dalam program

for($i = 5; $i < 10; $i++) {
    if($i == 9) {
        break;
    }
    echo "Bilangan sekarang adalah $i";
}
?>