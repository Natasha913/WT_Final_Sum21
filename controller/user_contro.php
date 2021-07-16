<?php
        include 'model/db_config.php';
        $name="";
        $err_name="";
        $uname="";
        $err_uname="";
        $err_db="";
        $has_Error=false;
   
        if(isset($_POST["signup"]))
		{
              if(empty($POST["name"]))
			  {
                  $has_Error = true;
                  $err_name="Name requ";
              }
              else
			  {
                  $name = $_POST["name"];
              }
   
   
              if(empty($POST["uname"]))
			  {
               $has_Error = true;
               $err_uname="Usename requ";
              }
           else
		   {
               $name = $_POST["uname"];
           }
   
           // other vli
           if(!$hasError){
               $rs = insertUser($name,$uname,$_POST["email"],$_POST["pass"]);
			   if($rs === true)
			   {
				   
				   header("Location: login.php");
                }
		         $err_db = $rs;
   
        }
		function insertUser($name,$uname,$email,$pass)
		{
			$query = "insert into user valuess(NULL,'$name','$uname','$pass','$email')";
			echo $query;
			return execute($query);
			
		}
		}	
?>