Penjumlahan
<br>

<?php
// variabel rumus
$angka_pertama = 3.9;
$angka_dua = 5;
$penjumlahan = $angka_pertama + $angka_dua;
$bagi = $angka_pertama / $angka_dua;
$x = $angka_dua * $angka_pertama;
$kurang = $angka_dua - $angka_pertama;

// ini untuk perintahnya/output
echo $angka_pertama . "+". $angka_dua ."=". $penjumlahan; 
echo "<br> $angka_dua - $angka_pertama = $kurang"; 
echo "<br> $angka_pertama x $angka_dua =. $x";
echo "<br> $angka_pertama : $angka_dua =. $bagi";
echo "<br> $angka_pertama <sup>$angka_dua</sup> =. ";//sub merupakan perpangkatan buat bilangan berpangkat
echo pow($angka_pertama,$angka_dua);//pow itu perpangkatan PHP
echo "<br>";
print ("Aku danz lagi belajar php ");
?>