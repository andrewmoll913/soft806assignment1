<?php
require_once "User.php";

if(!empty($_POST["user_name"]) && !empty($_POST["password"]))
{
    $status = User->login($_POST["user_name"], $_POST["password"]);
    if($status)
    {
        http_response_code(404);
        header("Content-Type: text/html");
    }
    else
    {
        session_start();
        $_SESSION["isvaliduser"] = 0;
        $_SESSION["user_name"] = $_POST["user_name"];
        unset($user["password"]);
        $_SESSION["isvaliduser"] = 1;
        header("Location: main.php",  true, 303);
        die();
    }
}
?>
