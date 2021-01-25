<?php

$connection = mysqli_connect("localhost", "root", "labExam");
if ($connection === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
    
echo "Succesfully Logged-in. Host info: " .  mysqli_get_host_info($connection);
?>

?>