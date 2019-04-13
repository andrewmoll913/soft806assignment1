<?php
// Initialize the session.
// If you are using session_name("something"), don't forget it now!
session_start();

// Unset all of the session variables.
unset($_SESSION);
session_destroy();
header("Location: /soft806assignment1/public/login.html", true, 301);
?>
