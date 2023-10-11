<?php

$con = new mysqli('localhost', 'root', 'password', 'laced_web');

if (!$con) {
    	header("Location: http://localhost/Laced%20Website/fail.php?");

    die(mysqli_error($con));
}

if (isset($_POST['signup'])) {

    $cardno = $_POST['cardNumber'];
    $expiry = $_POST['expiryDate'];
    $cvv = $_POST['cvv'];
    
    // Check if the username is already taken
    $sql1 = "INSERT INTO payment (cardno, expiry, cvv) VALUES ('$cardno', '$expiry', '$cvv')";
    $result1 = mysqli_query($con, $sql1);

    

    if ($result1) {
        // Registration for payment successful
        header('Location: http://localhost/Laced%20Website/successCrud.php');
        exit();
    } else {
        // Registration failed
        $errorMessage = "Payment details were not added.";
        header("Location: http://localhost/Laced%20Website/feedform.php?error=$errorMessage");
        exit();
    }
}
?>
