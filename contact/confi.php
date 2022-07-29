
<?php
// connect database

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";


// Create connection
$conn = new mysqli($servername, $username, $password,$dbname),;

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "INSERT INTO message (name, review)
VALUES ('name', 'message')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
    
// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();

?>