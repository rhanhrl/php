<?php
// switch digunakan untuk melakukan tindakan yang berbeda berdasarkan kondisi yang berbeda

$switch = "red";
switch ($switch) {
    case "blue":
        echo "Warna kesukaan kamu adalah biru";
        break;
    case "red":
        echo "Warna kesukaan kamu adalah merah";
        break;
    default:
        echo "GGMU !";
        break;
}

?>