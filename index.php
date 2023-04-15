<?php

class Tes{

}

$a = new Tes();

class Mobil{
    public $nama,
            $merk,
            $warna;
    public function tambahkecepatan(){

    } 

    public function kurangikecepatan(){

    }
}

class produk {
    public $nama = 'nama',
           $jenis = 'jenis',
           $harga = 9999;

    public function __construct($nama, $jenis, $harga){
        $this->nama = $nama;
        $this->jenis = $jenis;
        $this->harga = $harga;
    }
    
    public function printharga(){
        return $this->harga;
    }
}



$produk2 = new produk('Baju putih', 'Kaos Petir Beruang', 14000);


echo "produk 2 : $produk2->nama, $produk2->jenis";
echo "<br>";
echo  "Harga : " . $produk2->printharga();

?>