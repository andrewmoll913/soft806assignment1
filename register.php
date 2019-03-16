<?php
require_once "db.php";
require_once "queries.php";

if(!(empty($_POST["user_name"]) && empty($_POST["first_name"]) && empty($_POST["last_name"]) && empty($_POST["email"]) && 
     empty($_POST["password"]) && empty($_POST["confirmpassword"]))) {
    $user_name = $_POST["user_name"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    
    $db = makeDB();
    $query = $db->prepare($registerquery);
    $query->bindParam(":user_name", $user_name);
    $query->bindParam(":first_name", $first_name);
    $query->bindParam(":last_name", $last_name);
    $query->bindParam(":email", $email);
    $query->bindParam(":password", $password);
        
    if($query->execute()) {
        http_response_code(200);
        header("Content-Type: text/html");
        echo "OK";
    } else {
        http_response_code(400);
        echo var_dump($_POST);
    }
    
} else {
	http_response_code(400);
	header("Content-Type: application/json");
	var_dump(json_encode($_POST));
	
}



?>
