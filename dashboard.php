<?php 
session_start();
if ($_SESSION['status'] == 0 || $_SESSION["isLoggedIn"] == false)
{
      header("Location: index.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="images/icons/favicon.png" />
  <title>Users Managemet</title>
  <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>

<header class="header">
         <a href="dashboard.php" class="logo" >MALABIS Admins</a>
         <nav class="navbar">
            <a href="dashboard.php" class="active">Users</a>
            <a href="index.php">Home</a>
            <a href="actions/logout-action.php">Logout</a>
         </nav>
    </header>

	<div class="users-container">
    <div class="center">
    <h1>Users Management</h1>
    </div>
	
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Status</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			// first we connect to the database
			define("host", "localhost");
			define ("dbuser", "root");
			define ("dbpass", "");
			define ("dbname", "malabis");
			$con = mysqli_connect( host, dbuser, dbpass, dbname );
			
			$query = "SELECT * from users";
			$result = mysqli_query($con,$query);
			while($row = mysqli_fetch_assoc($result)) {
        if ($row['user_status'] != 1)
        {
				echo "<tr>";
				echo "<td>".$row['user_id']."</td>";
				echo "<td>".$row['user_name']."</td>";
				echo "<td>".$row['user_status']."</td>";
				echo "<td><button class='ban-btn'><a href='actions/ban-action.php?id=".$row["user_id"]."'>Ban</a></button></td>";
				echo "<td><button class='ban-btn green'><a href='actions/unban-action.php?id=".$row["user_id"]."'>Unban</a></button></td>";

				echo "</tr>";
        }
			}
			mysqli_free_result($result);
			mysqli_close($con);
			?>
		</tbody>
	</table>
		</div>
  
</body>
</html>