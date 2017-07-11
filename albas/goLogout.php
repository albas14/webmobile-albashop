<?php
include('koneksi.php');
 $email=$_COOKIE['email'];
connectdb();
 //update informasi status logout ke tabel user
 $sql_update_user="update user set login_status='' where email='$email'";
 $query_update_user=mysql_query($sql_update_user) or die(mysql_error());

 //hapus cookie email dan username
 setcookie(email, '', time() - (86400 * 30), "/");
 setcookie(namauser, '', time() - (86400 * 30), "/");

 //alihkan ke halaman index
 header('location:index.php');
 ?>