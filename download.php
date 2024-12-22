
<html>
  <head><title>force download</title><head>
  <style>button{margin:5px;cursor:pointer;}</style>
  <body>
  <h3>Force Download File</h3>
  <p>Click Button to download file</p>
    <button onclick="JavaScript:window.location.href='download.php?file=beach.jpg';"> Download Image</button><br />
    <button onclick="JavaScript:window.location.href='download.php?file=example.pdf';"> Download PDF</button><br />
    <button onclick="JavaScript:window.location.href='download.php?file=example.mp4';"> Download Video</button><br />
   <button onclick="JavaScript:window.location.href='download.php?file=example.mp3';"> Download Audio</button><br />
   <button onclick="JavaScript:window.location.href='download.php?file=example.exe';"> Download exe file</button><br />
 </body>
 </html> 

 <?php
  $dir="download/";
  $filename=$_GET['nama_lengkap'];
  $file_path=$dir.$filename;
  $ctype="application/octet-stream";
  //
  if(!empty($file_path) && file_exists($file_path)){ //check keberadaan file
    header("Pragma:public");
    header("Expired:0");
   header("Cache-Control:must-revalidate");
   header("Content-Control:public");
   header("Content-Description: File Transfer");
   header("Content-Type: $ctype");
   header("Content-Disposition:attachment; filename=\"".basename($file_path)."\"");
   header("Content-Transfer-Encoding:binary");
   header("Content-Length:".filesize($file_path));
   flush();
   readfile($file_path);
   exit();
 }else{
   echo "The File does not exist.";
 }
 ?>