<?php

$nilai = 85;

echo 'Memeriksa Predikat Variabel Nilai <br><br>';
echo "<b> Nilai Anda : $nilai <br></b>";

if ($nilai >=85 && $nilai <=100) 
{
    echo "Predikat Nilai Anda = A <br>";
    echo "Mengagumkan, Ayo Pertahankan !";
}
else if ($nilai >=75 && $nilai <=84)
{
    echo "Predikat Nilai Anda = B <br>";
    echo "Sudah Bagus, Tetap Konsisten !";
}
else if ($nilai >=60 && $nilai <=74)
{
    echo "Predikat Nilai Anda = C <br>";
    echo "Cukup, Ayo Lebih Baik Lagi !";
}
else if ($nilai >=50 && $nilai <=59)
{
    echo "Predikat Nilai Anda = D <br>";
    echo "Kurang Cukup, Belajar Lebih Giat Lagi !";
}
else
{
    echo "Predikat Nilai Anda = E <br>";
    echo "Sangat Tidak Cukup, Anda Harus Mengulang !";
}
?>