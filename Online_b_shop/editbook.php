<?php
	require_once 'controllers/BookController.php';
	$id = $_GET["id"]; // vl pbo
	$c = getBook($id);
?>
<html>
 
         
    <head>
	 <link rel="stylesheet" href="style/login.css">
	   <style>
.red {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 7px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.red1 {
  background-color: #0080ff;
  border: none;
  color: white;
  padding: 7px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

</style>
	  </head>
	   <body>
	
	    <h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-material">
	    <div align="center" >
			
			<div >
				<h4 >Quantity:</h4> 
				<input type="text" name="quantity" value ="<?php echo $c["quantity"];?>">
				
			</div>
			<br>
			<div >
				
				<input type="submit" name="edit_book" class="red" value="Edit Book" >
			</div>
		</form>
	</div>

   </body>
  </html>
