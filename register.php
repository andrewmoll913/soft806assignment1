<?php
require_once "db.php";

if(!(empty($_POST["first_name"]) && empty($_POST["last_name"]) && empty($_POST["email"]) && 
     empty($_POST["password"]) && empty($_POST["confirmpassword"]))) {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    
    $db = makeDB();
    $query = $db->prepare($registerquery);
    $query->bindParam(":first_name", $first_name);
    $query->bindParam(":last_name", $last_name);
    $query->bindParam(":email", $email);
    $query->bindParam(":password", $password);
        
    if($query->execute()) {
        http_response_code(200);
        header("Content-Type: application/json");
        echo "OK";
    } else {
        http_response_code(400);
        echo var_dump($_POST);
    }
    
} else {
	http_response_code(400);
	header("Content-Type: application/json");
	var_dump(json_encode($_POST));
	var_dump(empty($_POST["first_name"]) && empty($_POST["last_name"]) && empty($_POST["email"]) && 
             empty($_POST["password"]) && empty($_POST["address"]) && empty($_POST["contact_number"]));
}



?>
