<?php
class mobil {
    public $model;
    public $type;
    public $warna;
    public $merk;
    public function __construct($model, $type, $warna, $merk) {
        $this -> model = $model;
        $this -> type = $type;
        $this -> warna = $warna;
        $this -> merk = $merk;
    } public function message() {
        return "Mobiku ". $this-> model . " ". $this-> type . " ". $this-> warna . " ". $this-> merk;
    }
}

$mycar = new mobil("Sedan", "Grand", "Merah", "BMW ");
echo $mycar -> message();
echo " ";
$mycar = new mobil("MPV", "Absolute", "Hitam", "Toyota");
echo $mycar -> message();
echo " ";

class human {
    public $nama;
    public $umur;
    public $tgllahir;
    public function __construct($nama, $umur, $tgllahir) {
        $this-> nama = $nama;
        $this-> umur = $umur;
        $this-> tanggallahir = $tgllahir;
    } public function message() {
        return "Namaku ". $this-> nama . " ". $this-> umur . " ". $this-> tanggallahir;
    }
}

$myhuman = new human("Raihan Herlambang", "20 tahun", "14-12-2002");
echo $myhuman -> message();

class smartphone {
    public $merkhp;
    public $modelhp;
    public $processorhp;
    public function __construct($merkhp, $modelhp, $processorhp) {
        $this -> merkhp = $merkhp;
        $this-> modelhp = $modelhp;
        $this -> processorhp = $processorhp;
    } public function message() {
        return "Hpku ". $this-> modelhp . " ". $this-> processorhp;
    }
}

$mysmartphone = new smartphone("Xiaomi", "Touchscreen", "Snapdragon");
echo $mysmartphone -> message();

class home {
    public $typermh;
    public $modelrmh;
    public $alamatrmh;
    public function __construct($typermh, $modelrmh, $alamatrmh) {
        $this-> typerumah = $typermh;
        $this-> modelrumah = $modelrmh;
        $this-> alamatrumah = $alamatrmh;
    } public function message() {
        return "Rumahsaya ". $this->typerumah . " ". $this->modelrumah . " ". $this->alamatrumah;
    }
}
$myhome = new home('Type b', 'vip', "kota bandung");
echo $myhome -> message();
?>