<?php

$con=new mysqli('localhost','root','password','laced_web');

if (!$con){
    die(mysqli_error($con));
}

?>