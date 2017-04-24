<?php 
$baglanti = @mysql_connect('localhost', 'root', '');
$veritabani = @mysql_select_db('yazlabproje');
 
if($baglanti && $veritabani) {  
//echo "baglanti kuruldu";
} 
else {
   echo 'Bağlantı kurulamadı.';
}
mysql_query("SET NAMES utf8");

session_start();
?>