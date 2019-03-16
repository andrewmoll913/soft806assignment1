<?php
require_once "db.php";
require_once "queries.php";

if(!empty($_POST["user_name"]) && !empty($_POST["password"])) {
	try {
		
		$db = makeDB();
		$query = $db->prepare($userquery);

		$query->bindParam(":user_name", $_POST["user_name"]);
		$query->execute();
		$user = $query->fetch(PDO::FETCH_ASSOC);

		if($user == false) {
			http_response_code(404);
			header("Content-Type: text/html");
            echo "User Doesn't exist";
		} else if(password_verify($_POST["password"], $user["password"])) {
			http_response_code(401);
			header("Content-Type: application/json");
			echo "Unauthorized ";
		}  else {
			session_start();
			$_SESSION["isvaliduser"] = 0;
			http_response_code(200);
			header("Content-Type: application/json");
			unset($user["password"]);
			$_SESSION["isvaliduser"] = 1;
			echo json_encode($user);
		}
		
		$db = null;
	} catch (PDOException $e) {
		echo 'Message: ' .$e->getMessage();
	}
}
?>
