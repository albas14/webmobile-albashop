<div class="container">    
  <div class="row">
<?php

$perintah=mysql_query("select*from `order` order by `id_order` asc ");
echo"
<table class=\"table table-bordered\" style=\"text-align=: center\">
			  <thead>
			    <tr><center>
			      <th><center>NO</th>
			      <th><center>ID Order</th>
				  <th><center>ID Invoice</th>
			      <th><center>ID Produk</th>
				  <th><center>Ukuran</th>
				  <th><center>Warna</th>
			      <th><center>Quantity</th>
			      <th><center>Harga</th>
				  <th><center>Total</th>
				  <th><center>Email</th>
				  <th><center>Status</th>
				  <th><center>action</th>
			    </tr>
			  </thead><tbody>";
			  $no=1;
while ($data= mysql_fetch_array($perintah))
{
echo "
			    <tr>
				<td><center>$no</td>
			      <td><center>$data[id_order]</td>
			      <td><center>$data[id_invoice]</td>
				   <td><center>$data[id_product]</td>
				   <td><center>$data[ukuran]</td>
				   <td><center>$data[warna]</td>
				   <td><center>$data[qty]</td>
				   <td><center>$data[harga]</td>
				   <td><center>$data[total]</td>
				   <td><center>$data[email]</td>
				   <td><center>$data[status]</td>
				   <td><center><a href=\"?menu=hapus&id=$data[id_order]\">Cancel</td>
				</tr>";$no++;	
				}
				echo"
			  </tbody>
			</table><br>";

			
?>
</div>
</div>