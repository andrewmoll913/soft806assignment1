<?php
$userquery = "SELECT * FROM tbuser WHERE user_name LIKE :user_name";
$registerquery = "INSERT INTO `tbuser`(`user_name`, `first_name`,`last_name`, `email`, `password`) VALUES (:user_name, :first_name, :last_name, :email, :password)";
?>
