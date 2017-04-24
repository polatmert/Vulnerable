<?php 
 
include("includes/config.php");
ob_start();
//session_start();
 
 /*
 $id = $_GET["id"];
$sorgu = "SELECT * FROM uye WHERE id=".$id;
*/
$username = $_GET['username'];
$password = $_GET['password'];
 
$sorgu = mysql_query("select * from users where username='".$username."' and password='".$password."' ") or die(mysql_error());
 
    // Get results 
    while( $row = mysql_fetch_assoc( $sorgu ) ) { 
        // Get values 
        $user = $row["username"]; 
        $pass  = $row["password"]; 
		$id  = $row["id"];
        // Feedback for end user 
		echo"Kişisel Bilgiler";
      	echo "<pre>ID: {$id}<br />username: {$user}<br />password: {$pass}</pre>"; 
    } 

if(mysql_num_rows($sorgu)!=true)
{
	echo"yanlis giris";
}
ob_end_flush();
?>