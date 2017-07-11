<?php
$per=mysql_query("select * from `product` where id_product='$_GET[id_product]'");
$data= mysql_fetch_array($per);
?>
<div class="container">
<div class="row">
		<div class="col-sm-4">
			<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($data[product_image]).'" class="img-responsive" style="width:100%" alt="Image">'; ?><br>
			<center><h1><?php echo "$data[product_status]"; ?><h1><br></center>
		</div>
	<div class="col-sm-8">
		<center><h1><?php echo "$data[product_name]"; ?><h1/><br>
		<h2><?php echo "$data[product_desc]"; ?><h2/>
		<?php 
		$harga=number_format($data[product_price],0,',','.');
		?>
		<h2><?php echo "Rp.$harga,00"; ?><br>
		<?php echo"<a href=\"?menu=addcart&id_product=$data[id_product]\"> ";?> Add To My Cart</h2></center>
	</div>
</div> 
<div class="row"><br></div>
</div>