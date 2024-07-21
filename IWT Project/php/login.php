<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$email=$_POST['email'];
    $ppwd=$_POST['ppwd'];

    //Check if the user exists in the database
    $sql = "SELECT * FROM registered_user WHERE email='$email' AND ppwd='$ppwd'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        echo "Login Successful";
    } else {
       echo "Invalid username or password.";
    }
}

mysqli_close($conn);
?>
