
    <?php
    include_once "databaseconn.php";

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $grpname = mysqli_real_escape_string($conn, $_POST['grpname']);
    $grplink = mysqli_real_escape_string($conn, $_POST['grplink']);


    $sql = "INSERT INTO customers (user_name, user_email, user_country, user_grpname, user_grplink) 
    VALUES(?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "it fialed";
    } else{
        mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $uid, $pwd);
        mysqli_stmt_execute($stmt);
    }

    header("Location: succeeded.html?signup=success");
