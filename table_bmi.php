<?php

require_once 'hasil_bmi.php';
$bmi1 = [
  ["nama" => "chwey",
      "bb" => 55,
      "tb" => 155,
      "umur" => 20,
      "jk" => "lk",
      "bmi" => "18.5",
      "ket" => "Pasien Normal (Ideal)"],
  ["nama" => "wisnu",
      "bb" => 70,
      "tb" => 195,
      "umur" => 29,
      "jk" => "lk",
      "bmi" => "18.5",
      "ket" => "Pasien Normal (Ideal)"]
];

$bmi2 = [
  "nama" => $_POST['nama'],
  "bb" => $_POST['bb'],
  "tb" => $_POST['tb'],
  "umur" => $_POST['umur'],
  "jk" => $_POST['jk'],
  "bmi" => $pasien_bmi1->printbmi(),
  "ket" => $pasien_bmi1->hasilbmi()
];

array_push($bmi1, $bmi2);
?>




<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Berat Badan</th>
      <th scope="col">Tinggi Badan</th>
      <th scope="col">Umur</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Hasil Bmi</th>
      <th scope="col">Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($bmi1 as $c){
    ?>
    <tr>
      <td><?= $c ['nama']   ?></td>
      <td><?= $c ['bb']   ?></td>
      <td><?= $c ['tb']   ?></td>
      <td><?= $c ['umur']   ?></td>
      <td><?= $c ['jk']   ?></td>
      <td><?= $c ['bmi']   ?></td>
      <td><?= $c ['ket']   ?></td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>