<?php
 include 'db.php';

 $email = $_POST ['email'];
 $username = $_POST ['username'];
 $password =$_POST['password'];

 $sql = "SELECT * FROM users WHERE Username='$username' AND Password='$password'";	

 $result = $link->query($sql);
	
 if (!$row = $result->fetch_assoc()){
     echo "Your account is not accepted!";
 } else {
     echo "Your account is correct!";
 }

?>