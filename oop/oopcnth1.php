<?php

// properties atau attribute
class Laptop {
    public $warna = "hitam";
    public $merk = "lenovo";

    // method  atau fungsi
    public function mengetik()
    {
        return "mengerjakan tugas";
    }

    public function menonton()
    {
        return "menonton film";
    }
}

// inisiasi (pembuatan object)
$laptop1 = new Laptop();
echo "Laptop ini memiliki warna: " . $laptop1->warna . "<br>";
echo "Merk laptop ini adalah: " . $laptop1->merk . "<br>";
echo "Dengan adanya laptop ini kita bisa: " . $laptop1->mengetik() . "<br>";