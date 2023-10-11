<?php

$con = new mysqli('localhost', 'root', 'password', 'laced_web');

if (!$con) {
	header("Location: http://localhost/Laced%20Website/fail.php?");
    die(mysqli_error($con));
}

if (isset($_POST['login'])) {

    $username = $_POST['user'];
    
    $password = $_POST['password'];
    

    // Check if the username is already taken
    $sql = "SELECT * FROM login WHERE username='$username' and password='$password'";
    $result = mysqli_query($con, $sql);
	if ($result && mysqli_num_rows($result) ===1) {
		// Login successful
		header("Location: http://localhost/Laced%20Website/success.php?");
		exit();
	} else {
		// Login failed
		$errorMessage = "Username or password incorrect.";
		header("Location: http://localhost/Laced%20Website/fail.php?error=$errorMessage");
		exit();
	}
}
?>
