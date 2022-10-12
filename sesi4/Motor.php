<?php

class Motor
{
    public $merk;
    public $jenis;
    public $warna;
    public $plat;
    public $bensin;

    public function __construct($merk, $jenis, $warna, $plat, $bensin)
    {
        $this->merk = $merk;
        $this->jenis = $jenis;
        $this->warna = $warna;
        $this->plat = $plat;
        $this->bensin = $bensin;
    }

    public function nyalainMotor()
    {
        echo "Nyalain Motor dengan plat $this->plat";
    }

    public function jalan($data)
    {
        $this->bensin = $this->bensin - ($data / 10);
        echo "<br>";
        echo "Telah menempuh jarak =  " . $data / 100 . "Km";
        echo "<br>";
        echo "Sisa Bensin = " . $this->bensin / 1000 . " Liter ";
    }
}


$motorica = new Motor("Honda beat", "Matic", "Hitam", "F3158EE", 4000);
$motorica->nyalainMotor();
echo "<br>Bensin Awal = " . $motorica->bensin / 1000 . "Liter";
$motorica->jalan(8000);
