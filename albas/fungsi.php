<?php
function verifikasi ($username,$password) 
	{
		//cek username
		$perintah = mysqli_query("select * from `user` where username='$username'");
		$jumlah = mysqli_num_rows($perintah);
		if ($jumlah>0)
			{
			//cek password
			$pasmd5 = md5 ($password);
			$data = mysqli_fetch_array($perintah);
			if ($pasmd5==$data[password])
				{
				$_SESSION[username]=$username;
				$_SESSION[password]=$password;
				$hasil = Array("valid");
				return $hasil;
				}
				else {$hasil= array ("invalid"); return $hasil;}
			}
		else {$hasil= array ("invalid"); return $hasil;}
	}
?>