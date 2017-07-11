<?php
$per=mysql_query("select * from `product` where id_product='$_GET[id_product]'");
$data= mysql_fetch_array($per);
?>
<div class="container">
<div class="row">

<div class="col-sm-3">
      <div class="panel panel-success">
        <div class="panel-heading"><center><?php echo "$data[product_name]"; ?></center></div>
        <div class="panel-body"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($data[product_image]).'" class="img-responsive" style="width:100%" alt="Image">'; ?></div>
		<div class="panel-footer"><?php echo "Rp. $data[product_price],00"; ?></center></div>
	  </div>
    </div>

<div class="col-sm-3">
      <div class="panel panel-success">
        <div class="panel-heading"><center>Add To My Cart</center></div>
        <div class="panel-body" align="left">
		<form action="?menu=act&id_product=<?php echo"$data[id_product]"; ?>" method="POST">
		Warna	&nbsp;&nbsp;: <select name="warna">
						<option value="merah">Merah</option>
						<option value="kuning">Kuning</option>
						<option value="hijau">Hijau</option>
						<option value="biru">Biru</option>
							  </select><br><br>
		Ukuran	&nbsp;: <select name="ukuran">
					<option value="s">Small</option>
					<option value="m">Medium</option>
					<option value="l">Large</option>
					<option value="xl">Extra Large</option>
				  </select><br><br>
		Quantity: <input type="number" name="qty"
				   min="0" max="1000" step="1" value="1"><br><br>		  
						<input type="submit" value="Submit">
		
		</form>
		</div>
      </div>
    </div>
</div>
</div>