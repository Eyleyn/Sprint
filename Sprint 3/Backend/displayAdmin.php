<!DOCTYPE html>
<html>
<style>
	body{
		font-family: Calibri, Candara, Segoe, Segoe UI, Optimize, Arial, sans-serif;
		background-image: url('https://thumbs.dreamstime.com/b/blank-space-kitchen-wide-banner-concept-background-mockup-spoon-teapot-cups-rolling-pin-bowls-wooden-table-white-181546801.jpg');
		background-repeat:no-repeat;
		background-size: cover;
		color: black;
	}
	table, th, td{
		border: 1px solid green;
		width: 20px;
	}
</style>
<body>
		<h2 style="color: green; text-align: center; font-size: 50px;">Users Info</h2>
		<table style="width:100%; background: white;">
			<tr>
				<th>ID</th>
				<th>Username</th>
				<th>Email</th>
				<th>Password</th>
				<th>Actions</th>
			</tr>
		<?php
			include 'register.php';
		?>
		</table>
</body>
</html>