<?php

$con = new mysqli('localhost', 'root', 'password', 'laced_web');

if (!$con) {
    	header("Location: http://localhost/Laced%20Website/fail.php?");

    die(mysqli_error($con));
}

if (isset($_POST['signup'])) {

    $username = $_POST['user'];
    $number = $_POST['number'];
    $password = $_POST['password'];
    $confirmpass = $_POST['confirmpass'];

    // Check if the username is already taken
    $sql1 = "SELECT * FROM login WHERE username='$username'";
    $result1 = mysqli_query($con, $sql1);

    if (mysqli_num_rows($result1) > 0) {
        $errorMessage = "Username unavailable.";
        header("Location: http://localhost/Laced%20Website/feedform.php?error=$errorMessage");
        exit();
    }

    // Check if passwords match
    if ($password !== $confirmpass) {
        $errorMessage = "Passwords don't match.";
        header("Location: http://localhost/Laced%20Website/feedform.php?error=$errorMessage");
        exit();
    }

    // If all checks pass, insert the data into the database
    $sql = "INSERT INTO login (username, number, password, confirmpass) VALUES ('$username', '$number', '$password', '$confirmpass')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        // Registration successful
        header('Location: http://localhost/Laced%20Website/success.php');
        exit();
    } else {
        // Registration failed
        $errorMessage = "Registration failed.";
        header("Location: http://localhost/Laced%20Website/fail.php?error=$errorMessage");
        exit();
    }
}
?>
