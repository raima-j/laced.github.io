<?php

$con = new mysqli('localhost', 'root', 'password', 'laced_web');

if (!$con) {
    	header("Location: http://localhost/Laced%20Website/fail.php?");

    die(mysqli_error($con));
}

if (isset($_POST['remove'])) {

    $username = $_POST['user'];
    $number = $_POST['number'];
    $password = $_POST['password'];
    $confirmpass = $_POST['confirmpass'];

    // Check if the username is already taken
    $sql1 = "SELECT * FROM login WHERE username='$username' and password='$password'";
    $result1 = mysqli_query($con, $sql1);

    if (mysqli_num_rows($result1) <= 0) {
        $errorMessage = "Username or password incorrect.";
        header("Location: http://localhost/Laced%20Website/remove.php?error=$errorMessage");
        exit();
    }

    
    // If all checks pass, insert the data into the database
    $sql = "DELETE from login where password=$password and username='$username'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        // Registration successful
        header('Location: http://localhost/Laced%20Website/successCrud.php');
        exit();
    } else {
        // Registration failed
        $errorMessage = "Removal failed.";
        header("Location: http://localhost/Laced%20Website/fail.php?error=$errorMessage");
        exit();
    }
}
?>
