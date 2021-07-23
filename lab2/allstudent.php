<?php 
	require_once 'controllers/StudentController.php';
	$student = getStudent();
?>


<div >
	<h3 >All Student</h3>
	<table >
		<thead>
			<th>Sl#</th>
			<th> Name</th>
			<th>Birth Date</th>
			<th>Credit</th>
			<th>CGPA</th>
			<th>Department</th>
			
			
		</thead>
		<tbody>
			<?php
				$i=1;
				foreach($student as $s){
					echo "<tr>";
						echo "<td>$i</td>";
						echo "<td>".$s["name"]."</td>";
						echo "<td>".$s["dept_name"]."</td>";
						echo "<td>".$s["dob"]."</td>";
						echo "<td>".$s["cgpa"]."</td>";
						echo "<td>".$s["credit"]."</td>";
						echo '<td><a href="editstudent.php?id='.$s["id"].'" class="btn btn-success">Edit</a></td>';
						echo '<td><a class="btn btn-danger">Delete</td>';
					echo "</tr>";
					$i++;
				}
			?>
			
		</tbody>
	</table>
</div>

<