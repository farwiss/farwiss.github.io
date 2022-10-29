<?php

//ubah nama menjadi huruf kapital dan kecil di awal tiap kata
$nama = "farwis ilmi";
$ubahnama = ucwords($nama);

echo "1. UBAH HURUF AWAL MENJADI KAPITAL DAN KECIL DI TIAP KATA<br> <br>";
echo "$nama <br>";
echo "=========== <br>";
echo "$ubahnama <br>";
echo "=========== <br>";

$ubahnama2 = explode (" ", strtoupper($ubahnama));
foreach ($ubahnama2 as $nama1) 

echo (lcfirst($nama1)) . " ";
echo "<br><br>";


//pisah variabel
$kata = "Saya Suka Bola";
$pisah = explode (' ', $kata);

$katadepan = $pisah[0];
$katatengah = $pisah[1];
$katabelakang = $pisah[2];

echo "2. MEMISAHKAN VARIABEL MENJADI 3 BUAH VARIABEL <br><br>";

echo "$kata <br><br>";

echo '$katadepan : ';
echo "$katadepan <br>";

echo '$katatengah : ';
echo "$katatengah <br>";

echo '$katabelakang : ';
echo "$katabelakang <br><br>";

//
$kata = "Saya Suka Basket";
$katadepan = substr($kata, 0, 4);
$katatengah = substr($kata, 5, 4);
$kataakhir = substr($kata, 10, 6);

echo "$kata<br><br>";
echo '$katadepan : ';
echo "$katadepan <br>";
echo '$katatengah : ';
echo "$katatengah <br>";
echo '$kataakhir : ';
echo "$kataakhir <br>";




?>
