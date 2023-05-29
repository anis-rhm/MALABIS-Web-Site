<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "malabis";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $name = $_POST['name'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $size = $_POST['size'];
    $price = $_POST['price'];
    $gender = $_POST['gender'];
    $age_range = $_POST['age_range'];

    $picture = $_FILES["picture"];
    $fileName = $_FILES["picture"]["name"];
    $fileTmpName = $_FILES["picture"]["tmp_name"];
    $fileType = $_FILES["picture"]["type"];
    $fileExt = strtolower(end(explode('.', $fileName)));
    $fileNameNew = uniqid('', true).".".$fileExt;
    $fileDestination = "/Applications/XAMPP/xamppfiles/htdocs/malabis/uploads/".$fileNameNew;
    echo $fileNameNew;
    move_uploaded_file($fileTmpName, $fileDestination);

    // Prepare SQL statement
    $sql = "INSERT INTO shop_items (name, description, user_id, category, size, price, gender, age_range, picture)
            VALUES ('$name', '$description', 1, $category, '$size', $price, '$gender', '$age_range', '$fileNameNew')";

    // Execute SQL statement
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close database connection
mysqli_close($conn);
?>
