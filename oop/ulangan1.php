<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>TAGIHAN LISTRIK</legend>
        <form action="" method="post">
        <label>Nama Pemilik Rumah:</label><br>
        <input type="text" name="nama" required><br><br>
        <label>Jumlah Pemakaian Listrik (kWh):</label><br>
        <input type="number" name="pemakaian" required><br><br>
        <input type="submit" value="Tagih">
        </form>
    </fieldset>
    <?php
class TagihanListrik {
    public $nama;
    public $pemakaian;
    public $biayaTetap;
    public $biayaPerKwh;
    public $biayaTambahan;
    public $pajakPpn;

    public function __construct($nama, $pemakaian) {
        $this->nama = $nama;
        $this->pemakaian = $pemakaian;
        $this->biayaTetap = 50000;
        $this->biayaPerKwh = 1500;
        $this->biayaTambahan = 100000;
        $this->pajakPpn = 0.10;
    }

    public function hitungTagihan() {
        $biayaPemakaian = $this->pemakaian * $this->biayaPerKwh;
        $tambahan = ($this->pemakaian > 500) ? $this->biayaTambahan : 0;
        $subtotal = $this->biayaTetap + $biayaPemakaian + $tambahan;
        $ppn = $subtotal * $this->pajakPpn;
        $total = $subtotal + $ppn;

        return [
            'nama' => $this->nama,
            'pemakaian' => $this->pemakaian,
            'biaya_pemakaian' => $biayaPemakaian,
            'biaya_tambahan' => $tambahan,
            'ppn' => $ppn,
            'total' => $total
        ];  
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $pemakaian = $_POST['pemakaian'];

    $tagihan = new TagihanListrik($nama, $pemakaian);
    $hasil = $tagihan->hitungTagihan();

    echo "<h3>Hasil Tagihan Listrik</h3>";
    echo "Nama: " . $hasil['nama'] . "<br>";
    echo "Pemakaian: " . $hasil['pemakaian'] . " kWh<br>";
    echo "Biaya Pemakaian: Rp " . number_format($hasil['biaya_pemakaian'], 0, ',', '.') . "<br>";
    echo "Biaya Tambahan: Rp " . number_format($hasil['biaya_tambahan'], 0, ',', '.') . "<br>";
    echo "PPN (10%): Rp " . number_format($hasil['ppn'], 0, ',', '.') . "<br>";
    echo "Total Tagihan: Rp " . number_format($hasil['total'], 0, ',', '.');
}
?>
</body>
</html>
