<?php


class pasien {
    public $nama,
           $bb,
           $tb,
           $umur,
           $jk;

    public function __construct($nama, $bb, $tb, $umur, $jk){
        $this->nama = $nama;
        $this->bb = $bb;
        $this->tb = $tb;
        $this->umur = $umur;
        $this->jk = $jk;
    }
    
    public function printbmi(){
        $this->tb = $_POST['tb']/100;
        $tb_hitung = $this->tb * $this->tb;
        $tb_hasil = number_format($tb_hitung, 2, '.', '');
        $hasil = $_POST['bb'] / $tb_hasil;
        $pasien_bmi = number_format($hasil, 1, '.', '');
        return $pasien_bmi;
    }
    public function hasilbmi(){
        $pasien_bmi=$this->printbmi();
        if ($pasien_bmi <= 18.5) {
            return "Pasien Kekurangan Berat Badan";
        }
        else if ($pasien_bmi > 18.5 AND $pasien_bmi <= 24.9) {
            return "Pasien Normal (Ideal)";
        }
        else if ($pasien_bmi > 25.0 AND $pasien_bmi <= 29.9) {
            return "Pasien Kelebihan Berat Badan";
        }
        else {
            return "Pasien Obesitas";
        }
    }
}



$pasien_bmi1 = new pasien ($_POST ['nama'], $_POST['bb'], $_POST['tb'], $_POST['umur'], $_POST['jk']);

echo "<hr>";
echo "<br>";
echo "Output Hasil Data Pasien BMI";
echo "<br>";
echo "<br>";
echo "<br>";
echo "Nama : $pasien_bmi1->nama";
echo "<br>";
echo "Berat Badan : $pasien_bmi1->bb";
echo "<br>";
echo "Tinggi Badan : $pasien_bmi1->tb";
echo "<br>";
echo "Umur : $pasien_bmi1->umur";
echo "<br>";
echo "Jenis Kelamin : $pasien_bmi1->jk";
echo "<br>";
echo "Hasil BMI : " . $pasien_bmi1->printbmi();
echo "<br>";
echo "Keterangan BMI : " . $pasien_bmi1->hasilbmi();
echo "<br>";

?>