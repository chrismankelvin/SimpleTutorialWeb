<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tele";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST['name'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $grpname = $_POST['grpname'];
    $grplink = $_POST['grplink'];



$sql = $sql = "INSERT INTO users (user_name, user_email, user_country, user_grpname, user_grplink)
VALUES ('$name', '$email', '$country', 'grpname', 'grplink')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>