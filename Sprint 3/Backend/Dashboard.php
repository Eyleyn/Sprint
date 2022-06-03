<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="Dashboard.css">
	<style><?php include 'C:\Users\leonila\Desktop\xampp\htdocs\sample\Dashboard.css'; ?></style>
	<div class="table">
	<title> FOOD N' WEB : Dashboard </title> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<h1> FOOD N' WEB </h1>
	
	<div class="topnav">
		<div class="related">
			<button class="dropbtn">Related Post
				<i class="fa fa-caret-down"></i>
			</button>
			<div class="related-content">
				<a href="#" onclick = "relatedChicken()" >Chicken Recipes</a>
				<a href="#" onclick = "relatedPork()" >Pork Recipes</a>
				<a href="#" onclick = "relatedBeef()" >Beef Recipes</a>
				<a href="#" onclick = "relatedFish()">Fish Recipes</a>
			</div>
		</div>
		<a href="#latest">Latest Post</a>
		<div class="category">
			<button class="dropbtn">Category Post
				<i class="fa fa-caret-down"></i>
			</button>
			<div class="category-content">
				<a href="#" onclick = "relatedBreakfast()" >Breakfast</a>
				<a href="#" onclick = "relatedSnacks()" >Snacks</a>
				<a href="#" onclick = "relatedLunch()" >Lunch</a>
				<a href="#" onclick = "relatedDinner()" >Dinner</a>
			</div>
		</div>
		<a href="About.php" onclick = "AboutUs()" >About Us</a>
		<a href="Logout.php">Log Out</a>
	</div>
</head>
<body>
	<div id="backgroundimage">
	</div>
	
	<div>
	<h2>Dinner Ideas</h2>
	
	<p>These simple supper ideas provide a simple response to the age-old question, "What's for dinner?"</p>
	
	<h3>Dessert</h3>
	<p>Ideas to make these top-notch spring treats, utilize delectable vegetables and lovely decorations!!!</p>
	</div>
	
	<figure>
	<img src="https://thebigmansworld.com/wp-content/uploads/2022/01/healthy-dinner-ideas.jpeg" alt="Logo">
	<figcaption>Orange Chicken</figcaption>
	
	<img src="https://assets.bonappetit.com/photos/60e46c6701084801b06de2a3/1:1/w_2560%2Cc_limit/Halo-Halo-Recipe-2021.jpg" alt="Logo">
	<figcaption>Halo-Halo</figcaption>
	</figure>
	<script src="Dashboard.js"></script>
	
</body>

<footer>All Right Reserved 2022</footer>
</html>
