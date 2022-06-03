<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="SignIn.css">
	<style><?php include 'C:\Users\leonila\Desktop\xampp\htdocs\sample\SignIn.css'; ?></style>
	<title> FOOD N' WEB : Sign In </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<h1> FOOD N' WEB </h1>
	<div class="topnav">
		<a class="active" href="#home">Home</a>
		<a href="Dashboard.php" >Related Post</a>
		<a href="Dashboard.php" >Latest Post</a>
		<a href="Dashboard.php" >Category</a>
		<a href="About.php" >About Us</a>
	</div>
</head>

<body>

</body>
	
	<form action="addUser.php" method="Post">
	<div class="table" >
  
    <h2>Sign Up</h2>

	<div class="input-box">
	<input id="user" type="text" placeholder="Username" name="username" required>
	</div>
	
	<div class="input-box">
	<input id="email" type="text" placeholder="Email" name="user_email" required>
	</div>
	
	<div class="input-box">
    <input id="myPassword" type="password" placeholder="Password" name="user_pass" required>
	</div>

	<div class="input-box">
    <input id="confirmPassword" type="password" placeholder="Confirm Password" name="pass" required>
	</div>

    <label>
      <input class = "check" type="checkbox" name="approval"/>I agree with terms of use and privacy
    </label>
	
    <div onclick="signUp()" class="clearfix">
      <button class="signupbtn" value="Submit" type= "Submit">Submit</button>
    </div>
	<script src="SignIn.js"></script>
  </div>
  </form>


<body>
	<figure>
	<img src="https://seeklogo.com/images/F/food-logo-59E5A73AFD-seeklogo.com.png" alt="Logo">
	
	<figcaption> Food n' Web is a fantastic food blog on the internet. It is prepared to provide you with thousands of popular recipes as well as guidance, suggestions, and tricks. This culinary blog makes sure that you get the most out of your resources, so a user-friendly blog design is used. Clean and minimalist design, like most inspiration, makes an excellent first impression. As a result, Food n' Web arranges the content in a logical order. Food n' Web never overlooks the importance of good pictures, hence there are many stunning images on the blog.</figcaption>
	</figure>
</body>
</html>

