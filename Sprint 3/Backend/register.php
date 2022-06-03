<?php
	include 'DBConnector.php';

	$sql = "SELECT * FROM registration";
	$result = $conn -> query($sql);
	
	if($result -> num_rows > 0){
		while($row = $result -> fetch_assoc()) {
			echo "<tr>".
				"<td align='center'>".$row["id"]."</td>".
				"<td align='center'>".$row["username"]."</td>".
				"<td align='center'>".$row["user_email"]."</td>".
				"<td align='center'>".$row["user_pass"]."</td>".
				
				"<td align='center' style='background: green; width: 70px;'>".
					"<form action='Logout-delete.php' method='post'>".
						"<input type= 'text' style='display:none;' name= 'id' value='".$row["id"]."'>". 
						"<button type='submit'>Delete</button>".
					"</form>".
					
				"</td>";
			"</tr>";
		}

	}
	else{
		echo "0 results";
	}

	$conn->close();
?>