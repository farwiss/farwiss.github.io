<?php
$filefoto= (object) @$_FILES['foto_sim'];

$listPesanError=[];

if (!@$filefoto->name) {
    array_push($listPesanError, "File Foto Tidak Boleh Kosong");
}
if (!@$filefoto->size > 1000*1000) {
    array_push($listPesanError, "Ukuran Maksimal FIle 1 MB");
}
$ekstensi= [
    'image/png', 
    'image/jpg',
    'image/jpeg',
    'image/gif',
    'image/svg'
];
if (!in_array (@$filefoto->type, $ekstensi)){
    array_push($listPesanError, "Ekstensi File Tidak Diizinkan");
}
if (!in_array(mime_content_type($filefoto->tmp_name), $ekstensi)){
    array_push($listPesanError,"Type File Tidak Diizinkan.");
}
if ($listPesanError) {
    foreach($listPesanError as $PesanError){
    echo "<strong style ='color : red'> $PesanError</strong> <br>";    
}
    echo "<a href ='index.html'>Kembali</a>";
    die();
}

$folderUpload = "/assets/uploads";
if (!is_dir($folderUpload)){
    mkdir($folderUpload, 077, $rekursif= true);
}
$uploadFotoSukses= move_uploaded_file(
    $filefoto->tmp_name, "{u$folderUpload}/$filefoto->name}"
);