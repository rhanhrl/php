<?php
/* 
objek adalah sebuah turunan dari sebuah kelas semisal diketahui
sebuah kelas mobil dengan objek warna, model dan type
*/
class mobil {
    public $color;
    public $model;
    public $type;
    public function __construct($color, $model, $type) {
        $this->color = $color; /* fungsi this untuk menunjuk objek yang ingin diakses
        dari sebuah kelas*/
        $this->model = $model;
        $this->type = $type;
    } public function message() {
        return "Mobilku ". $this->model . " ". $this->color . " ". $this->type;
    }
}

$mycar = new mobil("Merah", "BMW", "Sedan");
echo $mycar -> message();
echo " ";
$mycar = new mobil("Hitam", "BMW", "Mpv");
echo $mycar -> message();
?>