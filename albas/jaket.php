
<div class="container">    
  <div class="row">
<?php
connectdb();

echo "<div class=\"row\">";
$per=mysql_query("select * from `product` where product_category='jaket'");
while ($data= mysql_fetch_array($per))
{
	echo" 
    <div class=\"col-sm-3\">
      <div class=\"panel panel-success\">
        ";
		echo '<div class="panel-body"> <img src="data:image/jpeg;base64,'.base64_encode($data[product_image]).'" class="img-responsive" style="width:100%" alt="Image"></div>';
			echo "
		<div class=\"panel-footer\"><center><a href=\"?menu=detail&id_product=$data[id_product]\">$data[product_name]</a></center></div>
		</div>
      </div>
    
	";
	

}	
?>
</div>
      </div>