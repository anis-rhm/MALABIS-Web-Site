<head>
<style>
  table {
    border-collapse: collapse;
    width: 100%;
    font-family: Arial, sans-serif;
    font-size: 16px;
    color: #333;
    background-color: #fff;
  }

  th, td {
    border: 1px solid #ccc;
    padding: 10px;
  }

  th {
    background-color: #f2f2f2;
    font-weight: bold;
    text-align: left;
  }

  tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  tr:hover {
    background-color: #ddd;
  }

</style>
</head>

<!-- beginning of body -->
<body>

<?php 
session_start();
// first we connect to the database
define("host", "localhost");
define("dbuser", "root");
define("dbpass", "");
define("dbname", "malabis");
$con = mysqli_connect(host, dbuser, dbpass, dbname);

if (isset($_SESSION["id"])) {
  $query = "SELECT * FROM shop_items WHERE user_id =" .  $_SESSION["id"];
  $result = mysqli_query($con, $query);
    
  if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Category</th>";
    echo "<th>Price</th>";
    echo "<th>Action</th>";
    echo "</tr>";
      
    while($row = mysqli_fetch_assoc($result)) { 
      echo "<tr>";
      echo "<td>".$row['name']."</td>";
      echo "<td>".$row['category']."</td>";
      echo "<td>".$row['price']."</td>";
      echo "<td><a href='action/delete-item.php?id=".$row['item_id']."'>Delete</a></td>";
      echo "</tr>";
    } //end while 
  } else {
    echo "The user " . $_SESSION["user_name"] . " has no items yet.";
  }
  
  mysqli_free_result($result);
  mysqli_close($con);
} else {
  echo "Please log in to view your items.";
}
?>

<a href="add-item.php">Add Item</a>

</body>
