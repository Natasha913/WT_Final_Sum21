<?php include 'header.php';
	include 'controllers/DeliverymanController.php';
?>
<html>

      <head>
	         <link rel="stylesheet" href="style/mystyle.css">
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
	   <script>
		var hasError=false;
		function get(id){
			return document.getElementById(id);
		}
		function validate()
		{
			refresh();
			
			if(get("uname").value=="")
			{
				hasError = true;
				get("err_uname").innerHTML = "*Username Req";
			else if(get("uname").value.length <=6)
			 {
				hasError = true;
				get("err_uname").innerHTML = "*Username Must be 6 Characters Long";
			 }
			}
			
			if(get("pass").value=="")
			{
				hasError = true;
				get("err_pass").innerHTML = "*Password Req";
			else if(get("pass").value.length <=8)
			 {
				hasError = true;
				get("err_pass").innerHTML = "*Password must be at least 8 characters";
			 }
			
			}
			
			
			
			return !hasError;
		}
		function refresh(){
			hasError = false;
			get("err_uname").innerHTML ="";
			get("err_pass").innerHTML ="";
			
		}
	</script>
 <body>
<div class="center-login">
	<h1 >For Deliveryman</h1>
	<h5 ><?php echo $err_db;?></h5>
	<form action=""  onsubmit= "return validate()" method="post" >
		<div >
			<h4 >Username</h4> 
			<input type="text" name="uname" value="<?php echo $uname;?>">
			<span id="err_uname"><?php echo $err_uname;?></span>
		</div>
		<div>
			<h4 >Password</h4> 
			<input type="password" name="pass" value="<?php echo $pass;?>">
			<span id="err_pass"><?php echo $err_pass;?></span>
		</div>
		<div >
			<br>
			<div align = "center">
		    <input type="submit" name="login_d" class="red"  value="Login" >
			 <a  href="home.php" class="red1" >Back</a>
		</div>
		
		<div >
			
			<a href="signup_d.php" >Not registered yet? Sign Up</a>
		</div>
	</form>
</div>
</body>
</html>
