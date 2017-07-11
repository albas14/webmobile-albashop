<?php
 include('koneksi.php');
connectdb() ;
 $email=$_REQUEST['email'];
 $password=$_REQUEST['pwd'];

 $sql_login="select * from user where email='$email' and password='$password'";
 $query_login=mysql_query($sql_login) or die(mysql_error());
 $data_login=mysql_fetch_array($query_login);

 if(($email==$data_login['email']) and ($password==$data_login['password']))
 {
 //simpan cookie email dan username
 setcookie(email, $data_login['email'], time() + (86400 * 30), "/");
 setcookie(namauser, $data_login['nama'], time() + (86400 * 30), "/");

 //update informasi status login ke tabel user
 $sql_update_user="update user set login_status='logged' where email='$email'";
 $query_update_user=mysql_query($sql_update_user) or die(mysql_error());

 //alihkan ke halaman index
 header('location:index.php');
 }else
 {
 //jika login gagal alihkan ke halaman index
 //error code adalah kode pernyataan untuk menampilkan kegagalan login
 $errorcode=md5($email);
 header('location:index.php?menu=login&email='.$email.'&errcode='.$errorcode);
 }
 ?>