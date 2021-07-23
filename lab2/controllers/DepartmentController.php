<?php
	require_once 'models/db_config.php';
	$err_db="";
	
	if(isset($_POST["add_department"])){
		
		$rs = insertCategory($_POST["name"]);
		if($rs === true){
			header("Location: alldepartment.php");
		}
		$err_db = $rs;
		
	}
	else if (isset($_POST["edit_department"])){
		
		$rs = updateDepartment($_POST["name"],$_POST["id"]);
		if($rs === true){
			header("Location: alldepartment.php");
		}
		$err_db = $rs;
	}
	
	function insertDepartment($name){
		$query="insert into department values (NULL,'$name')";
		return execute($query);
	}
	
	function getAllDepartment(){
		$query = "select * from department";
		$rs = get($query);
		return $rs;
	}
	function getDepartment($id){
		$query = "select * from department where id = $id";
		$rs = get($query);
		return $rs[0];	
	}
	function updateDepartment($name,$id)
	{
		$query = "update department set name='$name' where id = $id";
		return execute($query);
	}

?>