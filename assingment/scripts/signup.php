<?php
$servername = "localhost:3306";
$username = "chrismankelvin_users";
$password = "VY_uqwV3_ax70dpt";
$dbname = "chrismankelvin_joomla_3";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

mysqli_close($conn);

// $name = $_POST['name'];
// $email = $_POST['email'];
// $country = $_POST['country'];
// $grpname = $_POST['grpname'];
// $grplink = $_POST['grplink'];

// $sql = "INSERT INTO requests (user_name, user_email, user_country, user_group, user_link)
// VALUES ('$name', '$email', '$country', '$grpname', '$grplink')";

// mysqli_query($conn, $sql);
    
// header("Location: ../sucess.html?signup=success");
?>


?>