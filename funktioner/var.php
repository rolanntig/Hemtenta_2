        <?php 
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud_app";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Create database
/*
$sql = "CREATE DATABASE crud_app";
if (mysqli_query($conn, $sql)) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}*/

// sql to create table
/*$sql = "CREATE TABLE products (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
description VARCHAR(255),
price INT NOT NULL,
image VARCHAR(100)
)";
*/

    ?>