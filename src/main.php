<!DOCTYPE html>
<?php
session_start();
if(empty($_SESSION["isvaliduser"]) || $_SESSION["isvaliduser"] == 0) {
    header("redirect: main.php",  true, 303);
    die();
}
?>
<html>
    <head>
	<title>Hello <?php echo $_SESSION["user_name"] ?></title>
    </head>
    <body>
	
		<img src="<?php require '../vendor/autoload.php';
			  $identicon = new \Identicon\Identicon();
			  echo $identicon->getImageDataUri($_SESSION["user_name"]); ?>" alt="Identicon" /> <br/>
		  <a href="logout.php" >Logout</a>
	
    </body>
</html>
