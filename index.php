	<form  action="#" name="kayit" method="GET">
       id:<input type="text" name="id"><br /><br />
           
      <input name="gonder" type="submit">
    </form>

<?php 
 
include("includes/config.php");?>

<?php 

	if( isset( $_GET[ 'gonder' ] ) ) { 
	
    // Get input 
    $id = $_GET[ 'id' ]; 
	echo"mert __ $id __";
    // Check database 
		$query  = "SELECT * FROM users WHERE id =$id;"; 
	//$query  = "SELECT * FROM users WHERE id = 2 union select 0,1,version(),3,4;"; 
	echo"<br>query-- $query";
    $result = mysqli_query($conn,  $query ) or die( '<pre>' . ((is_object($conn)) ? mysqli_error($conn) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)) . '</pre>' );

    // Get results 
    while( $row = mysqli_fetch_assoc( $result ) ) { 
        // Get values 
			$idsi=$row["id"];
        $username = $row["username"]; 
        $password  = $row["password"];
		$tel=$row["telephone"];
		$mail=$row["email"];

        // Feedback for end user 
        echo "<pre>ID: {$idsi}<br />username: {$username}<br />password: {$password}<br>{$tel}<br>{$mail}</pre>"; 
    } 

    mysqli_close($conn); 
	echo"mert";
} 	

?>
