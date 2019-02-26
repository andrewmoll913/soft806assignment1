<?php
$userquery = "SELECT * FROM tbusers WHERE email LIKE :user_email";
$registerquery = "INSERT INTO `tbusers`(`first_name`, `last_name`, `email`, `password`) VALUES (:first_name, :last_name, :email, :password)";
?>
