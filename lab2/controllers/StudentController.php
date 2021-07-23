<?php
	require_once 'models/db_config.php';
	
	$err_db="";
	if(isset($_POST["add_student"])){
		
		
		
		
		
		
		$rs = insertStudent($_POST["name"],$_POST["dept_id"],$_POST["dob"],$_POST["cgpa"],$_POST["credit"]);
		if($rs === true){
			header("Location: allstudent.php");
		}
		$err_db = $rs;
	
	}
	
	function insertStudent($name,$dept_id,$dob,$cgpa,$credit){
		$query="insert into student values (NULL,'$name',$dept_id,$dob,$cgpa,'$credit')";
		return execute($query);
	}
	function getStudent(){
		$query= "select s.*,dept.name as 'dept_name' from student s left join department d on s.dept_id = dept.id";
		$rs = get($query);
		return $rs;
	}
	/*function getStudent($id){
		$query="select * from student where id=$id";
		$rs = get($query);
		return $rs[0];
	}*/
	function updateStudent($name,$dept_id,$dob,$cgpa,$credit,$id){
		$query="update student set name='$name',dept_id=$dept_id,dob=$dob,cgpa=$cgpa,credit='$credit' where id=$id";
		return execute($query);
		
	}
?>