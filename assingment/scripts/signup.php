<?php
include "dbconn.php";

$name = $_POST['name'];
$email = $_POST['email'];
$country = $_POST['country'];
$grpname = $_POST['grpname'];
$grplink = $_POST['grplink'];

$sql = "INSERT INTO requests (user_name, user_email, user_country, user_group, user_link)
VALUES ('$name', '$email', '$country', '$grpname', '$grplink')";

mysqli_query($conn, $sql);
    
header("Location: ../sucess.html?signup=success");

?>