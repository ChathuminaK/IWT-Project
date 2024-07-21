
<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Acctype=$_POST['Acctype'];
    $uname=$_POST['uname'];
	$email=$_POST['email'];
	$ppwd=$_POST['ppwd'];
	$cppwd=$_POST['cppwd'];

    /*  Insert the user into the database*/ 
    $sql = "INSERT INTO registered_user (Acctype,uname,email,ppwd,cppwd) VALUES ('$Acctype','$uname','$email','$ppwd','$cppwd')";

    if (mysqli_query($conn, $sql)) {
        echo "Successfully Register";
        header("location:../html/login.html"); 
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>