<?php
require_once "User.php";


if(!(empty($_POST["user_name"]) &&
     empty($_POST["first_name"]) &&
     empty($_POST["last_name"]) &&
     empty($_POST["email"]) && 
     empty($_POST["password"]) &&
     empty($_POST["confirmpassword"])))
{
    $user = new User($_POST["user_name"], $_POST["first_name"],
                     $_POST["last_name"], $_POST["email"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        
    if($user->register($password))
    {
        header("Location: /soft806assignment1/public/login.html", true, 302);
    }
    else
    {
        http_response_code(400);
        echo var_dump($_POST);
    }
    
} else {
	http_response_code(400);
	header("Content-Type: application/json");
	var_dump(json_encode($_POST));
   }
?>
