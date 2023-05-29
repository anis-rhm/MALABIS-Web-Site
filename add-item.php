<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Item</title>
  <link rel="icon" type="image/png" href="images/icons/favicon.png" />
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
  <style>
form {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: 20px auto;
  max-width: 500px;
  padding: 20px;
  border: 2px solid green;
  border-radius: 10px;
  background-color: white;
}

label {
  font-weight: bold;
  color: black;
}

input[type="text"],
textarea,
select {
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid green;
  border-radius: 5px;
  font-size: 16px;
}

input[type="number"],
input[type="file"] {
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid green;
  border-radius: 5px;
  font-size: 16px;
  appearance: none;
  -webkit-appearance: none;
  background-color: white;
}

select option {
  background-color: white;
  color: black;
}

input[type="submit"] {
  background-color: green;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: white;
  color: green;
  border: 1px solid green;
}

input[type="submit"]:focus {
  outline: none;
  box-shadow: 0 0 0 2px black;
}

    </style>
</head>
<body>
    
    	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">

			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">

					<!-- Logo desktop -->
					<a href="index.php" class="logo">
						<img src="images/icons/logo-01.png" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li class="active-menu">
								<a href="index.php">Home</a>
							</li>

							<li>
								<a href="product.php">Shop</a>
							</li>

							<li>
								<a href="about.php">About</a>
							</li>

							<li>
								<a href="contact.php">Contact</a>
							</li>

							<?php
							if (isset($_SESSION["isLoggedIn"]) && $_SESSION["isLoggedIn"] == true) {
									echo '<li>
									<a href="actions/logout-action.php">Logout</a>
								</li>';
								echo '<li>
									<a href="add-item.php">Add Item</a>
								</li>';
								echo '<li>
									<a href="add-review.php">Add review</a>
								</li>';
							} else {
								echo '<li>
								<a href="./login/login.php">Login</a>
							</li>';
								
							}
							?>
						</ul>

					</div>

					
				</nav>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->
			<div class="logo-mobile">
				<a href="index.php"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
			</div>

			
			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">

			<ul class="main-menu-m">
				<li>
					<a href="index.php">Home</a>
				</li>

				<li>
					<a href="product.php">Shop</a>
				</li>

				<li>
					<a href="about.php">About</a>
				</li>

				<li>
					<a href="contact.php">Contact</a>
				</li>

				<?php
						
							if (isset($_SESSION["isLoggedIn"]) && $_SESSION["isLoggedIn"] == true) {
									echo '<li>
									<a href="actions/logout-action.php">Logout</a>
								</li>';
								echo '<li>
									<a href="add-item.php">Add Item</a>
								</li>';
								echo '<li>
									<a href="add-review.php">Add review</a>
								</li>';
							} else {
								echo '<li>
								<a href="./login/login.php">Login</a>
							</li>';
								
							}
							?>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>
	<h1>Add Item</h1>
	<form action="actions/add-item-action.php" method="post" enctype="multipart/form-data">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" required><br><br>

		<label for="description">Description:</label>
		<textarea id="description" name="description" required></textarea><br><br>

		<label for="user_id">User ID:</label>
		<input type="number" id="user_id" name="user_id" required><br><br>

		<label for="category">Category:</label>
		<input type="number" id="category" name="category" required><br><br>

		<label for="size">Size:</label>
		<input type="text" id="size" name="size" required><br><br>

		<label for="price">Price:</label>
		<input type="number" id="price" name="price" step="0.01" min="0" required><br><br>

		<label for="gender">Gender:</label>
		<select id="gender" name="gender" required>
			<option value="men">Men</option>
			<option value="women">Women</option>
			<option value="kids">Kids</option>
		</select><br><br>

		<label for="age_range">Age Range:</label>
		<select id="age_range" name="age_range" required>
			<option value="Adult">Adult</option>
			<option value="Children">Children</option>
		</select><br><br>

		<label for="picture">Picture:</label>
		<input type="file" id="picture" name="picture" required><br><br>

		<input type="submit" value="Add Item">
	</form>
</body>
<script>
window.onload = function() {
  document.getElementById('name').value = 'Sample Item';
  document.getElementById('description').value = 'This is a sample item description.';
  document.getElementById('category').value = 'Clothing';
  document.getElementById('size').value = 'M';
  document.getElementById('price').value = '19.99';
  document.getElementById('gender').value = 'men';
  document.getElementById('age_range').value = 'Adult';
  document.getElementById('picture').value = 'https://example.com/image.jpg';
}
</script>

</html>
