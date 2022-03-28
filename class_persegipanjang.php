<?php
class PersegiPanjang {
    public $panjang, $lebar, $hasil;

    public function __construct($panjang = 12, $lebar = 10) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function hitungLuas() {
        return $this->panjang * $this->lebar;
    }

    public function hitungKeliling() {
        return 2 * ($this->panjang + $this->lebar);
    }
}

$luas = new PersegiPanjang();
$keliling = new PersegiPanjang();

echo "Menghitung Luas dan Keliling Persegi Panjang";
echo "<br/>Panjang : 12";
echo "<br/>Lebar : 10";

echo "<br/>";
echo "Luas dari persegi panjang : ".$luas->hitungLuas();
echo "<br/>";
echo "Keliling dari persegi panjang : ".$keliling->hitungKeliling();
?>
