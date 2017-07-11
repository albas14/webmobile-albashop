
<?php
error_reporting(0);
Session_start();
include "koneksi.php"; 

connectdb();
$ver = verifikasi($_POST[username],$_POST[password]);
if ($ver[0]=="valid")
	{ 
	
		echo "<h1>SELAMAT DATANG Bpk. $_SESSION[username]</h1>";
		
	}
	
			
?>
