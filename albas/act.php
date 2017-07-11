
<?php
$warna=$_POST['warna'];
$ukuran=$_POST['ukuran'];
$qty=$_POST['qty'];
$per=mysql_query("select * from `product` where id_product='$_GET[id_product]'");
$data= mysql_fetch_array($per);
$total=($qty*$data['product_price']);
$email=$_COOKIE['email'];
$perintah=mysql_query("insert into `order` (`id_product`,`qty`,`harga`,`total`,`email`,`ukuran`,`warna`) Values ('$data[id_product]','$qty','$data[product_price]','$total','$email','$ukuran','$warna')");
if($perintah){
		echo"
			<script language=javascript type=text/javascript>
			alert('data behasil disimpan');
			document.location='?menu=chart';
			</script>
		";
		}
		else{
		echo"
			<script language=javascript type=text/javascript>
			alert('data gagal disimpan');
			document.location='?menu=chart';
			</script>
		";
		}
//header('Location:latihan/?menu=chart');
?>