<?php

$folderUpload= ".assets/uploads";
if (!is_dir ($folderUpload) ) {
    mkdir ($folderUpload, 0777, $rekursif = true);
}

$files= $_FILES;
$jumlahFile=count ($files ['listGambar'] ['name']);

for ($i=0; $i < $jumlahFile; $i++) {
    $namaFile=$files ($files ['listGambar'] ['name'] [$i]);
    $lokasiTmp=$files ($files ['listGambar'] ['tmp_name'] [$i]);

    echo "nama : $namaFile, tmp: ($lokasiTmp) <br/>"; 

    $namaBaru=uniqid ().'_'. $namaFile;
    $lokasiBaru="{$folderUpload} / {$namaBaru}";
    $prosesUpload=move_uploaded_file ($lokasiTmp )

}