<?php
$username = $_POST['username'];
$user_email = $_POST['user_email'];
$user_pass = $_POST['user_pass'];

if (!empty($username) || !empty($user_email) || !empty($user_pass)){
	$host = "localhost";
	$dbUsername = "root"; //default username
	$dbPassword ="";		//default password
	$dbname = "signin_user";
	
	//create connection
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	
	$sql = "INSERT INTO `registration` (`id`, `username`, `user_email`, `user_pass`) VALUES (NULL, '$username', '$user_email', '$user_pass')";
	
	if (mysqli_connect_error()) {
		die("Connection failed: " . mysqli_connect_error());
	} else {
		
		$stmt = $conn->prepare("SELECT username FROM `registration` WHERE username = ? LIMIT 1");
		$stmt->bind_param("s",$username);
		$stmt->execute();
		$stmt->bind_result($username);
		$stmt->store_result();
		$rnum = $stmt->num_rows;
		
		if($rnum==0){
			$stmt->close();
			
			$stmt = $conn->prepare("INSERT INTO registration (`username`,`user_email`, `user_pass`) VALUES (?, ?, ?)");
			$stmt->bind_param("sss",$username,$user_email,$user_pass);
			$stmt->execute();
			header("Location:http://localhost/sample/Dashboard.php");
		} else{
			header("Location:http://localhost/sample/signIn.php");
		}
		$stmt->close();
		$conn->close();
	}
}else {
	echo "All field are required";
	die();
}

?>