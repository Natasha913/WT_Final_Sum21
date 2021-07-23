<?php
	
	include 'db_config.php';
	
	
		$query = "insert into users values (NULL,' hauqe','rooq12','3456')";
		echo execute($query);
		
		
		$query = "select * from users";
		$result = get($query);
		
		echo "<table border=''>";
			echo "<tr>
					<th>Id</th><th>Name</th><th>Username</th>
				  </tr>";
		foreach($result as $row){//result ta arry tai frch use not while
			echo "<tr>";
				echo "<td>".$row["id"]."</td>";
				echo "<td>".$row["name"]."</td>";
				echo "<td>".$row["username"]."</td>";
			echo "</tr>";
		}
		echo "</table>";
	
	
?>