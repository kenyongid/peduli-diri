<?php

$nik = $_POST['nik'];
$nama_lengkap = $_POST['nama_lengkap'];
$namafile = "files_text.txt";


$content =" nik =  %s   nama =  %s ";

$file = fopen($namafile, "w") or die("stop create file");
fwrite($file, $content);
fclose($file);

header("Content-Disposition:attachment; filename=\"".$namafile."");
header("Content-Type: application/force-download");
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header("Content-Type: text/plain");

echo printf($content, $nik, $nama_lengkap);
?>