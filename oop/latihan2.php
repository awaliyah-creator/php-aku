<?php
class Siswa 
{
    public $nama;
    public $jurusan;
    public $agama;
    public $jk;
    
    public function __construct($d, $e, $f, $g)
    {
        $this->nama = $d;
        $this->jurusan = $e;
        $this->agama = $f;
        $this->jk = $g;
    }

    public function Belajar()
    {
        return "Belajar di sekolah";
    }
}
$siswa1 = new Siswa("Budi", "TKR", "Islam", "Laki-laki");
echo "Nama siswa 1: " . $siswa1->nama . "<br>";
echo "Jurusan siswa 1: " . $siswa1->jurusan . "<br>";
echo "Agama siswa 1: " . $siswa1->agama . "<br>";
echo "Jenis Kelamin siswa 1: " . $siswa1->jk . "<br>";

echo "<hr>";

$siswa2 = new Siswa("Rehan", "TKR", "Islam", "Laki-laki");
echo "Nama siswa 2: " . $siswa2->nama . "<br>";
echo "Jurusan siswa 2: " . $siswa2->jurusan . "<br>";
echo "Agama siswa 2: " . $siswa2->agama . "<br>";
echo "Jenis Kelamin siswa 2: " . $siswa2->jk . "<br>";

echo "<hr>";

$siswa3 = new Siswa("Dadan", "RPL", "Islam", "Laki-laki");
echo "Nama siswa 3: " . $siswa3->nama . "<br>";
echo "Jurusan siswa 3: " . $siswa3->jurusan . "<br>";
echo "Agama siswa 3: " . $siswa3->agama . "<br>";
echo "Jenis Kelamin siswa 3: " . $siswa3->jk . "<br>";

echo "<hr>";

$siswa4 = new Siswa("Maryana", "RPL", "Islam", "Perempuan");
echo "Nama siswa 4: " . $siswa4->nama . "<br>";
echo "Jurusan siswa 4: " . $siswa4->jurusan . "<br>";
echo "Agama siswa 4: " . $siswa4->agama . "<br>";
echo "Jenis Kelamin siswa 4: " . $siswa4->jk . "<br>";