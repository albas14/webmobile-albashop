<div class="container">
  <h2>Silahkan Login </h2>
  <form class="form-horizontal" action="gologin.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value=<?php
		echo $_REQUEST['email'];?>>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Enter password">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary"> Submit</button>
      </div>
    </div>
	<?php
	if(md5($_REQUEST['email'])==$_REQUEST['errcode']){
		?>
		<div class="form-group"> 
		<div class="col-sm-offset-2 col-sm-10">
		<font color ="red">Login gagal. Silahkan ulangi lagi</font>
		 </div>
		  </div>
		  <?php
	}
	?>
  </form>
</div>



