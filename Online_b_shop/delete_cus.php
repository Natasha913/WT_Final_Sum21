<?php

     require_once '../Online_b_shop/models/db_config.php';
     $id = $_GET['id'];
	 $query = "DELETE FROM cus WHERE id = '$id'";
     get($query);
	  header("Location: all_cus.php");
?>