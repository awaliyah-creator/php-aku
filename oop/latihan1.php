<?php
class Motor 
{
    public $nama;
    public $warna;
    public $jenis;
    
    public function __construct($a, $b, $c)
    {
        $this->nama = $a;
        $this->warna = $b;
        $this->jenis = $c;
    }

    public function Jalan()
    {
        return "Motor itu akan di nyalakan";
    }
}
$motor1 = new Motor("Scoopy", "Putih", "Matic");
echo "Nama motor 1: " . $motor1->nama . "<br>";
echo "Warna motor 1: " . $motor1->warna . "<br>";
echo "Jenis  motor 1: " . $motor1->jenis . "<br>"; 