
<?php
	require_once 'controllers/StudentController.php';
	require_once 'controllers/DepartmentController.php';
	$categories = getAllDepartment();
?>
<!--addproduct starts -->
<div>
	<h5 ><?php echo $err_db;?></h5>
	<form action="" method="post" enctype="multipart/form-data">
		<div >
			<h4 >Department ID:</h4> 
			<input type="text" name="id" class="form-control">
		</div>
		<div >
			<h4 >Department Name:</h4> 
			<select name="dept_id" class="form-control">
				<option disabled selected>Choose</option>
				<?php
					foreach($departments as $dept){
						echo "<option value='".$dept["id"]."'>".$dept["name"]."</option>";
					}
				?>
			</select>
		</div>
		
		<div >
			
			<input type="submit" name="add_student" class="btn btn-success" value="Add Student" >
		</div>
	</form>
</div>

