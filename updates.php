<?php

$con = new mysqli('localhost', 'root', 'password', 'laced_web');

if (!$con) {
    	header("Location: http://localhost/Laced%20Website/fail.php?");

    die(mysqli_error($con));
}

if (isset($_POST['update'])) {

    $username = $_POST['user'];
    $number = $_POST['number'];
    $password = $_POST['password'];
    $confirmpass = $_POST['confirmpass'];

    // Check if the username is already taken
    $sql1 = "SELECT * FROM login WHERE username='$username'";
    $result1 = mysqli_query($con, $sql1);

    if (mysqli_num_rows($result1) <= 0) {
        $errorMessage = "Username not found.";
        header("Location: http://localhost/Laced%20Website/update.php?error=$errorMessage");
        exit();
    }

    // Check if passwords match
    if ($password !== $confirmpass) {
        $errorMessage = "Passwords don't match.";
        header("Location: http://localhost/Laced%20Website/update.php?error=$errorMessage");
        exit();
    }

    // If all checks pass, insert the data into the database
    $sql = "UPDATE login SET password=$password WHERE username='$username'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        // Registration successful
        header('Location: http://localhost/Laced%20Website/successCrud.php');
        exit();
    } else {
        // Registration failed
        $errorMessage = "Registration failed.";
        header("Location: http://localhost/Laced%20Website/contact.html?error=$errorMessage");
        exit();
    }
}
?>
