<?php

ob_start();

if (!isset($_SESSION)) {
    session_start();
}

$connection = mysqli_connect("localhost", "", "", "")

?>