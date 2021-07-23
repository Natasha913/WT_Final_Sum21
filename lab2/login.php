<?php
     
	 $uname="";
	 $err_uname="";
	 $pass="";
	 $err_pass="";
	 $hasError=false;
	 
	function validPass($password)
	 {
		 $hasUpper=false;
		 $hasLower=false;
		 $hasNum=false;
		 $hasQM=false;
		 $hasHash=false;
		
		for($i=0; $i<strlen($password);$i++)
	     {
			 if(ctype_upper($password[$i]))
			 {
				 $hasUpper=true;
			 }
			 
			 if(ctype_lower($password[$i]))
			 {
				 $hasLower=true;
			 }
			 if($password[$i] >='0' && $password[$i]<='9')
			 {
                 $hasNum=true;
                
             }
			 
		     if($password[$i]=='#')
			 {
                 $hasHash=true;
                
             }
              if($password[$i]=='?')
			  {
                  $hasQM=true;
                
                }
                
                if($hasUpper && $hasLower && $hasHash || $hasQM && $hasNum)
				{
                    return true;
                }
            
            }
            return false;
            
            
            
        }
		
	 if($_SERVER["REQUEST_METHOD"] == "POST")
	 {
	
		if(empty($_POST["uname"]))
		{
			$err_uname="Username Required";
			$hasError=true;
		}
		elseif(strlen($_POST["uname"])<6)
		{
			$err_uname="Username Must be 6 Characters Long";
			$hasError=true;
		}
		elseif(strpos($_POST["uname"]," "))
		{
			$err_uname="Username should not contain white space";
			$hasError=true;
		}
		else
		{
			$uname=$_POST["uname"];
		}
		if(empty($_POST["pass"]))
		    {
			$err_pass="Password Required";
			$hasError=true;
		    }
			elseif(strlen($_POST["pass"])<8)
			{
                $err_pass="Password must be at least 8 characters";
				$hasError=true;
            }
			
		    elseif(!validPass($_POST["pass"]))
		   {

			$err_pass="Password Must Contain 1 Uppercase,1 Lowercase, 1 Number & (# or ?)";
			$hasError=true;
		    }
		     else
		     {
			$pass=$_POST["pass"];
		     }
		if(!$hasError)
		{
			header("Location: home.php");
		}
		
	 }
	?> 
<html>
    
	<body>
	<div>
	<h1 align="center">Login</h1>
	   
	   <form action="" method="post">
	       <table align="center">
		        <tr>
				     <td><span>Username</span></td>
					<td>:<input type="text" name="uname" value="<?php echo $uname;?>" placeholder="Username">
						<span><?php echo $err_uname;?></span></td>
			    </tr>
				<tr>
				     <td><span>Password</span></td>
					<td>:<input type="password" value="<?php echo $pass;?>" name="pass" placeholder="Password">
					<span><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
				<td><input type="submit" name="submit "value="Login"></td>
				</tr>
		      </table>
			  </form>
	</div>
	
    </body>
</html>	