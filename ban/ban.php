<!DOCTYPE html>
<html>
<head>
	<title>User Management</title>
	<link rel="stylesheet" href="../css/ban.css">
	<link rel="icon" type="image/png" href="../images/icons/favicon.png" />
	<style>
table {
  border-collapse: collapse;
  width: 80%;
  margin: auto;
}

th, td {
  border: 1px solid #ddd;
  padding: 8px;
}

th {
  background-color: #3498db;
  color: white;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #e2e2e2;
}

.content{
  margin-top: -20%;
  margin-left: 20%;
  width: 75%;
  float: right;
}
</style>
</head>


<body>
	<div class="users-container">
	<h1>User Management</h1>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Status</th>
				<th>Action</th>
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
				echo "<tr>";
				echo "<td>".$row['user_id']."</td>";
				echo "<td>".$row['user_name']."</td>";
				echo "<td>".$row['user_status']."</td>";
				echo "<td><button class='ban-btn'><a href='../actions/ban-action.php?id=".$row["user_id"]."'>Ban</a></button></td>";
				echo "<td><button class='ban-btn green'><a href='../actions/unban-action.php?id=".$row["user_id"]."'>Unban</a></button></td>";

				echo "</tr>";
			}
			mysqli_free_result($result);
			mysqli_close($con);
			?>
		</tbody>
	</table>
		</div>
</body>
</html>
