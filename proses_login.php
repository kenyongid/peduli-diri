<?php

$nik            =$_POST['nik'];
$nama_lengkap   =$_POST['nama_lengkap'];
$fileToUpload     =$_POST['fileToUpload'];


$format = "$nik|$nama_lengkap|$fileToUpload";
$file = file('config.txt', FILE_IGNORE_NEW_LINES);
if(in_array($format, $file)){ //jika data ditemukan 
    session_start();
    $_SESSION['nik'] = $nik;
    $_SESSION['nama_lengkap'] = $nama_lengkap;
    $_SESSION['fileToUpload'] = $fileToUpload;
    
    header('Location:user.php');

}else //jika data tidak ditemukan ?>
    <script type="text/javascript">window
        alert('NIK Yang Anda Masukan Salah!!!.');
        window.location.assign('index.php');
    </script>

