<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Review</title>
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
<body>
    <?php
        if(isset($_GET['added']) && $_GET['added'] == 'success') {
            echo '<h1 style="color:green;">Added successfully</h1>';
        }
    ?>
   <form id="review-form" action="actions/add-review-action.php" method="POST">
  <label for="user_id">User ID:</label>
  <input type="text" name="user_id" id="user_id" required><br>

  <label for="item_id">Item ID:</label>
  <input type="text" name="item_id" id="item_id" required><br>

  <label for="rating">Rating (1-5):</label>
  <input type="number" name="rating" id="rating" min="1" max="5" required><br>

  <label for="comment">Comment:</label>
  <textarea name="comment" id="comment" required></textarea><br>

  <input type="submit" value="Submit">
</form>




    <script>
        // Retrieve form elements
const userIdInput = document.getElementById("user_id");
const itemIdInput = document.getElementById("item_id");
const ratingInput = document.getElementById("rating");
const commentInput = document.getElementById("comment");

// Add event listener to button
const randomizeButton = document.getElementById("randomize-button");
randomizeButton.addEventListener("click", () => {
  // Generate random values
  const userId = Math.floor(Math.random() * 1000) + 1; // Random number between 1 and 1000
  const itemId = Math.floor(Math.random() * 1000) + 1; // Random number between 1 and 1000
  const rating = Math.floor(Math.random() * 5) + 1; // Random number between 1 and 5
  const comments = ["Great product!", "Terrible service!", "Average quality.", "Would recommend."];
  const comment = comments[Math.floor(Math.random() * comments.length)]; // Random comment from array

  // Set form values
  userIdInput.value = userId;
  itemIdInput.value = itemId;
  ratingInput.value = rating;
  commentInput.value = comment;
});
 
    </script>
</body>
</html>