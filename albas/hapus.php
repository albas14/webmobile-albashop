<?php
$perintah=mysql_query("delete from `order` where `id_order`='$_GET[id]'");
if($perintah){
	echo"
		<script language=javascript type=text/javascript>
		alert('data berhasil dihapus');
		document.location='?menu=chart';
		</script>
	";
	}
	else{
	echo"
		<script language=javascript type=text/javascript>
		alert('data gagal dihapus');
		document.location='?menu=chart';
		</script>
	";
	}
//header('Location:latihan/menu=chart');
?>