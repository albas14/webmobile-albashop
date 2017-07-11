<?php
error_reporting(0);
function connectdb () {
	$konek=mysql_connect(localhost,root);
	mysql_select_db(product,$konek);
	}
?>