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
      </div>
    </div>
	
	<div class="col-sm-8">
	<form class="form-horizontal" method="POST" >
<div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value=<?php
		echo $_REQUEST['email'];?>>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="qty">Jumlah :</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="qty" id="qty" placeholder="Number Only">
      </div>
    </div>
 <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-primary" name="ya" value="Add"></button>
      </div>
    </div>
 <?php
 $total=$_POST[qty]*$data[product_price];
 if($_POST[ya]=="Add")
 {
	$perrs=mysql_query("insert into `order` (`id_product`,`qty`,`harga`,`total`,`email`) values ('$data[id_product]','$_POST[qty]','$data[product_price]','$total','$_POST[email]')");
 }
 ?>
	</div>
	</div>
	