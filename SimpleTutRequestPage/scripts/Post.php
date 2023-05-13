
<?php
if (isset($_POST['submit'])) {
    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $requested = $_POST['requested'];

    // $grpname = $_POST['grpname'];
    // $grplink = $_POST['grplink'];

    // if (empty($name) || empty($email) || empty($country) || empty($grpname) || empty($grplink)) {
    //     header("location: ../progsignin.php?error=emptyfields");
    //     exit();
    // } elseif (empty($name)) {
    //     header("location: ../progsignin.php?error=noname");
    //     exit();
    // } elseif (empty($email)) {
    //     header("location: ../progsignin.php?error=noemail");
    //     exit();
    // } elseif (empty($country)) {
    //     header("location: ../progsignin.php?error=nocountry");
    //     exit();
    // } elseif (empty($grpname)) {
    //     header("location: ../progsignin.php?error=nogroupname");
    //     exit();
    // } elseif (empty($grplink)) {
    //     header("location: ../progsignin.php?error=nogrouplink");
    //     exit();
    // } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    //     header("location: ../progsignin.php?error=invalidemail");
    //     exit();
    // } elseif (!preg_match('/^\+(?:[0-9] ?){6,14}[0-9]$/', $grpname)) {
    //     header("location: ../progsignin.php?error=invalidenumber");
    //     exit();
    // }else {

    $file = fopen("ST.txt", "a");
    fwrite($file, $first . " , ". $last . " , ". $email . " , " . $requested . "\n");
    fclose($file);
    header("location: ../RequestSent.html");
    
}
// }